<!-- Add Modal -->

@php
$genero = DB::table('generos')->select('id','Nombre_gen')->get();

@endphp
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create Nuevo Cliente</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="genero_id">Genero</label>
                        <select wire:model="genero_id" class="form-control" id="genero_id">
                        <option value="">Seleccione un Genero</option>
                            @foreach ($genero as $generos)
                                <option value="{{ $generos->id }}">{{ $generos->Nombre_gen }}</option>
                            @endforeach
                        </select>
                        @error('genero_id') <span class="error text-danger">{{ $message }}</span> @enderror


                    </div>
                    <div class="form-group">
                        <label for="nombre_cli">Nombre de Cliente</label>
                        <input wire:model="nombre_cli" type="text" class="form-control" id="nombre_cli" placeholder="Nombre">@error('nombre_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="fecha_nac_cli">Fecha de Nacimiento</label>
                        <input wire:model="fecha_nac_cli" type="text" class="form-control" id="fecha_nac_cli" placeholder="YYYY/MM/DD">@error('fecha_nac_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefono1_cli">Teléfono 1</label>
                        <input wire:model="telefono1_cli" type="text" class="form-control" id="telefono1_cli" placeholder="Teléfono 1 del cliente">@error('telefono1_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefono2_cli">Telefono 2</label>
                        <input wire:model="telefono2_cli" type="text" class="form-control" id="telefono2_cli" placeholder="Telefono 2 del cliente">@error('telefono2_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="email_cli">Correo del Cliente</label>
                        <input wire:model="email_cli" type="text" class="form-control" id="email_cli" placeholder="example@mail.com">@error('email_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="titulo_cli">Título</label>
                        <input wire:model="titulo_cli" type="text" class="form-control" id="titulo_cli" placeholder="Especifique el título del cliente">@error('titulo_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="rol_cli">Rol del Cliente</label>
                        <input wire:model="rol_cli" type="text" class="form-control" id="rol_cli" placeholder="Especifique el rol del Cliente">@error('rol_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="experiencia_cli">Experiencia del Cliente</label>
                        <input wire:model="experiencia_cli" type="text" class="form-control" id="experiencia_cli" placeholder="Expecifique la experiencia del cleinte">@error('experiencia_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary">Guardar</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="updateDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Actualizar</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">

                    <label for="genero_id">Genero</label>
                        <select wire:model="genero_id" class="form-control" id="genero_id">
                        <option value="">Seleccione un Genero</option>
                            @foreach ($genero as $generos)
                                <option value="{{ $generos->id }}">{{ $generos->Nombre_gen }}</option>
                            @endforeach
                        </select>
                        @error('genero_id') <span class="error text-danger">{{ $message }}</span> @enderror

                    </div>
                    <div class="form-group">
                        <label for="nombre_cli">Nombre de Cliente</label>
                        <input wire:model="nombre_cli" type="text" class="form-control" id="nombre_cli" placeholder="Nombre">@error('nombre_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="fecha_nac_cli">Fecha de Nacimiento</label>
                        <input wire:model="fecha_nac_cli" type="text" class="form-control" id="fecha_nac_cli" placeholder="YYYY/MM/DD">@error('fecha_nac_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefono1_cli">Teléfono 1</label>
                        <input wire:model="telefono1_cli" type="text" class="form-control" id="telefono1_cli" placeholder="Teléfono 1 del cliente">@error('telefono1_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefono2_cli">Telefono 2</label>
                        <input wire:model="telefono2_cli" type="text" class="form-control" id="telefono2_cli" placeholder="Telefono 2 del cliente">@error('telefono2_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="email_cli">Correo del Cliente</label>
                        <input wire:model="email_cli" type="text" class="form-control" id="email_cli" placeholder="example@mail.com">@error('email_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="titulo_cli">Título</label>
                        <input wire:model="titulo_cli" type="text" class="form-control" id="titulo_cli" placeholder="Especifique el título del cliente">@error('titulo_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="rol_cli">Rol del Cliente</label>
                        <input wire:model="rol_cli" type="text" class="form-control" id="rol_cli" placeholder="Especifique el rol del Cliente">@error('rol_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="experiencia_cli">Experiencia del Cliente</label>
                        <input wire:model="experiencia_cli" type="text" class="form-control" id="experiencia_cli" placeholder="Expecifique la experiencia del cleinte">@error('experiencia_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary">Guardar</button>
            </div>
       </div>
    </div>
</div>
