<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{
    public function index()
    {
        $model = model(UserModel::class);

        $data['user'] = $model->getUser(1);

        return view('templates/header', $data)
            . view('user/index')
            . view('templates/footer');
    }

    public function view($userId = 1)
    {
        $model = model(UserModel::class);

        $data['user'] = $model->getUser($userId);
    }

    public function create()
    {
        helper('form');

        //Check whether the form is submitted.
        if (!$this->request->is('post')) {
            //The form is not submitted, so returns the form.
            return view('templates/header')
                . view('user/create')
                . view('templates/footer');
        }

        $post = $this->request->getPost(['name', 'username', 'email', 'password']);

        //Check whether the submitted data passed the validation rules.
        if (
            !$this->validateData($post, [
                'name' => 'required|max_length[255]|min_length[5]',
                'username' => 'required|max_length[255]|min_length[5]',
                'email' => 'required|max_length[255]|min_length[10]',
                'password' => 'required|max_length[255]|min_length[6]',
            ])
        ) {
            // The validation fails, so returns the form.
            return view('templates/header')
                . view('user/create')
                . view('templates/footer');
        }

        $model = model(UserModel::class);
        $model->save([
            'name' => $post['name'],
            'username' => $post['username'],
            'email' => $post['email'],
            'password' => $post['password'],
        ]);

        return view('templates/header')
            . view('user/success')
            . view('templates/footer');
    }
}