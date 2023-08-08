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

    public function update_index()
    {
        $session = session();

        $userModel = model(UserModel::class);

        $data = [
            'user' => $userModel->getUser($session->get('id'))
        ];
        return view('templates/header', $data)
            . view('pages/profile_edit')
            . view('templates/footer');
    }

    public function update()
    {
        $session = session();
        $userModel = model(UserModel::class);

        $data = $userModel->where('id', $session->get('id'))->first();

        if ($data) {
            $rules = [
                'name' => 'required|min_length[3]|max_length[50]',
                'username' => 'required|min_length[3]|max_length[50]',
                'email' => 'required|min_length[10]|max_length[155]|valid_email',
            ];

            if ($this->validate($rules)) {
                $updateData = [
                    'name' => $this->request->getPost('name'),
                    'username' => $this->request->getPost('username'),
                    'email' => $this->request->getPost('email'),


                ];
                $userModel->where('id', $session->get('id'))->set($updateData)->update();
                return redirect()->to('/dashboard');
            }
        } else {
            $session->setFlashdata('msg', "You're not authorized, please login");
            return redirect()->to('/login');
        }
    }
}