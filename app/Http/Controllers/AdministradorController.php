<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AdministradorController extends Controller
{
    public function index(){
        return view('admin.administrador.administrador');
    }
    public function test(){

        $array = [
            (object) [
                "field" => "id",
                "name" => "#",
            ],
            (object) [
                "field" => "nombres",
                "name" => "nombres",
            ],
            (object) [
                "field" => "carnet",
                "name" => "carnet",
            ],
            (object) [
                "field" => "fecha_nacimiento",
                "name" => "nacimiento",
            ],
            (object) [
                "field" => "direccion",
                "name" => "direccion",
            ],
            (object) [
                "field" => "telefono",
                "name" => "telefono",
            ],
        ];
        $user = DB::table('docentes')->get();

        return $array;
    }
}
