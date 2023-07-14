@section('title', __('Cursoscaps'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Consuta de Cursos </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar Curso">
						</div>
						<div class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#createDataModal">
						<i class="fa fa-plus"></i>  Añadir Curso
						</div>
						<div><a href="{{ route('generar-pdfcursos') }}" class="btn btn-sm btn-info" target="blank">Ver Reporte</a></div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.cursoscaps.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr>
								<td>#</td>
								<th># Cliente</th>
								<th>Nombre</th>
								<th>Descipcion</th>
								<th>Publicacion</th>
								<th>Edad mínima</th>
								<th>Edad máxima</th>
								<th>Link de curso</th>
								<th>Cupos</th>
								<th>Costo $ </th>
								<td>Acciones</td>
							</tr>
						</thead>
						<tbody>
							@forelse($cursoscaps as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->cliente_id }}</td>
								<td>{{ $row->nombre_cursoscaps }}</td>
								<td>{{ $row->descipcion_cursoscaps }}</td>
								<td>{{ $row->publicacion_cursoscaps }}</td>
								<td>{{ $row->edadmin_cursoscaps }}</td>
								<td>{{ $row->edadmax_cursoscaps }}</td>
								<td>{{ $row->link_cursoscaps }}</td>
								<td>{{ $row->cupos_cursoscaps }}</td>
								<td>{{ $row->costo_cursoscaps }}</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Actions
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Cursoscap id {{$row->id}}? \nDeleted Cursoscaps cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a></li>  
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
					<div class="float-end">{{ $cursoscaps->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>