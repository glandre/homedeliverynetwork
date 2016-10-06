<?php

namespace App\Http\Controllers;

use App\Vendor;
use Illuminate\Http\Request;

use App\Http\Requests;

class VendorController extends CRUDController
{
    public function __construct(Request $request, Vendor $vendor)
    {
        parent::__construct($request);
        $this->model = $vendor;
    }

    protected function listView()
    {
        return 'products.vendors.list';
    }

    protected function editView()
    {
        return 'products.vendors.edit';
    }

    protected function collectionName()
    {
        return 'vendors';
    }

    protected function columnToSort()
    {
        return 'name';
    }

    protected function newModel()
    {
        return new Vendor();
    }

    /**
     * @param bool $isUpdate
     * @return mixed
     */
    protected function validateRequest($isUpdate = false)
    {
        Vendor::validator($this->request->all(), $isUpdate)->validate();
    }

    public function store()
    {
        $this->validateRequest();
        Vendor::create([
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
