<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Add Student</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" />
</head>
<body>
	

	<section style="padding-top: 60px;">

		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="card">
						<div class="card-header">
							<h2 class="lead text-center">Add New Student <a href="/all-student" class="btn btn-info float-right">View Students</a></h2>
						</div>
						<div class="card-body">
							@if(Session::has('student_added'))
								<div class="alert alert-success" role="alert">
									{{Session::get('student_added')}}
								</div>
							@endif
							<form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" name="name" class="form-control" />
								</div>

								<div class="form-group">
									<label for="file">Choose your photo</label>
									<input type="file" name="file" class="form-control" onchange="previeFile(this)" />
									<img id="previewImg" alt="img-profile" src="" style="max-width: 130px; margin-top: 20px;">
								</div>

								<button type="submit" class="btn btn-success">Submit</button>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</section>




	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>


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
	@if(Session::has('student_added'))
		<script>
			toastr.success("{!! Session::get('student_added') !!}")
		</script>
	@endif

	@if(Session::has('student_added'))
		<script>
			swal('Great Job', "{!! Session::get('student_added') !!}", 'success',{
				button : 'OK'
			});
		</script>
	@endif

</body>
</html>