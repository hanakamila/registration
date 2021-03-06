@extends('master')

@section('content')
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="{{action('registrationController@update', $id)}}" enctype="multipart/form-data">  
				{{csrf_field()}} 
				{{ method_field('PUT')}}
				<span class="contact100-form-title">
					Edit Data
				</span>

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<input class="input100" id="name" type="text" name="name" placeholder="Name" value="{{$registration['name']}}">
					<label class="label-input100" for="name">
						<span class="fa fa-user"></span>
					</label>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Address is required">
					<textarea class="input100" name="address" placeholder="Address">{{$registration['address']}}</textarea>
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input100" id="email" type="text" name="email" placeholder="Email" value="{{$registration['email']}}">
					<label class="label-input100" for="email">
						<span class="fa fa-envelope"></span>
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
		</div>
	</div>
@endsection