<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day --}}
    <section>
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 offset-md-3">
    				@if(session()->has('message'))
    				<div class="alert alert-info">
    					{{session('message')}}
    				</div>
    				@endif
    				<div class="card">
    					<div class="card-header">
    						<h2 class="text-center lead">Upload Images</h2>
    					</div>
    					<div class="card-body">
    						<form id="upload-images" enctype="multipart/form-data" wire:submit.prevent="uploadImages">
    							<div class="form-group">
    								<label for="images">Chouse Image</label>
    								<input type="file" name="images" class="form-control" wire:model="images" multiple />
    							</div>
    							<button type="submit" class="btn btn-success float-right">Upload Images</button>
    						</form>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
</div>
