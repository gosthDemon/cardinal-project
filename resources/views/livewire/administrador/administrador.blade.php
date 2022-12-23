<div>
    <div class="frontPage-header">
        <div class="tittle">
            <h1>ADMINISTRADOR</h1>
            <ul>
                <li>Cardinal &nbsp;></li>
                <li>Administrador &nbsp;></li>
                <li>Registros</li>
            </ul>
        </div>
        <div class="button">
            <a href="#" class="button-report" data-toggle="modal" data-target="#modal_new_user">Nuevo
                Administrador</a>
        </div>
    </div>
    <div class="frontPage-body card p-3">
        <div class="card-body  table-responsive p-0">
            <table class="table table-sm">
                <thead>
                    <tr>
                        <th scope="">#</th>
                        <th scope="">NOMBRE</th>
                        <th scope="">CARNET</th>
                        <th scope="">NACIMIENTO</th>
                        <th scope="">DIRECCION</th>
                        <th scope="">TELEFONO</th>
                        <th colspan="3" class="text-center">OPCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $counter = 1;
                    @endphp
                    @foreach ($admins as $admin)
                        <tr>
                            <th>{{ $counter }}</th>
                            <td>{{ $admin->nombres . ' ' . $admin->apellido_paterno . ' ' . $admin->apellido_materno }}</td>
                            <td>{{ $admin->carnet }}</td>
                            <td>{{ $admin->fecha_nacimiento }}</td>
                            <td>{{ $admin->direccion }}</td>
                            <td>{{ $admin->telefono }}</td>
                            <td><button class="btn btn-sm btn-warning"><i class="far fa-edit"></i></button></td>
                            <td><button class="btn btn-sm btn-primary"><i class="far fa-eye"></i></button></td>
                            <td><button class="btn btn-sm btn-danger"><i class="far fa-trash"></i></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal New User-->
    <div class="modal fade" id="modal_new_user" tabindex="-1" role="dialog" aria-labelledby="Nuevo Usuario"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</div>
