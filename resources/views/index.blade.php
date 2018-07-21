@extends('master')

@section('content')
	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form validate-form" method="post" action="/registrations" enctype="multipart/form-data"> @csrf
				<span class="contact100-form-title">
					Registration Form
				</span>

				@if (\Session::has('success'))
			      <div class="alert alert-success">
			        <p>{{ \Session::get('success') }}</p>
			      </div><br/>
			    @endif

			    @if (count($errors) > 0)
		            <div class="alert alert-danger">
		                <strong>Whoops!</strong> There were some problems with your input.
		                <ul>
		                    @foreach ($errors->all() as $error)
		                        <li>{{ $error }}</li>
		                    @endforeach
		                </ul>
		            </div>
		        @endif

				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<input class="input100" id="name" type="text" name="name" placeholder="Name" pattern="[A-Za-z]{1,100}" title="Only use letters">
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
					<input class="input10" id="photo" type="file" name="photo" {{-- accept="image/.jpg, .jpeg" --}}>
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
				<th>Action</th>
				@foreach($registrations as $registration)
				<tr>
					<td>{{$registration['name']}}</td>
					<td>{{$registration['birthdate']}}</td>
					<td>{{$registration['address']}}</td>
					<td>{{$registration['email']}}</td>
					<td>{{$registration['photo']}}
					</td>
					<td>
                    	<a class="btn btn-info btn-sm" href="">Edit</a>
                    	<form class="delete" action="{{ url('delete',$registration->id) }}" method="POST">
					        <input type="hidden" name="_method" value="DELETE">
					        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
					        <input type="submit" class="btn btn-danger btn-sm" value="Delete">
					    </form>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>
@endsection