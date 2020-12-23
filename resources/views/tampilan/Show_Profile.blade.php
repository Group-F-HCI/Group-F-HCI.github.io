<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/ShowProfile.css') }}">

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <title>SURVERID (Survey Saver)</title>
</head>
<body>
    
    <!-- NAVBAR -->
    @include('some_include/navbar')

    <div class="container">
        <h2 id="AnotherUser" align="center">About Another_User</h2>
        <article>
            <div class="row" style="padding-top: 2%;">
                <div class="col-5">
                    <img id="AnotherPhotoProfile" src="/laravel_project/surverid/public/storage/profile_images/{{$data->image}}">
                </div>
                <div class="col-7">
                    Title : {{$data->title}}<br>
                    SP : {{$data->sp}}<br>
                    FP : {{$data->fp}}<br>
                </div>
            </div>
            Name : {{$data->fullname}} <br><br>
            Telegram : {{$data->telegram}} <br><br>
            Occupation : {{$data->occupation}} <br><br>
            Description : <br>
            <p>{{$data->about_me}}</p>
        </article>
    </div>

    <footer>
            <div class="container">
                <div class="row">
                    <div class="col-6 mr-auto" id="foot">
                        <a href="/laravel_project/surverid/public/about">About Us</a> <br>
                        We are wanderer <br> <br>
                        Link Pengisian Form Feedback : <br>
                        <a href="/laravel_project/surverid/public/form">Form Feedback</a> <br> <br>
                        <a href="/laravel_project/surverid/public/rule">Rules</a>
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