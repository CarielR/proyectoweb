@section('title', __('Clientes'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Consulta de Clientes</h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar Cliente">
						</div>
						<div class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#createDataModal">
						<i class="fa fa-plus"></i>  Añadir Cliente
						</div>
						<div><a href="{{ route('generar-pdf') }}" class="btn btn-sm btn-info">Ver Reporte</a></div>


					</div>
				</div>

				<div class="card-body">
						@include('livewire.clientes.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr>
								<td>#</td>
								<th>Genero</th>
								<th>Nombre</th>
								<th>Fecha Nacimiento</th>
								<th>Telefono 1</th>
								<th>Telefono 2</th>
								<th>Email</th>
								<th>Titulo</th>
								<th>Rol</th>
								<th>Experiencia</th>
								<td>Acciones</td>
							</tr>
						</thead>
						<tbody>
							@forelse($clientes as $row)
							<tr>
								<td>{{ $loop->iteration }}</td>
								<td>{{ $row->genero_id }}</td>
								<td>{{ $row->nombre_cli }}</td>
								<td>{{ $row->fecha_nac_cli }}</td>
								<td>{{ $row->telefono1_cli }}</td>
								<td>{{ $row->telefono2_cli }}</td>
								<td>{{ $row->email_cli }}</td>
								<td>{{ $row->titulo_cli }}</td>
								<td>{{ $row->rol_cli }}</td>
								<td>{{ $row->experiencia_cli }}</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Actions
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Cliente id {{$row->id}}? \nDeleted Clientes cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a></li>
											<li>
                                                <a href="#" class="dropdown-item" wire:click="redirectToPDF()">
                                                <i class="fa fa-file-pdf"></i> PDF</a>
											</li>
										</ul>
									</div>
								</td>
							</tr>
							@empty
							<tr>
								<td class="text-center" colspan="100%">No data Found </td>
							</tr>
							@endforelse
						</tbody>
					</table>
					<div class="float-end">{{ $clientes->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
