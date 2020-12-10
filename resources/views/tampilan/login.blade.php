<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<link rel="stylesheet" href="login.css"/>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<title>Login</title>
</head>
<body>
	<nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
        <img id="surver" class="navbar-brand" href="Surver.png" src="Surver.png">
     	</nav>

	<form id="login" method="get" action="login.php">
		<div class="login">
			<label for="email"><b>Email</b></label><hr>
	 		<input type="text" id="email" class="input1" name="email"><hr>
	 		
	 		<label for="psw"><b>Password</b></label>
	 		<input type="text" id="psw" class="input1" name="psw"><hr>

	 		<button type="submit" class="loginbtn">Login</button>

	  	<div class="punyaakun">
	  	<a href="register.html">Belum punya akun?</a>
		</div>
	  </div>
</body>
</html>