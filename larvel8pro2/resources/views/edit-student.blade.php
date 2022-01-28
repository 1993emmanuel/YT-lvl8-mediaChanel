<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Student</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
	

	<section style="padding-top: 60px;">

		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="card">
						<div class="card-header">
							<h2 class="lead text-center">Edit Student <a href="/all-student" class="float-right btn btn-info">Atras</a></h2>
						</div>
						<div class="card-body">
							@if(Session::has('student_updated'))
								<div class="alert alert-success" role="alert">
									{{Session::get('student_updated')}}
								</div>
							@endif
							<form action="{{ route('student.edit') }}" method="POST" enctype="multipart/form-data">
								@csrf
								<input type="hidden" name="id" value="{{ $student->id }}">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" name="name" class="form-control" value="{{ $student->name }}" />
								</div>

								<div class="form-group">
									<label for="file">Choose your photo</label>
									<input type="file" name="file" class="form-control" onchange="previeFile(this)" />
									<img id="previewImg" alt="img-profile" src="{{ asset('students') }}/{{$student->profileimage}}" style="max-width: 130px; margin-top: 20px;">
								</div>

								<button type="submit" class="btn btn-info">Submit</button>

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


	<script type="text/javascript">
		function previeFile(input){
			var file = $('input[type=file]').get(0).files[0];
			if(file){
				var reader = new FileReader();
				reader.onload = function(){
					$('#previewImg').attr('src',reader.result);
				}
				reader.readAsDataURL(file);
			}
		}
	</script>

</body>
</html>