<div>
    {{-- Stop trying to control. --}}
    <section style="padding-top: 60px;">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 offset-md-3">
    				@if(session()->has('message'))
    					<div class="alert alert-info" role="alert">{{ session('message') }}</div>
    				@endif
    				<div class="card">
    					<div class="card-header"><h2 class="lead text-center">Upload your file</h2></div>
    					<div class="card-body">
    						<form id="form-upload" enctype="multipart/form-data" wire:submit.prevent="fileUpload">
    							<div class="form-group">
    								<label for="title">Title</label>
    								<input type="text" class="form-control" name="title" wire:model="title">
    								@error('title')	<span class="text-danger">{{$message}}</span>	@enderror
    							</div>

    							<div class="form-group">
    								<label for="filename">File</label>
    								<input type="file" class="form-control" name="filename" wire:model="filename">
    								@error('filename')	<span class="text-danger">{{$message}}</span>	@enderror
    							</div>
    							<button type="submit" class="btn btn-success float-right">Submit</button>
    						</form>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
</div>
