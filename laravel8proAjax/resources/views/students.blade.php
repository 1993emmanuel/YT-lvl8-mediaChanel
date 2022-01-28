<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student CRUD</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</head>
<body>
	
	<section style="padding-top: 60px;">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
						    Students
						    <a href="#" class="btn btn-info float-right" data-toggle="modal" data-target="#studentModal">
						    	Add Student
						    </a>
						    <a href="#" class="btn btn-danger float-right" style="margin-right: 20px;" id="deleteAllChecked">
						    	Delete all Checked
						    </a>
					    </div>
						<div class="card-body">
							<table id="studentTable" class="table">
								<thead>
									<tr>
										<th>
											<input type="checkbox" id="chkCheckAll">
										</th>
										<th>First Name</th>
										<th>Last Name</th>
										<th>Email</th>
										<th>Phone</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($students as $student)
									<tr id="sid{{$student->id}}">
										<td>
											<input type="checkbox" name="ids" class="checkboxClass" value="{{$student->id}}">
										</td>
										<td>{{ $student->firstname }}</td>
										<td>{{ $student->lastname }}</td>
										<td>{{ $student->email }}</td>
										<td>{{ $student->phone }}</td>
										<td>
											<a href="javascript:void(0)" class="btn btn-info" data-toggle="modal" data-target="#studentEditModal" onclick="editStudent({{$student->id}})">
												Edit
											</a>
											<a href="javascript:void(0)" class="btn btn-danger" onclick="deleteStudent({{$student->id}})">
												Delete
											</a>
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

<!-- Add Modal -->
<div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="exampleModalLabel">Add New Student</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
      		<div class="modal-body">
      			<form action="" id="studentForm">
      				@csrf
      				<div class="form-group">
      					<label for="firstname">First Name</label>
      					<input type="text" id="firstname" class="form-control">
      				</div>
      				<div class="form-group">
      					<label for="lastname">Last Name</label>
      					<input type="text" id="lastname" class="form-control">
      				</div>
      				<div class="form-group">
      					<label for="email">Email</label>
      					<input type="text" id="email" class="form-control">
      				</div>
      				<div class="form-group">
      					<label for="phone">Phone</label>
      					<input type="text" id="phone" class="form-control">
      				</div>
      				<button type="submit" class="btn btn-success float-right">Submit</button>
      			</form>
      		</div>
      		<div class="modal-footer">
      			<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      		</div>
    	</div>
  	</div>
</div>


<!-- Edit Modal -->
<div class="modal fade" id="studentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
    	<div class="modal-content">
      		<div class="modal-header">
        		<h5 class="modal-title" id="exampleModalLabel">Edit Student</h5>
        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
          			<span aria-hidden="true">&times;</span>
        		</button>
      		</div>
      		<div class="modal-body">
      			<form action="" id="studentEditForm">
      				@csrf
      				<input type="hidden" name="id" id="id">
      				<div class="form-group">
      					<label for="firstname">First Name</label>
      					<input type="text" id="firstname2" class="form-control">
      				</div>
      				<div class="form-group">
      					<label for="lastname">Last Name</label>
      					<input type="text" id="lastname2" class="form-control">
      				</div>
      				<div class="form-group">
      					<label for="email">Email</label>
      					<input type="text" id="email2" class="form-control">
      				</div>
      				<div class="form-group">
      					<label for="phone">Phone</label>
      					<input type="text" id="phone2" class="form-control">
      				</div>
      				<button type="submit" class="btn btn-success float-right">Submit</button>
      			</form>
      		</div>
      		<div class="modal-footer">
        		<button type="button" class="btn btn-secondary float-left" data-dismiss="modal">Close</button>
      		</div>
    	</div>
  	</div>
</div>

<!-- Add Student -->
<script>
	$('#studentForm').submit(function(e){
		e.preventDefault();
		let firstname = $('#firstname').val();
		let lastname = $('#lastname').val();
		let email = $('#email').val();
		let phone = $('#phone').val();
		let _token = $('input[name=_token]').val();

		$.ajax({
			url : '{{ route('student.add') }}',
			type : 'post',
			data :{
				firstname : firstname,
				lastname : lastname,
				email : email,
				phone : phone,
				_token : _token
			},
			success: function(response){
				if(response){
					$('#studentTable tbody').prepend('<tr><td>'+response.firstname+'</td><td>'+response.lastname+'</td><td>'+response.email+'</td><td>'+response.phone+'</td></tr>');
					$('#studentForm')[0].reset();
					$('#studentModal').modal('hide');
				}
			}

		});

	});
</script>

<!-- Edit Student -->
<script>
	function editStudent(id){
		$.get('/student/'+id,function(student){
			$('#id').val(student.id);
			$('#firstname2').val(student.firstname);
			$('#lastname2').val(student.lastname);
			$('#email2').val(student.email);
			$('#phone2').val(student.phone);
			$('#studentEditModal').modal('toggle');
		});
	}

	// Update function
	$('#studentEditForm').submit(function(e){
		e.preventDefault();
		let id = $('#id').val();
		let firstname = $('#firstname2').val();
		let lastname  = $('#lastname2').val();
		let email = $('#email2').val();
		let phone = $('#phone2').val();
		let _token = $('input[name=_token]').val();

		$.ajax({
			url : '{{ route('student.update') }}',
			type : 'put',
			data : {
				id: id,
				firstname : firstname,
				lastname : lastname,
				email : email,
				phone : phone,
				_token : _token
			},
			success:function(response){
				$('#sid' +response.id + " td:nth-child(1)").text(response.firstname);
				$('#sid' +response.id + " td:nth-child(2)").text(response.lastname);
				$('#sid' +response.id + " td:nth-child(3)").text(response.email);
				$('#sid' +response.id + " td:nth-child(4)").text(response.phone);
				$('#studentEditModal').modal('toggle');
				$('#studentEditForm')[0].reset();
			}
		});
	});
</script>

<!-- Delete Student -->
<script>
	function deleteStudent(id){
		if(confirm('Do you realy want to delete this student ? ')){
			$.ajax({
				url : '/student/'+id,
				type : 'delete',
				data :{	_token : $('input[name=_token]').val()	},
				success:function(response){
					$('#sid'+id).remove();
				}
			});
		}
	}
</script>

<!-- CheckBox -->
<script>
	$(function(e){
		$('#chkCheckAll').click(function(){
			$('.checkboxClass').prop('checked',$(this).prop('checked'))
		});
	});

	$('#deleteAllChecked').click(function(e){
		e.preventDefault();
		var allids = [];
		$('input:checkbox[name=ids]:checked').each(function(){
			allids.push($(this).val());
		});

		$.ajax({
			url : '{{ route('student.deleteSelected') }}',
			type : 'delete',
			data : {	_token : $("input[name=_token]").val(), ids:allids	},
			success:function(response){
				$.each(allids,function(key, val){
					$('#sid'+val).remove();
				});
			}
		});

	});

</script>

</body>
</html>