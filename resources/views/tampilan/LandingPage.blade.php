<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- Option 1: jQuery and Bootstrap Bundle (Include Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	
	<link rel="icon" type="image/x-icon" src="{{asset('images/Picture01.jpg')}}">
	<title>SURVERID (Survey Saver)</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/LandingPage.css')}}">
</head>

<body>
	<!-- NAVBAR -->
    @include('some_include/navbar')
    <div class="container">
        <img src="{{asset('images/Quote.jpg')}}" id="picture" height="500px" width="1000px"> 	
	</div>

    @include('some_include.footer')
</body>
</html>