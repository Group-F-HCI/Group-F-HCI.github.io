<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- Option 1: jQuery and Bootstrap Bundle (Include Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<title>SURVERID (Survey Saver)</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/LandingPage.css')}}">
</head>

<body>
	<!-- NAVBAR -->
    @include('some_include/navbar')
    <div class="container">
     	<img src="{{asset('images/Quote.jpg')}}" id="picture" height="500px" width="1000px"> 	
	</div>

    	<footer>
            <div class="container">
                <div class="row">
                    <div class="col-6 mr-auto" id="foot">
                    <a href="/laravel_project/surverid/public/about">About Us</a> <br>
                        We are wanderer
                    </div>
                    <div class="col-6 ml-auto" id="foot">
                        Contact Us : <br>
                        WA : 0821********
                    </div>
                </div>
            </div>
        </footer>
</body>
</html>