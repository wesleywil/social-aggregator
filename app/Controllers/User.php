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
}