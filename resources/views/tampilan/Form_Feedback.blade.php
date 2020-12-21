<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- Option 1: jQuery and Bootstrap Bundle (Include Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('css/FormFeedback.css') }}">

	<title>SURVERID (Survey Saver)</title>
</head>
<body>
    <!-- NAVBAR -->
    @include('some_include/navbar')
    <div class="text-center">
    <h2>Form Feedback</h2>
    </div>
    {!! Form::open(['Action' => 'App\Http\Controllers\form_feedback@store', 'Method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
        @csrf    
        <div class="form-group">
            {{Form::label('soal1', 'Apakah Anda menyukai tampilan web ini? Jika tidak, bagian mana yang tidak Anda sukai?')}}
            {{Form::textarea('soal1', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('soal2', 'Fitur apa yang menurut Anda tidak diperlukan pada web ini?')}}
            {{Form::textarea('soal2', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('soal3', 'Apakah web kami sudah memenuhi standar sebagai web penyedia survey?')}}
            {{Form::textarea('soal3', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('soal4', 'Menurut Anda, apakah masih ada hal yang dapat ditingkatkan dari web ini?')}}
            {{Form::textarea('soal4', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('soal5', 'Menurut Anda, apakah web ini mudah untuk digunakan? Jika tidak, tolong sebutkan alasannya.')}}
            {{Form::textarea('soal5', '', ['class' => 'form-control'])}}
        </div>
        <div class="text-center"> <br> <br> <br> <br>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}

    <footer>
            <div class="container">
                <div class="row">
                    <div class="col-6 mr-auto" id="foot">
                        About Us : <br>
                        We are wanderer <br> <br>
                        Link Pengisian Form Feedback : <br>
                        <a href="/laravel_project/surverid/public/form">Form Feedback</a>
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