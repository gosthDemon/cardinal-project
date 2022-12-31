<?php

namespace App\Http\Livewire\Administrador;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
class Administrador extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

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
        ->paginate(50);

        return $users;
    }
    public function headers() {
        $headers = [
            (object) [
                "field" => "id",
                "name" => "#",
            ],
            (object) [
                "field" => "nombres",
                "name" => "nombre",
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

        return $headers;
    }
    public function render(){
        return view('livewire.administrador.administrador',[
            'admins' => $this->allAdmins(),
            'headers' => $this->headers()
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
