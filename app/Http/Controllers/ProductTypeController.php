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
        return 'products/types';
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
        ProductType::create([
            'name' => $this->request->input('name'),
            'description' => $this->request->input('description')
        ]);

        $this->session->flash('message_success', trans('strings.saveSuccess'));

        return $this->index();
    }

    public function update($id)
    {
        $this->validateRequest(true);
        $this->model = $this->model->findOrFail($id);

        $this->model->name = $this->request->input('name');
        $this->model->description = $this->request->input('description');

        $updated = $this->model->update();

        if($updated) {
            $this->session->flash('message_success', trans('strings.updatedSuccess'));
        }
        else {
            $this->session->flash('message_danger', trans('strings.updatedSuccess'));
        }

        return $this->index();
    }
}