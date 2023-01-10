<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use App\Models\Role;
use App\Models\Administrator;
use App\Models\User;
use App\Models\People;

class AdministradorController extends Controller
{
    public function index(){
        return view('admin.administrador.administrador');
    }
    public function test(){
        $admins = people::all();
        return $admins;
    }
}
