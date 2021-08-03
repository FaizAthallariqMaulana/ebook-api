<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index() {
        return ([
            'NIS' => '3103119069',
            'Nama' => 'Faiz Athallariq Maulana',
            'Gender' => 'Pria',
            'Phone' => '0816886202',
            'Class' => 'XII RPL 2'
        ]);
    }
}
