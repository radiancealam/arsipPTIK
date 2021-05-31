<?php

namespace App\Controllers;

class AdminController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'active' => 'dashboard'
        ];
        return view('admin/index', $data);
    }
}
