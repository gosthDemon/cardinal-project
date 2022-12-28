<?php

namespace App\Http\Livewire\Administrador;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Administrador extends Component
{
    public $sort = "id";
    public $direction = "asc";
    public $search = "";

    public function allAdmins(){

        $search = $this->search;

        $users = DB::table('estudiantes')
        ->join('personas','estudiantes.persona_id','=','personas.id')
        ->join('users','personas.user_id','users.id')
        ->join('roles','users.role_id','roles.id')
        ->select('personas.nombres','personas.apellido_paterno','personas.apellido_materno',
        'personas.carnet','personas.fecha_nacimiento','personas.direccion','personas.telefono','estudiantes.id')
        ->orderBy($this->sort, $this->direction)
        ->where(function($query) use($search){
            $query->where('estudiantes.id', 'LIKE', "%".$search."%")
                ->orWhere('personas.nombres', 'LIKE', "%".$search."%")
                ->orWhere('personas.apellido_paterno', 'LIKE', "%".$search."%")
                ->orWhere('personas.apellido_materno', 'LIKE', "%".$search."%");})
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

    public function order($sort){
        if($this->sort == $sort){
            if($this->direction == 'asc'){
                $this->direction = 'desc';
            }else{
                $this->direction = 'asc';
            }
        }else{
            $this->sort = $sort;
            $this->direction = 'asc';
        }
    }

    

}
