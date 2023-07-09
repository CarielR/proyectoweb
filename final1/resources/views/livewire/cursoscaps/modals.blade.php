<!-- Add Modal -->
<div wire:ignore.self class="modal fade" id="createDataModal" data-bs-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="createDataModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createDataModalLabel">Create New Cursoscap</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
           <div class="modal-body">
				<form>
                    <div class="form-group">
                        <label for="cliente_id"></label>
                        <input wire:model="cliente_id" type="text" class="form-control" id="cliente_id" placeholder="Cliente Id">@error('cliente_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nombre_cursoscaps"></label>
                        <input wire:model="nombre_cursoscaps" type="text" class="form-control" id="nombre_cursoscaps" placeholder="Nombre Cursoscaps">@error('nombre_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="descipcion_cursoscaps"></label>
                        <input wire:model="descipcion_cursoscaps" type="text" class="form-control" id="descipcion_cursoscaps" placeholder="Descipcion Cursoscaps">@error('descipcion_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="publicacion_cursoscaps"></label>
                        <input wire:model="publicacion_cursoscaps" type="text" class="form-control" id="publicacion_cursoscaps" placeholder="Publicacion Cursoscaps">@error('publicacion_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="edadmin_cursoscaps"></label>
                        <input wire:model="edadmin_cursoscaps" type="text" class="form-control" id="edadmin_cursoscaps" placeholder="Edadmin Cursoscaps">@error('edadmin_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="edadmax_cursoscaps"></label>
                        <input wire:model="edadmax_cursoscaps" type="text" class="form-control" id="edadmax_cursoscaps" placeholder="Edadmax Cursoscaps">@error('edadmax_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="link_cursoscaps"></label>
                        <input wire:model="link_cursoscaps" type="text" class="form-control" id="link_cursoscaps" placeholder="Link Cursoscaps">@error('link_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="cupos_cursoscaps"></label>
                        <input wire:model="cupos_cursoscaps" type="text" class="form-control" id="cupos_cursoscaps" placeholder="Cupos Cursoscaps">@error('cupos_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="costo_cursoscaps"></label>
                        <input wire:model="costo_cursoscaps" type="text" class="form-control" id="costo_cursoscaps" placeholder="Costo Cursoscaps">@error('costo_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
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
                <h5 class="modal-title" id="updateModalLabel">Update Cursoscap</h5>
                <button wire:click.prevent="cancel()" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
                    <div class="form-group">
                        <label for="cliente_id"></label>
                        <input wire:model="cliente_id" type="text" class="form-control" id="cliente_id" placeholder="Cliente Id">@error('cliente_id') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="nombre_cursoscaps"></label>
                        <input wire:model="nombre_cursoscaps" type="text" class="form-control" id="nombre_cursoscaps" placeholder="Nombre Cursoscaps">@error('nombre_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="descipcion_cursoscaps"></label>
                        <input wire:model="descipcion_cursoscaps" type="text" class="form-control" id="descipcion_cursoscaps" placeholder="Descipcion Cursoscaps">@error('descipcion_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="publicacion_cursoscaps"></label>
                        <input wire:model="publicacion_cursoscaps" type="text" class="form-control" id="publicacion_cursoscaps" placeholder="Publicacion Cursoscaps">@error('publicacion_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="edadmin_cursoscaps"></label>
                        <input wire:model="edadmin_cursoscaps" type="text" class="form-control" id="edadmin_cursoscaps" placeholder="Edadmin Cursoscaps">@error('edadmin_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="edadmax_cursoscaps"></label>
                        <input wire:model="edadmax_cursoscaps" type="text" class="form-control" id="edadmax_cursoscaps" placeholder="Edadmax Cursoscaps">@error('edadmax_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="link_cursoscaps"></label>
                        <input wire:model="link_cursoscaps" type="text" class="form-control" id="link_cursoscaps" placeholder="Link Cursoscaps">@error('link_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="cupos_cursoscaps"></label>
                        <input wire:model="cupos_cursoscaps" type="text" class="form-control" id="cupos_cursoscaps" placeholder="Cupos Cursoscaps">@error('cupos_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="costo_cursoscaps"></label>
                        <input wire:model="costo_cursoscaps" type="text" class="form-control" id="costo_cursoscaps" placeholder="Costo Cursoscaps">@error('costo_cursoscaps') <span class="error text-danger">{{ $message }}</span> @enderror
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
