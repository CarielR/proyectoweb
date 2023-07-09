@section('title', __('Empleos'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Empleo Listing </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Empleos">
						</div>
						<div class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#createDataModal">
						<i class="fa fa-plus"></i>  Add Empleos
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.empleos.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Cliente Id</th>
								<th>Nombre Emp</th>
								<th>Descripcion Emp</th>
								<th>Modalidad Emp</th>
								<th>Horario Emp</th>
								<th>Fechapub Emp</th>
								<th>Experiencia Emp</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@forelse($empleos as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->cliente_id }}</td>
								<td>{{ $row->nombre_emp }}</td>
								<td>{{ $row->descripcion_emp }}</td>
								<td>{{ $row->modalidad_emp }}</td>
								<td>{{ $row->horario_emp }}</td>
								<td>{{ $row->fechapub_emp }}</td>
								<td>{{ $row->experiencia_emp }}</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Actions
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Empleo id {{$row->id}}? \nDeleted Empleos cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a></li>  
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
					<div class="float-end">{{ $empleos->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>