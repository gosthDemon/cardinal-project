<?php

namespace App\Http\Controllers;
use App\Http\Controllers\AdministradorController;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }
    public function login(){
        return view('home.login');

        $admin = new AdministradorController;
    }

}
