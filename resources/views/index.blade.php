@extends('master')

@section('content')
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form">
				<span class="contact100-form-title">
					Registration Form
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<input class="input100" id="name" type="text" name="name" placeholder="Name">
					<label class="label-input100" for="name">
						<span class="fa fa-user"></span>
					</label>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Birthdate is required">
					<input class="input100" id="birthdate" type="date" max="2006-12-31" name="birthdate">
					<label class="label-input100" for="birthdate">
						<li class="fa fa-birthday-cake"></li>
					</label>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Address is required">
					<textarea class="input100" name="address" placeholder="Address"></textarea>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input100" id="email" type="text" name="email" placeholder="Email">
					<label class="label-input100" for="email">
						<span class="fa fa-envelope"></span>
					</label>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Photo is required">
					<input class="input10" id="photo" type="file" name="photo">
					<label class="label-input100" for="phone">
						<span class="fa fa-photo"></span>
					</label>
				</div>

				<div class="container-contact100-form-btn">
					<div class="wrap-contact100-form-btn">
						<div class="contact100-form-bgbtn"></div>
						<button class="contact100-form-btn">
							Submit
						</button>
					</div>
				</div>
			</form>

	<br><hr class="style-two"><br>

			<span class="contact100-form-title">
					Data
			</span>
			<table class="table table-striped table-bordered table-hover table-condensed" >
				<th>Name</th>
				<th>Birthdate</th>
				<th>Address</th>
				<th>Email</th>
				<th>Photo</th>
				<tr>
					<td>ji</td>
					<td>ji</td>
					<td>ji</td>
					<td>ji</td>
					<td>ji</td>
				</tr>
				<tr>
					<td>ji</td>
					<td>ji</td>
					<td>ji</td>
					<td>ji</td>
					<td>ji</td>
				</tr>
				<tr>
					<td>ji</td>
					<td>ji</td>
					<td>ji</td>
					<td>ji</td>
					<td>ji</td>
				</tr>
			</table>
		</div>
	</div>

@endsection