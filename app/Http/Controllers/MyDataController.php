<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyDataController extends Controller
{
    public function index(){
        return view('users.user-info');
    }

    public function info_edit(){
        return view('users.edit-info-user');
    }

    public function password_edit(){
        return view('users.edit-password-user');
    }
}