<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Evento</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="nombre_event"></label>
                        <input wire:model="nombre_event" type="text" class="form-control" id="nombre_event" placeholder="Nombre Event">@error('nombre_event') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="descripcion_event"></label>
                        <input wire:model="descripcion_event" type="text" class="form-control" id="descripcion_event" placeholder="Descripcion Event">@error('descripcion_event') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="fecha_event"></label>
                        <input wire:model="fecha_event" type="text" class="form-control" id="fecha_event" placeholder="Fecha Event">@error('fecha_event') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="horas_event"></label>
                        <input wire:model="horas_event" type="text" class="form-control" id="horas_event" placeholder="Horas Event">@error('horas_event') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="ubicacion_event"></label>
                        <input wire:model="ubicacion_event" type="text" class="form-control" id="ubicacion_event" placeholder="Ubicacion Event">@error('ubicacion_event') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="observacion_event"></label>
                        <input wire:model="observacion_event" type="text" class="form-control" id="observacion_event" placeholder="Observacion Event">@error('observacion_event') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <h5 class="modal-title" id="updateModalLabel">Update Evento</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="nombre_event"></label>
                        <input wire:model="nombre_event" type="text" class="form-control" id="nombre_event" placeholder="Nombre Event">@error('nombre_event') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="descripcion_event"></label>
                        <input wire:model="descripcion_event" type="text" class="form-control" id="descripcion_event" placeholder="Descripcion Event">@error('descripcion_event') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="fecha_event"></label>
                        <input wire:model="fecha_event" type="text" class="form-control" id="fecha_event" placeholder="Fecha Event">@error('fecha_event') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="horas_event"></label>
                        <input wire:model="horas_event" type="text" class="form-control" id="horas_event" placeholder="Horas Event">@error('horas_event') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="ubicacion_event"></label>
                        <input wire:model="ubicacion_event" type="text" class="form-control" id="ubicacion_event" placeholder="Ubicacion Event">@error('ubicacion_event') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="observacion_event"></label>
                        <input wire:model="observacion_event" type="text" class="form-control" id="observacion_event" placeholder="Observacion Event">@error('observacion_event') <span class="error text-danger">{{ $message }}</span> @enderror
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
