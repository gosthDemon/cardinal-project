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
            <a href="#" class="button-report" id="new_user_button" data-toggle="modal" data-target="#modal_new_user">Nuevo
                Administrador</a>
        </div>
    </div>
    <div class="frontPage-body card p-3">
        <div class="search-input-table-content">
            <input type="text" wire:model="search" class="search-input-table" id="search_input_table" placeholder="Buscar en la tabla">
            <i class="fal fa-search"></i>
        </div>
        <div class="card-body  table-responsive p-0">
            <table>
                <thead>
                    <tr>
                        @foreach ($headers as $field)
                            <th wire:click="order('{{ $field->field }}')">
                                <span class="label">{{ $field->name }}</span>
                                @if ($sort == '{{ $field->field }}')
                                    @if ($direction == 'asc')
                                        <i class="fal fa-sort-alpha-up-alt icon-sort"> </i>
                                    @else
                                        <i class="fal fa-sort-alpha-down-alt icon-sort"> </i>
                                    @endif
                                @else
                                    <i class="fal fa-sort icon-sort"> </i>
                                @endif
                            </th>
                        @endforeach
                        <th colspan="3">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($admins) > 0)
                        @foreach ($admins as $admin)
                            <tr>
                                <td>{{ $admin->id }}</td>
                                <td class="large">
                                    {{ $admin->nombres . ' ' . $admin->apellido_paterno . ' ' . $admin->apellido_materno }}
                                </td>
                                <td>{{ $admin->carnet }}</td>
                                <td>{{ $admin->fecha_nacimiento }}</td>
                                <td class="large">{{ $admin->direccion }}</td>
                                <td>{{ $admin->telefono }}</td>
                                <td class="actions-content">
                                    <button class="show-btn button"><i class="fal fa-eye"></i></button>
                                    <button class="edit-btn button"><i class="fas fa-edit"></i></button>
                                    <button class="delete-btn button"><i class="fal fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7" style="text-align: center">¡Ups! Al parecer no exiten registros en esta tabla.</td>
                        </tr>
                    @endif
                </tbody>
            </table>
            <nav class="p-2 d-flex justify-content-end">
                {!!$admins->links()!!}
            </nav>

        </div>
    </div>
    <!-- Modal New User-->
    <div class="modal fade" id="modal_new_user" tabindex="-1" role="dialog" aria-labelledby="Nuevo Usuario"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Administrador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="content-input">
                            <input type="text" class="cardinal-input">
                            <label for="textInput">Nombre</label>
                        </div>
                        <div class="content-input">
                            <input type="text" class="cardinal-input">
                            <label for="textInput">Apellido Paterno</label>
                        </div>
                        <div class="content-input">
                            <input type="text" class="cardinal-input">
                            <label for="textInput">Apellido Materno</label>
                        </div>
                        <div class="content-input">
                            <input type="number" class="cardinal-input">
                            <label for="textInput">Carnet</label>
                        </div>
                        <div class="content-input">
                            <input type="date"   class="cardinal-input">
                            <label for="textInput">Fecha de Nacimiento</label>
                        </div>
                        <div class="content-input">
                            <select name="" id="" class="cardinal-select">
                                <option value=""></option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                                <option value="O">Otro</option>
                            </select>
                            <label for="textInput">Fecha de Nacimiento</label>
                        </div>
                        <div class="content-input">
                            <input type="text"   class="cardinal-input">
                            <label for="textInput">Direccion</label>
                        </div>
                        <div class="content-input">
                            <input type="number" class="cardinal-input">
                            <label for="textInput">Telefono</label>
                        </div>
                        <div class="content-input-buttons">
                            <button class="register-button">Registrar</button>
                            <button class="cancel-button">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
