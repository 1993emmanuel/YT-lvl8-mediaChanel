<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<title>ADD POST</title>
</head>
<body>

	<h1>Add Post</h1>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="card">
						<div class="card-header">Add New Post</div>
						<div class="card-body">
							@if(Session::has('post_created'))
							    <div class="alert alert-success" role="alert">
							    	{{Session::get('post_created')}}
							    </div>
							@endif
							<form method="POST" action="{{ route('post.addsubmit') }}">
								    @csrf
								<div class="form-group">
									<label for="title">Title</label>
									<input type="text" name="title" class="form-control" placeholder="Introduce the title">
								</div>
								<div class="form-group">
									<label for="body">Post Description</label>
									<textarea class="form-control" name="body" rows="3"></textarea>
								</div>
								<input type="submit" value="Submit" class="btn btn-success" />
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>
</html>