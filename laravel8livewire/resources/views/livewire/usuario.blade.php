<div>
	<style>
		nav svg{
		height: 20px;
		}
	</style>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">
    			<div class="card">
    				<div class="card-header"><h2 class="text-center lead">All Users</h2></div>
    			</div>
    			<div class="card-body">
    				<table class="table table-striped">
    					<thead>
    						<tr>
    							<th>Id</th>
    							<th>Name</th>
    							<th>Email</th>
    						</tr>
    					</thead>
    					<tbody>
    						@foreach($usuarios as $usuario)
    						   <tr>
    						   	<td>{{ $usuario->id }}</td>
    						   	<td>{{ $usuario->name }}</td>
    						   	<td>{{ $usuario->email }}</td>
    						   </tr>
    						@endforeach
    					</tbody>
    				</table>
    				{{$usuarios->links()}}
    			</div>
    		</div>
    	</div>
    </div>
</div>
