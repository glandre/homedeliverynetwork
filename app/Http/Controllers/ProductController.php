<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;

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

    protected function validateRequest($isUpdate = false)
    {
        Product::validator($this->request->all(), $isUpdate)->validate();
    }

    public function store()
    {
        $this->validateRequest();
        Product::create([
            'name' => $this->request->input('name'),
            'description' => $this->request->input('description'),
            'quantity' => $this->request->input('quantity'),
            'type_id' => $this->request->input('type_id'),
            'vendor_id' => $this->request->input('vendor_id')
        ]);

        $this->session->flash('message_success', trans('strings.saveSuccess'));

        return $this->index();
    }

    public function update($id)
    {
        $this->validateRequest(true);
        $this->model = $this->model->findOrFail($id);

        $updated = $this->model->update([
            'name' => $this->request->input('name'),
            'description' => $this->request->input('description'),
            'type_id' => $this->request->input('type_id'),
            'vendor_id' => $this->request->input('vendor_id')
        ]);

        if($updated) {
            $this->session->flash('message_success', trans('strings.updatedSuccess'));
        }
        else {
            $this->session->flash('message_danger', trans('strings.updatedSuccess'));
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

        if(!isset($models)) {
            $models = $this->model->orderBy($this->columnToSort())->with('type', 'vendor')->get();
        }
        return view($this->listView(), [
            $this->collectionName() => $models
        ]);
    }

}
