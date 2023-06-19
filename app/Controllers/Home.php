<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard '
        ]
        echo view('Mahasiswa/Layout/Header');
        echo view('Mahasiswa/Home/dashboard');
        echo view('Mahasiswa/Layout/Footer');
    }
}
