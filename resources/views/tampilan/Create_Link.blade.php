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

    <link rel="stylesheet" type="text/css" href="{{ asset('css/CreateLink.css') }}">

	<title>SURVERID (Survey Saver)</title>
</head>
<body>
    <!-- NAVBAR -->
    @include('some_include/navbar')
    {!! Form::open(['Action' => 'App\Http\Controllers\data_controller@store', 'Method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
        @csrf    
        <div class="form-group">
            {{Form::label('judul', 'Title')}}
            {{Form::text('judul', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('pranala', 'Link')}}
            {{Form::text('pranala', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('deskripsi', 'Description')}}
            {{Form::textarea('deskripsi', '', ['class' => 'form-control'])}}
        </div>
        {{Form::file('gambar')}} <br> <br> <br> <br>
        <div class="text-center">
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
        </div>
    {!! Form::close() !!}

</body>
</html>