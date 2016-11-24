<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Product;
use Illuminate\Http\Request;
use \Uploadcare;



class ProductController extends CRUDController
{
    public function __construct(Request $request, Product $vendor)
    {
        parent::__construct($request);
        $this->model = $vendor;
    }

    protected function listView()
    {
        return 'products.list';
    }

    protected function editView()
    {
        return 'products.edit';
    }

    protected function collectionName()
    {
        return 'products';
    }

    protected function columnToSort()
    {
        return 'name';
    }

    protected function newModel()
    {
        return new Product();
    }

    protected function validateRequest($isUpdate = false, $data = null)
    {
        if(is_null($data)) {
            $data = $this->request->all();
        }
        else if($data instanceof Product) {
            $data = $data->toArray();
        }
        Product::validator($data, $isUpdate)->validate();
    }

    public function store()
    {
        $this->validateRequest();
        $api = new Uploadcare\Api('cc79e063e30c7c41996d', 'e744f785ee9311d80ed6');

        $values = [
            'name' => $this->request->input('name'),
            'description' => $this->request->input('description'),
            'quantity' => $this->request->input('quantity'),
            'price' => $this->request->input('price'),
            'incoming' => $this->request->input('incoming'),
            'continue_selling' => $this->request->input('continue_selling') == 'Continue selling',
            'type_id' => $this->request->input('type_id'),
            'vendor_id' => $this->request->input('vendor_id')
        ];

        if($this->request['picture']) {
            $values['picture'] = $this->request['picture'];
        }

        Product::create($values);

        session()->flash('message_success', trans('strings.saveSuccess'));

        return $this->index();
    }

    public function update($id)
    {
        $this->validateRequest(true);
        $this->model = $this->model->find($id);

        $values = [
            'name' => $this->request->input('name'),
            'description' => $this->request->input('description'),
            'quantity' => $this->request->input('quantity'),
            'price' => $this->request->input('price'),
            'incoming' => $this->request->input('incoming'),
            'continue_selling' => $this->request->input('continue_selling') == 'Continue selling',
            'type_id' => $this->request->input('type_id'),
            'vendor_id' => $this->request->input('vendor_id')
        ];

        if($this->request->file('picture')) {
            $values['picture'] = $this->request->file('picture')->store('public');
        }

        $updated = $this->model->update($values);

        if($updated) {
            session()->flash('message_success', trans('strings.updatedSuccess'));
        }
        else {
            session()->flash('message_danger', trans('strings.updatedSuccess'));
        }

        return $this->index();
    }

    /**
     * Display a listing of the resource.
     *
     * @param null $models
     * @return \Illuminate\Http\Response
     */
    public function index($models = null) {
        return $this->showCollection($models, $this->listView());
    }

    public function updateInventory() {
        $productId = $this->request->input('productId');
        $newQuantity = $this->request->input('newQuantity');
        $continueSelling = $this->request->input('continueSelling') == true;

        $product = Product::find($productId);
        $product->quantity = $newQuantity;
        $product->continue_selling = $continueSelling;

        $this->validateRequest(true, $product);

        $product->saveOrFail();

        return response()->json('success');
    }

    public function showInventory($models = null) {
        return $this->showCollection($models, 'products.inventory');
    }

    private function showCollection($models, $viewName) {
        if(!isset($models)) {
            $models = $this->model->orderBy($this->columnToSort())->with('type', 'vendor')->get();
        }
        return view($viewName, [
            $this->collectionName() => $models
        ]);
    }

}
