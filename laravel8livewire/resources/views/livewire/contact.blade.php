<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <h1 class="text-center">Contact blade php page</h1>
    <section style="padding-top: 60px;">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 offset-md-3">
    				<div class="card">
    					<div class="card-header"><h2 class="lead text-center">Contact Form</h2></div>
    					<div class="card-body">
    						<form action="" wire:submit.prevent="submitForm">

    							<div class="form-group">
    								<label for="name">Name</label>
    								<input type="text" name="name" class="form-control" wire:model="name" />
    								@error('name')
    									<p class="text-bold text-danger">{{ $message }}</p>
    								@enderror
    							</div>

    							<div class="form-group">
    								<label for="email">Email</label>
    								<input type="text" name="email" class="form-control" wire:model="email" />
    								@error('email')
    									<p class="text-bold text-danger">{{ $message }}</p>
    								@enderror
    							</div>

    							<div class="form-group">
    								<label for="phone">Phone</label>
    								<input type="text" name="phone" class="form-control" wire:model="phone" />
    								@error('phone')
    									<p class="text-bold text-danger">{{ $message }}</p>
    								@enderror
    							</div>

    							<div class="form-group">
    								<label for="msg">Message</label>
    								<textarea name="msg" class="form-control" wire:model="msg"></textarea>
    								@error('msg')
    									<p class="text-bold text-danger">{{ $message }}</p>
    								@enderror
    							</div>

    							<button type="submit" class="btn btn-success btn-block">Submit</button>

    						</form>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
</div>
