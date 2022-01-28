<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Multi-Step-Form</title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" integrity="sha512-eyHL1atYNycXNXZMDndxrDhNAegH2BDWt1TmkXJPoGf1WLlNYt08CSjkqF5lnCRmdm3IrkHid8s2jOUY4NIZVQ==" crossorigin="anonymous"></script>

	<style>
		section{
			padding-top: 100px;
		}
		.form-section{
			padding-left: 15px;
			display: none;
		}
		.form-section.current{
			display: inherit;
		}
		.btn-info, .btn-success{
			margin-top: 10px;
		}
		.parsley-errors-list{
			margin: 2px 0 3px;
			padding:0;
			list-style-type: none;
			color: red;
		}
	</style>

</head>
<body>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="card">
						<div class="card-header text-white bg-info">
							<h5>Multi Step Form</h5>
						</div>
						<div class="card-body">
							<form action="{{ route('form.formSubmit') }}" class="contact-form" method="POST">
								@csrf
								<div class="form-section">
									<label for="firstname">First Name</label>
									<input type="text" name="firstname" class="form-control" required>
								</div>

								<div class="form-section">
									<label for="lastname">Last Name</label>
									<input type="text" name="lastname" class="form-control" required>
								</div>

								<div class="form-section">
									<label for="email">Email</label>
									<input type="email" name="email" class="form-control" required>
								</div>

								<div class="form-section">
									<label for="phoen">Phone</label>
									<input type="text" name="phoen" class="form-control" required>
								</div>

								<div class="form-section">
									<label for="msg">Message</label>
									<textarea class="form-control" name="msg" required></textarea>
								</div>

								<div class="form-navigation">
									<button type="button" class="previous btn btn-info float-left">Previus</button>
									<button type="button" class="next btn btn-info float-right">Next</button>
									<button type="submit" class="btn btn-success float-right">Submit</button>
								</div>

							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<script>
		$(function(){
			var $sections = $('.form-section');
			function navigateTo(index){
				$sections.removeClass('current').eq(index).addClass('current');
				$('.form-navigation .previous').toggle(index>0);
				var atTheEnd = index >= $sections.length -1;
				$('.form-navigation .next').toggle(!atTheEnd);
				$('.form-navigation [type=submit]').toggle(atTheEnd);
			}

			function curIndex(){
				return $sections.index($sections.filter('.current'));
			}

			$('.form-navigation .previous').click(function(){
				navigateTo(curIndex()-1);
			});

			$('.form-navigation .next').click(function(){
				$('.contact-form').parsley().whenValidate({
					group : 'block-' + curIndex()
				}).done(function(){
					navigateTo(curIndex()+1);
				});
			});

			$sections.each(function(index,section){
				$(section).find(':input').attr('data-parsley-group','block-',index);
			});

			navigateTo(0);

		})
	</script>


</body>
</html>