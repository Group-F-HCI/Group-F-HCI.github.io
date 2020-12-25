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
        <div class="container mt-5">
            <p id="title" class="text-center">{{$data->title}}</p>
            
            <img id="post_picture" src="/laravel_project/surverid/public/storage/post_images/{{$data->image}}" alt="Picture01.jpg">
            
            <div class="row mt-3">
                <div class="col-lg-3 col-12">
                    <a href="/laravel_project/surverid/public/profile/{{$data->user_id}}">
                        <img id="people_picture" src="/laravel_project/surverid/public/storage/profile_images/{{$user->image}}" alt="NonPicture.jpg">
                    </a>
                </div>
                <div class="col-lg-9 col-12">
                    <div class="row mt-2">
                        <div class="col-lg-2 text-white">Username :</div>
                        <div class="col-lg-10" style="background-color: #96F3FA; color: #00a9c7">{{$data->username}}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-2 text-white">Fullname :</div>
                        <div class="col-lg-10" style="background-color: #96F3FA; color: #00a9c7">{{$data->fullname}}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-2 text-white">Email :</div>
                        <div class="col-lg-10" style="background-color: #96F3FA; color: #00a9c7">{{$data->email}}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-2 text-white">Description :</div>
                        <div class="col-lg-10" style="background-color: #96F3FA; color: #00a9c7">{{$data->description}}</div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-lg-2 text-white">Link :</div>
                        <div class="col-lg-10" style="background-color: #96F3FA; color: #00a9c7">{{$data->link}}</div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-2"></div><div class="col-2"></div>
                <div class="col-2">
                    <button class="btn btn-info" onclick="window.location.href='{{$data->link}}';">
                        Go To Link
                    </button>
                </div>
                <div class="col-2">
                    {!! Form::open(['method' => 'POST','action' => ['App\Http\Controllers\data_controller@update_fp',$data->id] ])!!} 
                        {{Form::hidden('plus', 1)}}
                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}
                </div>
                <div class="col-2"></div><div class="col-2"></div>
            </div>
        </div>
</body>
</html>