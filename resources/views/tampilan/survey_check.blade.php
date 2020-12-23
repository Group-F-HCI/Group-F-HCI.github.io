<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/survey_check.css') }}">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<title>SURVERID (Survey Saver)</title>

</head>
<body>
    
    @include('some_include/navbar')
        <div class="lay1">
            <p>{{$data->title}}</p>
        </div>

        <div class="lay2">
            {{-- <img src="{{asset('images/Picture01.jpg')}}" alt="Picture01.jpg"> --}}
            <img src="/laravel_project/surverid/public/storage/post_images/{{$data->image}}" alt="Picture01.jpg">
        </div>

        <div class="lay3">
            <a href="/laravel_project/surverid/public/profile/{{$data->user_id}}">
                <img src="/laravel_project/surverid/public/storage/profile_images/{{$user->image}}" alt="NonPicture.jpg">
            </a>
            <p style="margin-right: 30px; ">Username :</p>
            <h5 style="padding-right: 640px;">{{$data->username}}</h5>

            <p style="margin-right: 37px;">Fullname :</p>
            <h5 style="padding-right: 570px;">{{$data->fullname}}</h5>

            <p style="margin-right: 66px;">Email :</p>
            <h5 style="padding-right: 580px;">{{$data->email}}</h5>

            <p style="margin-right: 14px;">Description :</p>
            <h5 style="width: 59%;">{{$data->description}}</h5>
        </div>

        <div class="lay4 row">
            <a href="{{$data->link}}" class="col-6" role="button">
                <h3 style="margin-left: 470px; background: #96F3FA; color: black;">LINK</h3>
            </a>
            <div class="col-6">
                {!! Form::open(['method' => 'POST','action' => 'App\Http\Controllers\data_controller@update_fp'])!!} 
                    {{Form::hidden('plus', 1)}}
                    <div class="text-center">
                    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    </div>
                {!! Form::close() !!}
            </div>
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