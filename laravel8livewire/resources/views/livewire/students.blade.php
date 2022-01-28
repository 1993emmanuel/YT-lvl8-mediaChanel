<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    @include('livewire.create')
    @include('livewire.update')
    <style>
    	nav svg{
    		max-height: 20px;
    	}
    </style>
    <section>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				@if(session()->has('message'))
    					<div class="alert alert-success text-center" role="alert">
    						{{session('message')}}
    					</div>
    				@endif
    				<div class="card">
    					<div class="card-header">
    						<div class="row">
    							<div class="col-md-8">
		    						<h2 class="text-center lead">
		    							All Students
											<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addStudentModal">Add New Student</button>
		    						</h2>
    								
    							</div>
    							<div class="col-md-4">
    								<input type="text" class="form-control" placeholder="Search...." wire:model="searchItem"/>
    							</div>
    						</div>
    					</div>
    					<div class="card-body">
    						<table class="table table-striped">
    							<thead>
    								<tr>
    									<th>Firs Name</th>
    									<th>Last Name</th>
    									<th>Email</th>
    									<th>Phone</th>
    									<th>Action</th>
    								</tr>
    							</thead>
    							<tbody>
    								@foreach($students as $student)
    								<tr>
    									<td>{{$student->firstname}}</td>
    									<td>{{$student->lastname}}</td>
    									<td>{{$student->email}}</td>
    									<td>{{$student->phone}}</td>
    									<td>
    										<button type="button" class="btn btn-info" data-toggle="modal" data-target="#updateStudentModal" wire:click.prevent="edit({{$student->id}})">Edit</button>
    										<button type="button" class="btn btn-danger" wire:click.prevent="delete({{$student->id}})">
    											Delete
    										</button>
    									</td>
    								</tr>
    								@endforeach
    							</tbody>
    						</table>
    						{{$students->links()}}
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
</div>
