<?php

namespace App\Http\Controllers;

use App\ProductType;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProductTypeController extends CRUDController
{
    public function __construct(Request $request, ProductType $productType)
    {
        parent::__construct($request);
        $this->model = $productType;
    }

    protected function listView()
    {
        return 'products.types.list';
    }

    protected function editView()
    {
        return 'products.types.edit';
    }

    protected function collectionName()
    {
        return 'productTypes';
    }

    protected function columnToSort()
    {
        return 'name';
    }

    protected function newModel()
    {
        return new ProductType();
    }

    protected function baseUrl()
    {
        return 'product-types';
    }

    /**
     * @param bool $isUpdate
     * @return mixed
     */
    protected function validateRequest($isUpdate = false)
    {
        ProductType::validator($this->request->all(), $isUpdate)->validate();
    }

    public function store()
    {
        $this->validateRequest();

        $values = [
            'name' => $this->request->input('name'),
            'description' => $this->request->input('description')
        ];

        if($this->request->file('picture')) {
            $values['picture'] = $this->request->file('picture')->store('public');
        }

        ProductType::create($values);

        session()->flash('message_success', trans('strings.saveSuccess'));
        session()->save();
        return $this->index();
    }

    public function update($id)
    {
        $this->validateRequest(true);
        $this->model = $this->model->find($id);

        $this->model->name = $this->request->input('name');
        $this->model->description = $this->request->input('description');

        if($this->request->file('picture')) {
            $this->model->picture = $this->request->file('picture')->store('public');
        }

        $updated = $this->model->update();

        if($updated) {
            session()->flash('message_success', trans('strings.updatedSuccess'));
        }
        else {
            session()->flash('message_danger', trans('strings.updatedSuccess'));
        }
        session()->save();

        return $this->index();
    }
}
