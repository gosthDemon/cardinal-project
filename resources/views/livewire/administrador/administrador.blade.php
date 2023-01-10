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
                                    {{ $admin->names . ' ' . $admin->paternal_lastname . ' ' . $admin->maternal_lastname}}
                                </td>
                                <td>{{ $admin->license }}</td>
                                <td>{{ $admin->birthday }}</td>
                                <td class="large">{{ $admin->direction }}</td>
                                <td>{{ $admin->phone }}</td>
                                <td class="actions-content">
                                    <button class="show-btn button"><i class="fal fa-eye"></i></button>
                                    <button class="edit-btn button"><i class="fas fa-edit"></i></button>
                                    <button class="delete-btn button"><i class="fal fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7" style="text-align: center">¡Ups! No existen registros coincidentes para esta tabla.</td>
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
    <div wire:ignore.self class="modal fade" id="modal_new_user" tabindex="-1" role="dialog" aria-labelledby="Nuevo Usuario"
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
                    <form wire:submit.prevent = "save">
                        <div class="content-input" >
                            <select wire:model.defer="cargo" id="sexo" class="cardinal-select" wire:ignore>
                                <option value=""></option>
                                <option value="3">Director</option>
                                <option value="4">Secretaria</option>
                            </select>
                            <label for="textInput" wire:ignore>Seleccione un Cargo</label>
                            <span class="error-message">
                                @error('cargo')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="content-input" >
                            <input type="text" id="rda" wire:model.defer="rda" class="cardinal-input" wire:ignore>
                            <label for="textInput" wire:ignore>RDA</label>
                            <span class="error-message">
                                @error('rda')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="content-input" >
                            <input type="text" id="nombres" wire:model.defer="nombres" class="cardinal-input" wire:ignore>
                            <label for="textInput" wire:ignore>Nombres</label>
                            <span class="error-message">
                                @error('nombres')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="content-input" >
                            <input type="text" id="apellido_paterno" wire:model.defer="apellido_paterno" class="cardinal-input" wire:ignore>
                            <label for="textInput" wire:ignore >Apellido Paterno</label>
                            <span class="error-message">
                                @error('apellido_paterno')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="content-input" >
                            <input type="text" id="apellido_materno"wire:model.defer="apellido_materno" class="cardinal-input" wire:ignore>
                            <label for="textInput" wire:ignore>Apellido Materno</label>
                            <span class="error-message">
                                @error('apellido_materno')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="content-input" >
                            <input type="text" id="carnet" wire:model.defer="carnet" class="cardinal-input" wire:ignore>
                            <label for="textInput" wire:ignore>Carnet</label>
                            <span class="error-message">
                                @error('carnet')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="content-input" >
                            <input type="date" id="fecha_nacimiento" wire:model.defer="fecha_nacimiento" class="cardinal-input" wire:ignore>
                            <label for="textInput" wire:ignore>Fecha de Nacimiento</label>
                            <span class="error-message">
                                @error('fecha_nacimiento')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="content-input" >
                            <select wire:model.defer="sexo" id="sexo" class="cardinal-select" wire:ignore>
                                <option value=""></option>
                                <option value="M">Masculino</option>
                                <option value="F">Femenino</option>
                                <option value="O">Otro</option>
                            </select>
                            <label for="textInput" wire:ignore>Sexo</label>
                            <span class="error-message">
                                @error('sexo')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="content-input" >
                            <input type="text" id="direccion" wire:ignore wire:model.defer="direccion" class="cardinal-input" wire:ignore>
                            <label for="textInput" wire:ignore >Direccion</label>
                            <span class="error-message">
                                @error('direccion')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="content-input" >
                            <input type="number" id="telefono" wire:model.defer="telefono" class="cardinal-input" wire:ignore>
                            <label for="textInput" wire:ignore>Telefono</label>
                            <span class="error-message">
                                @error('telefono')
                                    {{$message}}
                                @enderror
                            </span>
                        </div>
                        <div class="content-input-buttons">
                            <button type="submit" class="register-button" id="register_button">Registrar</button>
                            <button class="cancel-button">Cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@section('script')
    <script>
        
    </script>
@endsection
