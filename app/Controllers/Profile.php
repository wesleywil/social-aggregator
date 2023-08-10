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


    public function update()
    {
        $session = session();
        $userModel = model(UserModel::class);
        $socialModel = model(SocialsModel::class);
        $colorModel = model(ColorsModel::class);

        $data = $userModel->where('id', $session->get('id'))->first();

        if ($data) {
            if (!$this->request->is('post')) {
                $data = [
                    'user' => $userModel->getUser($session->get('id')),
                    'colors' => $colorModel->getColors($session->get('id')),
                    'socials' => $socialModel->getSocials($session->get('id'))
                ];
                return view('templates/header', $data)
                    . view('pages/profile_edit')
                    . view('templates/footer');
            } else {
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
            }

        } else {
            $session->setFlashdata('msg', "User Not found");
            return redirect()->to('/login');
        }
    }

    public function updateColors()
    {
        $session = session();
        $colorModel = model(ColorsModel::class);


        $rules = [
            'bg_color' => 'required',
            'txt_color' => 'required',
            'acc_color' => 'required',
        ];

        if ($this->validate($rules)) {
            $updateData = [
                'bg_color' => $this->request->getPost('bg_color'),
                'txt_color' => $this->request->getPost('txt_color'),
                'acc_color' => $this->request->getPost('acc_color'),


            ];
            $colorModel->where('userId', $session->get('id'))->set($updateData)->update();
            return redirect()->to('/dashboard');
        }
    }

    public function updateSocials()
    {
        $session = session();
        $socialsModel = model(SocialsModel::class);


        $rules = [
            'facebook' => 'required|min_length[3]|max_length[20]',
            'youtube' => 'required|min_length[3]|max_length[20]',
            'instagram' => 'required|min_length[3]|max_length[20]',
            'tiktok' => 'required|min_length[3]|max_length[20]',
            'twitter' => 'required|min_length[3]|max_length[20]',
            'linkedin' => 'required|min_length[3]|max_length[20]',
        ];

        if ($this->validate($rules)) {
            $updateData = [
                'facebook' => $this->request->getPost('facebook'),
                'youtube' => $this->request->getPost('youtube'),
                'instagram' => $this->request->getPost('instagram'),
                'tiktok' => $this->request->getPost('tiktok'),
                'twitter' => $this->request->getPost('twitter'),
                'linkedin' => $this->request->getPost('linkedin'),

            ];
            $socialsModel->where('userId', $session->get('id'))->set($updateData)->update();
            return redirect()->to('/dashboard');
        }
    }
}