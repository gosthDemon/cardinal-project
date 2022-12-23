<?php

namespace App\Http\Livewire\Administrador;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Administrador extends Component
{

    public function allAdmins(){
        $users = DB::table('estudiantes')
        ->join('personas','estudiantes.persona_id','=','personas.id')
        ->join('users','personas.user_id','users.id')
        ->join('roles','users.role_id','roles.id')
        ->where('roles.role','=','estudiante')
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
