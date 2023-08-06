<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\SocialsModel;
use App\Models\ColorsModel;


class Dashboard extends BaseController
{
    public function index()
    {
        $userModel = model(UserModel::class);
        $socialModel = model(SocialsModel::class);
        $colorModel = model(ColorsModel::class);

        $data = [
            'user' => $userModel->getUser(1),
            'socials' => $socialModel->getSocials(1),
            'colors' => $colorModel->getColors(1)
        ];

        return view('templates/header', $data)
            . view('pages/dashboard')
            . view('templates/footer');
    }
}