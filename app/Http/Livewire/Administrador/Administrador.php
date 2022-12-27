<?php

namespace App\Http\Livewire\Administrador;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Administrador extends Component
{

    public function allAdmins(){
        $users = DB::table('administradores')
        ->join('personas','administradores.persona_id','=','personas.id')
        ->join('users','personas.user_id','users.id')
        ->join('roles','users.role_id','roles.id')
        ->select('personas.*','administradores.id as administrador_id')
        ->where('roles.role','=','administrador')
        ->get();

        return $users;
    }

    public function render()
    {
        return view('livewire.administrador.administrador',[
            'admins' => $this->allAdmins()
        ]);
    }
}
