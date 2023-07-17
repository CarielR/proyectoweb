@section('title', __('Datoshomes'))
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Datoshome Listing </h4>
						</div>
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Search Datoshomes">
						</div>
						<div class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#createDataModal">
						<i class="fa fa-plus"></i>  Add Datoshomes
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.datoshomes.modals')
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Vision</th>
								<th>Mision</th>
								<th>Contactos</th>
								<th>Email</th>
								<th>Quienes Somos</th>
								<th>Cultura Org</th>
								<td>ACTIONS</td>
							</tr>
						</thead>
						<tbody>
							@forelse($datoshomes as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->vision }}</td>
								<td>{{ $row->mision }}</td>
								<td>{{ $row->contactos }}</td>
								<td>{{ $row->email }}</td>
								<td>{{ $row->quienes_somos }}</td>
								<td>{{ $row->Cultura_Org }}</td>
								<td width="90">
									<div class="dropdown">
										<a class="btn btn-sm btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											Actions
										</a>
										<ul class="dropdown-menu">
											<li><a data-bs-toggle="modal" data-bs-target="#updateDataModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Edit </a></li>
											<li><a class="dropdown-item" onclick="confirm('Confirm Delete Datoshome id {{$row->id}}? \nDeleted Datoshomes cannot be recovered!')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Delete </a></li>  
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
					<div class="float-end">{{ $datoshomes->links() }}</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>