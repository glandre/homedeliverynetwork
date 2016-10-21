<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;

class UserManagementController extends CRUDController
{
    public function __construct(Request $request, User $user)
    {
        parent::__construct($request);
        $this->model = $user;
    }

    protected function listView()
    {
        return 'users.list';
    }

    protected function editView()
    {
        return 'users.edit';
    }

    protected function collectionName()
    {
        return 'users';
    }

    protected function columnToSort()
    {
        return 'name';
    }

    protected function newModel()
    {
        return new User();
    }

    protected function validateRequest($isUpdate = false)
    {
        User::validator($this->requestFilteredData, $isUpdate)->validate();
    }

    public function store()
    {
        $this->validateRequest();
        $user = new User([
            'name' => $this->request->input('name'),
            'last_name' => $this->request->input('last_name'),
            'email' => $this->request->input('email'),
            'phone' => $this->request->input('phone'),
            'password' => $this->request->input('password'),
            'role_id' => $this->request->input('role_id'),
            'registration_status' => $this->request->input('registration_status')
        ]);

        if($this->request->file('picture')) {
            $user->picture = $this->request->file('picture')->store('public');
        }

        $user->save();

        session()->flash('message_success', trans('strings.saveSuccess'));

        return $this->index();
    }

    public function update($id)
    {
        $this->validateRequest(true);
        $this->model = $this->model->find($id);

        $this->model->name = $this->request->name ?? $this->model->name;
        $this->model->last_name = $this->request->last_name ?? $this->model->last_name;
        $this->model->email = $this->request->email ?? $this->model->email;
        $this->model->phone = $this->request->phone ?? $this->model->phone;
        $this->model->role_id = $this->request->role_id ?? $this->model->role_id;
        $this->model->registration_status = $this->request->registration_status ?? $this->model->registration_status;

        if($this->request->file('picture')) {
            $this->model->picture = $this->request->file('picture')->store('public');
        }

        if($this->request->password) {
            $this->model->password = bcrypt($this->request->password);
        }

        $updated = $this->model->update();

        if($updated) {
            session()->flash('message_success', trans('strings.updatedSuccess'));
        }
        else {
            session()->flash('message_danger', trans('strings.updatedSuccess'));
        }

        return $this->index();
    }

    public function search()
    {
        $users = $this->model
            ->where('name', 'LIKE', '%' . $this->request->input('search') . '%')
            ->orWhere('email', 'LIKE', '%' . $this->request->input('search') . '%')
            ->get();
        if($users->isEmpty()) {
            session()->flash('message_info', trans('strings.noItemsFound'));
        }

        session()->flash('search', '');
        if(mb_strlen($this->request->input('search')) > 0) {
            session()->flash('search', $this->request->input('search'));
        }



        return $this->index($users);
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

        if($model->isAdmin) {
            session()->flash('message_danger', trans('strings.impossibleToDeleteAnAdmin'));
            return $this->index();
        }

        $model->delete();
        session()->flash('message_success', trans('strings.deletedSuccess'));
        return $this->index();
    }
}
