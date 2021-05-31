<?php

namespace App\Controllers;

class UserController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'active' => 'my-profile'
        ];
        return view('user/index', $data);
    }
}
