<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

abstract class CRUDController extends Controller
{
    protected $request;
    protected $requestFilteredData;
    protected $model;

    public function __construct(Request $request)
    {
        $this->request = $request;

        $this->requestFilteredData = array_filter($this->request->all(), function($field){
            return !empty($field);
        });
    }

    protected abstract function listView();
    protected abstract function editView();
    protected abstract function collectionName();
    protected abstract function columnToSort();
    protected abstract function newModel();
    protected abstract function validateRequest($isUpdate = false);

    protected function baseUrl() {
        return $this->collectionName();
    }

    public abstract function store();
    public abstract function update($id);

    /**
     * Default Edit View Name
     * @return string|\Symfony\Component\Translation\TranslatorInterface
     */
    protected function editViewTitle() {
        return trans('strings.edit');
    }

    protected function createViewTitle() {
        return trans('strings.new');
    }

    protected function showViewTitle() {
        return trans('strings.view');
    }

    /**
     * Display a listing of the resource.
     *
     * @param null $models
     * @return \Illuminate\Http\Response
     */
    public function index($models = null) {

        if(!isset($models)) {
            $models = $this->model->orderBy($this->columnToSort())->get();
        }
        return view($this->listView(), [
            $this->collectionName() => $models
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view($this->editView(), [
            'title' => $this->createViewTitle(),
            'url' => $this->baseUrl(),
            'method' => 'post',
            'saveEnabled' => true,
            'readonly' => '',
            'disabled' => '',
            'model' => $this->newModel()]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view($this->editView(), [
            'title' => $this->showViewTitle(),
            'url' => $this->baseUrl(),
            'method' => 'get',
            'saveEnabled' => false,
            'readonly' => 'readonly',
            'disabled' => 'disabled',
            'model' => $this->model->findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view($this->editView(), [
            'title' => $this->editViewTitle(),
            'url' => "{$this->baseUrl()}/$id",
            'method' => 'patch',
            'saveEnabled' => true,
            'readonly' => '',
            'disabled' => '',
            'model' => $this->model->findOrFail($id)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = $this->model->find($id);
        $model->delete();
        session()->flash('message_success', trans('strings.deletedSuccess'));
        return $this->index();
    }
}