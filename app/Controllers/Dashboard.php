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

        $session = session();

        $data = [
            'user' => $userModel->getUser($session->get('id')),
            'socials' => $socialModel->getSocials($session->get('id')),
            'colors' => $colorModel->getColors($session->get('id')),
            'session' => $session
        ];

        return view('templates/header', $data)
            . view('pages/dashboard')
            . view('templates/footer');
    }
}