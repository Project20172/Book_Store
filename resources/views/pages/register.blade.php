@extends('layout.master')
@section('container')
<div class="container">
<div class="breadcrumbs">
	<div class="container">
		<ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
			<li><a href="{{ route('home') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
			<li class="active">Register Page</li>
		</ol>
	</div>
</div>

<div class="register">
	<br>
	<br>
	<div class="container">
		<h3 class="animated wow zoomIn animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Register Here</h3>
		<p class="est animated wow zoomIn animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia 
		deserunt mollit anim id est laborum.</p>
		<div class="login-form-grids">
			<h5 class="animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">profile information</h5>
			<form class="animated wow slideInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInUp;">
				<input type="text" placeholder="First Name..." required=" ">
				<input type="text" placeholder="Last Name..." required=" ">
			</form>
			<div class="register-check-box animated wow slideInUp" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
				<div class="check">
					<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>Subscribe to Newsletter</label>
				</div>
			</div>
			<h6 class="animated wow slideInUp" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">Login information</h6>
			<form class="animated wow slideInUp" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
				<input type="email" placeholder="Email Address" required=" ">
				<input type="password" placeholder="Password" required=" ">
				<input type="password" placeholder="Password Confirmation" required=" ">
				<div class="register-check-box">
					<div class="check">
						<label class="checkbox"><input type="checkbox" name="checkbox"><i> </i>I accept the terms and conditions</label>
					</div>
				</div>
				<input type="submit" value="Register">
			</form>
		</div>
		<div class="register-home animated wow slideInUp" data-wow-delay=".5s" style="visibility: hidden; animation-delay: 0.5s; animation-name: none;">
			<a href="{{ route('home') }}">Home</a>
		</div>
	</div>
</div>
</div>
@endsection