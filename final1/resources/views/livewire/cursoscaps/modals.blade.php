<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Crear Nuevo Curso</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="cliente_id">Id del Cliente</label>
                        <input wire:model="cliente_id" type="text" class="form-control" id="cliente_id" placeholder="Incerte el iD del Cliente">@error('cliente_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nombre_cursoscaps">Nombre del curso</label>
                        <input wire:model="nombre_cursoscaps" type="text" class="form-control" id="nombre_cursoscaps" placeholder="Inserte el nombre del curso">@error('nombre_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="descipcion_cursoscaps">Descripción del curso</label>
                        <input wire:model="descipcion_cursoscaps" type="text" class="form-control" id="descipcion_cursoscaps" placeholder="Añada una breve descripción del curso">@error('descipcion_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="publicacion_cursoscaps">Publicación de los Cursos</label>
                        <input wire:model="publicacion_cursoscaps" type="text" class="form-control" id="publicacion_cursoscaps" placeholder="Publicacion Cursoscaps">@error('publicacion_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="edadmin_cursoscaps">Edad mínima para participar en el curso</label>
                        <input wire:model="edadmin_cursoscaps" type="text" class="form-control" id="edadmin_cursoscaps" placeholder="Ingrese una edad">@error('edadmin_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="edadmax_cursoscaps">Edad máxima para participar en el curso</label>
                        <input wire:model="edadmax_cursoscaps" type="text" class="form-control" id="edadmax_cursoscaps" placeholder="Ingrese una edad">@error('edadmax_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="link_cursoscaps">Link del curso</label>
                        <input wire:model="link_cursoscaps" type="text" class="form-control" id="link_cursoscaps" placeholder="Inserte un link">@error('link_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="cupos_cursoscaps">Cupos para el curso</label>
                        <input wire:model="cupos_cursoscaps" type="text" class="form-control" id="cupos_cursoscaps" placeholder="Ingrese un número">@error('cupos_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="costo_cursoscaps">Costo del Curso</label>
                        <input wire:model="costo_cursoscaps" type="text" class="form-control" id="costo_cursoscaps" placeholder="Ingrese un valor en dólares">@error('costo_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
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
                        <label for="cliente_id">Id del Cliente</label>
                        <input wire:model="cliente_id" type="text" class="form-control" id="cliente_id" placeholder="Incerte el iD del Cliente">@error('cliente_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nombre_cursoscaps">Nombre del curso</label>
                        <input wire:model="nombre_cursoscaps" type="text" class="form-control" id="nombre_cursoscaps" placeholder="Inserte el nombre del curso">@error('nombre_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="descipcion_cursoscaps">Descripción del curso</label>
                        <input wire:model="descipcion_cursoscaps" type="text" class="form-control" id="descipcion_cursoscaps" placeholder="Añada una breve descripción del curso">@error('descipcion_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="publicacion_cursoscaps">Publicación de los Cursos</label>
                        <input wire:model="publicacion_cursoscaps" type="text" class="form-control" id="publicacion_cursoscaps" placeholder="Publicacion Cursoscaps">@error('publicacion_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="edadmin_cursoscaps">Edad mínima para participar en el curso</label>
                        <input wire:model="edadmin_cursoscaps" type="text" class="form-control" id="edadmin_cursoscaps" placeholder="Ingrese una edad">@error('edadmin_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="edadmax_cursoscaps">Edad máxima para participar en el curso</label>
                        <input wire:model="edadmax_cursoscaps" type="text" class="form-control" id="edadmax_cursoscaps" placeholder="Ingrese una edad">@error('edadmax_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="link_cursoscaps">Link del curso</label>
                        <input wire:model="link_cursoscaps" type="text" class="form-control" id="link_cursoscaps" placeholder="Inserte un link">@error('link_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="cupos_cursoscaps">Cupos para el curso</label>
                        <input wire:model="cupos_cursoscaps" type="text" class="form-control" id="cupos_cursoscaps" placeholder="Ingrese un número">@error('cupos_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="costo_cursoscaps">Costo del Curso</label>
                        <input wire:model="costo_cursoscaps" type="text" class="form-control" id="costo_cursoscaps" placeholder="Ingrese un valor en dólares">@error('costo_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
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
