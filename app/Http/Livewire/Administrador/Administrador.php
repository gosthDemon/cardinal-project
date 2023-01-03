<?php

namespace App\Http\Livewire\Administrador;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
class Administrador extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $rules = ['cargo'=>'required',
                        'nombres'=>'required|max:40',
                        'apellido_paterno'=>'required_without:apellido_materno|max:20',
                        'apellido_materno'=>'required_without:apellido_paterno|max:20',
                        'carnet'=>'required|max:11|min:6|unique:administradores,carnet',
                        'fecha_nacimiento' => 'required|date_format:Y-m-d',
                        'sexo' => 'required|max:1,min:1',
                        'direccion'=>'required|max:100',
                        'telefono'=>'min:7|max:12'];
    public $sort = "id";
    public $direction = "asc";
    public $search = "";
    public $cargo, $rda, $nombres, $apellido_paterno, $apellido_materno, $carnet, $fecha_nacimiento,$sexo,$direccion,$telefono;


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
    public function allAdmins(){
        $search = $this->search;

        $users = DB::table('estudiantes')
        ->join('personas','estudiantes.persona_id','=','personas.id')
        ->join('users','personas.user_id','users.id')
        ->join('roles','users.role_id','roles.id')
        ->select('personas.nombres','personas.apellido_paterno','personas.apellido_materno',
        'estudiantes.carnet','personas.fecha_nacimiento','personas.direccion','personas.telefono','estudiantes.id')
        ->orderBy($this->sort, $this->direction)
        ->where(function($query) use($search){
            $query->where('estudiantes.id', 'LIKE', "%".$search."%")
                ->orWhere('personas.nombres', 'LIKE', "%".$search."%")
                ->orWhere('personas.apellido_paterno', 'LIKE', "%".$search."%")
                ->orWhere('personas.apellido_materno', 'LIKE', "%".$search."%");})
        ->where('roles.role','=','estudiante')
        ->paginate(5);

        return $users;
    }
    public function save(){
        $this->validate();
        $role = $this->cargo;
        $email = $this->rda."@cardinal.com";
        $password = Hash::make($this->carnet);

        DB::beginTransaction();
        try {
            $user_id = DB::Table('users')
            ->insert(['name'=>$this->nombres,
                    'email'=>$email,
                    'password'=>$password,
                    'role_id'=>$role,
                    'created_at'=>now()]);

            $person_id = DB::table('personas')
            ->insert(['user_id'=>$user_id,
                    'nombres'=>$this->nombre,
                    'apellido_paterno'=>$this->apellido_paterno,
                    'apellido_materno'=>$this->apellido_materno,
                    'fecha_nacimiento'=>$this->fecha_nacimiento,
                    'sexo'=>$this->sexo,
                    'direccion'=>$this->direccion,
                    'telefono'=>$this->telefono,
                    'created_at'=>now()]);

            DB::Table('administradores')
            ->insert(['persona_id'=>$person_id,
                    'carnet'=>$this->carnet,
                    'rda'=>$this->rda,
                    'created_at'=>now()]);

            $this->getAlert('success','¡Registro exitoso!');

            DB::commit();
        } catch (\Throwable $th) {
            $this->getAlert('error','¡UPS! Ha ocurrido un problema. Contacte con soporte.');
            DB::rollBack();
        }
    }
    public function getAlert($type, $message){
        $this->dispatchBrowserEvent('getAlert', ['type' => $type, 'message' => $message]);
    }
}
