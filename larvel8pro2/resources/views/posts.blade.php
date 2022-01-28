<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Post</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	

	<section style="padding-top: 60px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							Add Post <a href="/add-post" class="btn btn-info">Add New Post</a>
						</div>
						<div class="card-body">
							@if(Session::has('post_deleted'))
								<div class="alert alert-info" role="alert">{{ Session::get('post_deleted') }}</div>
							@endif
							<table class="table table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Title</th>
										<th>Body</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($posts as $post)
									<tr>
										<td>{{ $post->id }}</td>
										<td>{{ $post->title }}</td>
										<td>{{ $post->body }}</td>
										<td>
											<a href="/posts/{{$post->id}}" class="btn btn-info">Details</a>
											<a href="/edit-post/{{$post->id}}" class="btn btn-success">Editar</a>
											<a href="/delete-posts/{{$post->id}}" class="btn btn-danger">Eliminar</a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
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