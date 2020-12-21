<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- Option 1: jQuery and Bootstrap Bundle (Include Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<title>SURVERID (Survey Saver)</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/EditLink.css') }}">

</head>
<body>
    <!-- NAVBAR -->
    @include('some_include/navbar')
    @if (auth::user()->id == $data->user_id)
        {!! Form::open(['method' => 'PUT', 'action' => ['App\Http\Controllers\data_controller@update', $data->id,  'enctype' => 'multipart/form-data'], 'files' => 'true' ])!!} 
            @csrf    
            <div class="form-group">
                {{Form::label('judul', 'Title')}}
                {{Form::text('judul', $data->title, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('pranala', 'Link')}}
                {{Form::text('pranala', $data->link, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('deskripsi', 'Description')}}
                {{Form::textarea('deskripsi', $data->description, ['class' => 'form-control'])}}
            </div>
            {{Form::file('gambar')}}
            <div class="text-center">
            {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
            </div>
        {!! Form::close() !!} 
    @else
        <div class="container">
            <h3 style="color: white">Maaf, ini bukan tempat untuk anda</h3>
        </div>
    @endif

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