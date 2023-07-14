<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Crear Nuevo Servicio</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="cliente_id">Id del Cliente</label>
                        <input wire:model="cliente_id" type="text" class="form-control" id="cliente_id" >@error('cliente_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nombre_serv">Nombre</label>
                        <input wire:model="nombre_serv" type="text" class="form-control" id="nombre_serv" >@error('nombre_serv') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="descripcion_serv">Descripción</label>
                        <input wire:model="descripcion_serv" type="text" class="form-control" id="descripcion_serv">@error('descripcion_serv') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="precio_serv">$Precio</label>
                        <input wire:model="precio_serv" type="text" class="form-control" id="precio_serv" placeholder="Precio Serv">@error('precio_serv') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <h5 class="modal-title" id="updateModalLabel">Actualizar Servicio</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                <div class="form-group">
                        <label for="cliente_id">Id del Cliente</label>
                        <input wire:model="cliente_id" type="text" class="form-control" id="cliente_id" >@error('cliente_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nombre_serv">Nombre</label>
                        <input wire:model="nombre_serv" type="text" class="form-control" id="nombre_serv" >@error('nombre_serv') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="descripcion_serv">Descripción</label>
                        <input wire:model="descripcion_serv" type="text" class="form-control" id="descripcion_serv">@error('descripcion_serv') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="precio_serv">$Precio</label>
                        <input wire:model="precio_serv" type="text" class="form-control" id="precio_serv" placeholder="Precio Serv">@error('precio_serv') <span class="error text-danger">{{ $message }}</span> @enderror
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
