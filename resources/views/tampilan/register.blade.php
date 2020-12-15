<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="{{ asset('css/register.css') }}"/>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
		
		<title>Register</title>
	</head>

	<body>
	@include('some_include.navbar')

		<form id="register" method="POST" action="{{ route('register') }}">
		<div class="register">
			<label for="fullname"><b>Fullname</b></label>
			<input type="text" id="fullname" name="fullname">
			
			<label for="username"><b>Username</b></label>
			<input type="text" id="username" name="username">
		
			<label for="email"><b>Email</b></label>
			<input type="text" id="email" name="email">
		
			<label for="psw"><b>Password</b></label>
			<input type="password" id="psw" name="psw">

			<button type="submit" class="registerbtn">Register</button>

			<div class="punyaakun">
				<a href="login">Sudah punya akun?</a>
			</div>
		</div>
	</body>
</html>