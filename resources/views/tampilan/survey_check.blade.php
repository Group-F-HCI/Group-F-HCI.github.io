<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/survey_check.css') }}">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<title>SURVER (Survey Saver)</title>

</head>
<body>
	@include('some_include/navbar')

    <div class="container">
        <div class="lay1">
            <p>{{$data->title}}</p>
        </div>

        <div class="lay2">
            <img src="{{asset('images/Picture01.jpg')}}" alt="Picture01.jpg">
        </div>

        <div class="lay3">
            <img src="{{asset('images/NonPicture.jpg')}}" alt="NonPicture.jpg">
            <p>Username :</p>
            <h5>{{$data->username}}</h5>

            <p>Fullname :</p>
            <h5>{{$data->fullname}}</h5>

            <p>Email :</p>
            <h5>{{$data->email}}</h5>

            <p>Description :</p>
            <h5>{{$data->description}}</h5>
        </div>

        <div class="lay4">
            <a href="{{$data->link}}">
                <h3 style="background: #96F3FA;">LINK</h3>
            </a>
            <h3 style="background-color: #005B88; color: white;">SUBMIT</h3>
        </div>
    </div>

</body>
</html>