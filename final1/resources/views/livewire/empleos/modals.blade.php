<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Crear Nuevo Empleo</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="cliente_id">Id del Cliente</label>
                        <input wire:model="cliente_id" type="text" class="form-control" id="cliente_id" >@error('cliente_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nombre_emp">Nombre del Empleo</label>
                        <input wire:model="nombre_emp" type="text" class="form-control" id="nombre_emp">@error('nombre_emp') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="descripcion_emp">Descripción</label>
                        <input wire:model="descripcion_emp" type="text" class="form-control" id="descripcion_emp">@error('descripcion_emp') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="modalidad_emp">Modalidad</label>
                        <input wire:model="modalidad_emp" type="text" class="form-control" id="modalidad_emp">@error('modalidad_emp') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="horario_emp">Horario</label>
                        <input wire:model="horario_emp" type="text" class="form-control" id="horario_emp">@error('horario_emp') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="fechapub_emp">Fecha de Publicación</label>
                        <input wire:model="fechapub_emp" type="text" class="form-control" id="fechapub_emp" placeholder="YYYY/MM/AA">@error('fechapub_emp') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="experiencia_emp">Experiencia requerida</label>
                        <input wire:model="experiencia_emp" type="text" class="form-control" id="experiencia_emp">@error('experiencia_emp') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <h5 class="modal-title" id="updateModalLabel">Update Empleo</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="cliente_id">Id del Cliente</label>
                        <input wire:model="cliente_id" type="text" class="form-control" id="cliente_id" >@error('cliente_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nombre_emp">Nombre del Empleo</label>
                        <input wire:model="nombre_emp" type="text" class="form-control" id="nombre_emp">@error('nombre_emp') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="descripcion_emp">Descripción</label>
                        <input wire:model="descripcion_emp" type="text" class="form-control" id="descripcion_emp">@error('descripcion_emp') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="modalidad_emp">Modalidad</label>
                        <input wire:model="modalidad_emp" type="text" class="form-control" id="modalidad_emp">@error('modalidad_emp') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="horario_emp">Horario</label>
                        <input wire:model="horario_emp" type="text" class="form-control" id="horario_emp">@error('horario_emp') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="fechapub_emp">Fecha de Publicación</label>
                        <input wire:model="fechapub_emp" type="text" class="form-control" id="fechapub_emp" placeholder="YYYY/MM/AA">@error('fechapub_emp') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="experiencia_emp">Experiencia requerida</label>
                        <input wire:model="experiencia_emp" type="text" class="form-control" id="experiencia_emp">@error('experiencia_emp') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary">Actualizar</button>
            </div>
       </div>
    </div>
</div>
