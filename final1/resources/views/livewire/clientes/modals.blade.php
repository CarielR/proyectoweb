<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Cliente</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="genero_id"></label>
                        <input wire:model="genero_id" type="text" class="form-control" id="genero_id" placeholder="Genero Id">@error('genero_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nombre_cli"></label>
                        <input wire:model="nombre_cli" type="text" class="form-control" id="nombre_cli" placeholder="Nombre Cli">@error('nombre_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="fecha_nac_cli"></label>
                        <input wire:model="fecha_nac_cli" type="text" class="form-control" id="fecha_nac_cli" placeholder="Fecha Nac Cli">@error('fecha_nac_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefono1_cli"></label>
                        <input wire:model="telefono1_cli" type="text" class="form-control" id="telefono1_cli" placeholder="Telefono1 Cli">@error('telefono1_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefono2_cli"></label>
                        <input wire:model="telefono2_cli" type="text" class="form-control" id="telefono2_cli" placeholder="Telefono2 Cli">@error('telefono2_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="email_cli"></label>
                        <input wire:model="email_cli" type="text" class="form-control" id="email_cli" placeholder="Email Cli">@error('email_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="titulo_cli"></label>
                        <input wire:model="titulo_cli" type="text" class="form-control" id="titulo_cli" placeholder="Titulo Cli">@error('titulo_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="rol_cli"></label>
                        <input wire:model="rol_cli" type="text" class="form-control" id="rol_cli" placeholder="Rol Cli">@error('rol_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="experiencia_cli"></label>
                        <input wire:model="experiencia_cli" type="text" class="form-control" id="experiencia_cli" placeholder="Experiencia Cli">@error('experiencia_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close-btn" data-bs-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="store()" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="updateDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="updateModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Update Cliente</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="genero_id"></label>
                        <input wire:model="genero_id" type="text" class="form-control" id="genero_id" placeholder="Genero Id">@error('genero_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nombre_cli"></label>
                        <input wire:model="nombre_cli" type="text" class="form-control" id="nombre_cli" placeholder="Nombre Cli">@error('nombre_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="fecha_nac_cli"></label>
                        <input wire:model="fecha_nac_cli" type="text" class="form-control" id="fecha_nac_cli" placeholder="Fecha Nac Cli">@error('fecha_nac_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefono1_cli"></label>
                        <input wire:model="telefono1_cli" type="text" class="form-control" id="telefono1_cli" placeholder="Telefono1 Cli">@error('telefono1_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="telefono2_cli"></label>
                        <input wire:model="telefono2_cli" type="text" class="form-control" id="telefono2_cli" placeholder="Telefono2 Cli">@error('telefono2_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="email_cli"></label>
                        <input wire:model="email_cli" type="text" class="form-control" id="email_cli" placeholder="Email Cli">@error('email_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="titulo_cli"></label>
                        <input wire:model="titulo_cli" type="text" class="form-control" id="titulo_cli" placeholder="Titulo Cli">@error('titulo_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="rol_cli"></label>
                        <input wire:model="rol_cli" type="text" class="form-control" id="rol_cli" placeholder="Rol Cli">@error('rol_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="experiencia_cli"></label>
                        <input wire:model="experiencia_cli" type="text" class="form-control" id="experiencia_cli" placeholder="Experiencia Cli">@error('experiencia_cli') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary">Save</button>
            </div>
       </div>
    </div>
</div>
