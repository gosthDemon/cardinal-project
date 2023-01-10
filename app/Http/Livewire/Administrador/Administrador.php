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
                        'apellido_paterno'=>'required_without:maternal_lastname|max:20',
                        'apellido_materno'=>'required_without:paternal_lastname|max:20',
                        'carnet'=>'required|max:11|min:6|unique:administrators,license',
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

        $users = DB::table('administrators')
        ->join('peoples','administrators.people_id','=','peoples.id')
        ->join('users','peoples.user_id','users.id')
        ->join('roles','users.role_id','roles.id')
        ->select('peoples.names','peoples.paternal_lastname','peoples.maternal_lastname',
        'administrators.license','peoples.birthday','peoples.direction','peoples.phone','administrators.id')
        ->orderBy($this->sort, $this->direction)
        ->where(function($query) use($search){
            $query->where('administrators.id', 'LIKE', "%".$search."%")
                ->orWhere('peoples.names', 'LIKE', "%".$search."%")
                ->orWhere('peoples.paternal_lastname', 'LIKE', "%".$search."%")
                ->orWhere('peoples.maternal_lastname', 'LIKE', "%".$search."%");})
        ->where('roles.role','=','director')
        ->paginate(10);

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
            ->insertGetId(['name'=>$this->nombres,
                    'email'=>$email,
                    'password'=>$password,
                    'role_id'=>$role,
                    'created_at'=>now()]);

            $people_id = DB::table('peoples')
            ->insertGetId(['user_id'=>$user_id,
                    'names'=>$this->nombres,
                    'paternal_lastname'=>$this->apellido_paterno,
                    'maternal_lastname'=>$this->apellido_materno,
                    'birthday'=>$this->fecha_nacimiento,
                    'sex'=>$this->sexo,
                    'direction'=>$this->direccion,
                    'phone'=>$this->telefono,
                    'created_at'=>now()]); 
                    
            DB::Table('administrators')
            ->insert(['people_id'=>$people_id,
                    'license'=>$this->carnet,
                    'rda'=>$this->rda,
                    'created_at'=>now()]);

            $this->getAlert('success','¡Registro exitoso!');
            $this->dispatchBrowserEvent('closeModal',['modal'=>"modal_new_user"]);
            DB::commit();

            $this->cargo = null;
            $this->rda = null; 
            $this->nombres = null;
            $this->apellido_paterno = null; 
            $this->apellido_materno = null;
            $this->carnet = null;
            $this->fecha_nacimiento = null;
            $this->sexo = null;
            $this->direccion = null;
            $this->telefono = null;
        } catch (\Throwable $th) {
            $this->getAlert('error','¡UPS! Ha ocurrido un problema. Contacte con soporte.');
            DB::rollBack();
        }
    }
    public function getAlert($type, $message){
        $this->dispatchBrowserEvent('getAlert', ['type' => $type, 'message' => $message]);
    }
}
