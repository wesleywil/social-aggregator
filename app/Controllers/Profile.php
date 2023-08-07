<?php

namespace App\Controllers;

use App\Models\UserModel;
use App\Models\SocialsModel;
use App\Models\ColorsModel;


class Profile extends BaseController
{
    public function index()
    {
        $userModel = model(UserModel::class);
        $socialModel = model(SocialsModel::class);
        $colorModel = model(ColorsModel::class);

        $session = session();

        $data = [
            'user' => $userModel->getUser(1),
            'socials' => $socialModel->getSocials(1),
            'colors' => $colorModel->getColors(1),
            'session' => $session,
        ];

        return view('templates/header', $data)
            . view('pages/profile_card')
            . view('templates/footer');
    }
}