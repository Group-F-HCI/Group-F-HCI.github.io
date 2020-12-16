<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- Option 1: jQuery and Bootstrap Bundle (Include Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	
	<link rel="stylesheet" type="text/css" href="{{asset('css/EditProfile.css')}}">
	<title>SURVERID (Survey Saver)</title>
</head>
<body>
	<!-- NAVBAR -->
    @include('some_include/navbar')
    @if (auth::user()->id == $data->id)
		<div class="row">
			<div id="LayoutKiri" class="col-4">
				<div id="ProfilUser">
					<div id="Gambar">
						<img id="PhotoProfile" src="/laravel_project/surverid/public/storage/profile_images/{{$data->image}}">
					</div >
					<br>
					<div id="Keterangan">
						Name : {{$data->name}} <br>
						Title : {{$data->title}} <br>
						SP : {{$data->sp}} <br>
						FP : {{$data->fp}}
					</div>
				</div>
			</div>

			<div id="LayoutKanan" class="col-8">
				<div id="IsiData">
					{!! Form::open(['method' => 'PUT', 'action' => ['App\Http\Controllers\user_controller@update', $data->id,  'enctype' => 'multipart/form-data'], 'files' => 'true' ])!!} 
						@csrf    
						<div class="form-group">
							{{Form::label('username', 'Username')}}
							{{Form::text('username', $data->name, ['class' => 'form-control'])}}
						</div>
						{{-- <div class="form-group">
							{{Form::label('password', 'Password')}}
							{{Form::password('password', $data->password, ['class' => 'form-control'])}}
						</div> --}}
						<div class="form-group">
							{{Form::label('fullname', 'Fullname')}}
							{{Form::text('fullname', $data->fullname, ['class' => 'form-control'])}}
						</div>
						{{-- <div class="form-group">
							{{Form::label('email', 'Email')}}
							{{Form::email('email', $data->email, ['class' => 'form-control'])}}
						</div> --}}
						<div class="form-group">
							{{Form::label('telegram', 'Telegram')}}
							{{Form::text('telegram', $data->telegram, ['class' => 'form-control'])}}
						</div>
						<div class="form-group">
							{{Form::label('occupation', 'Occupation')}}
							{{Form::text('occupation', $data->occupation, ['class' => 'form-control'])}}
						</div>
						<div class="form-group">
							{{Form::label('instance', 'Instance/School/University')}}
							{{Form::text('instance', $data->instance, ['class' => 'form-control'])}}
						</div>
						<div class="form-group">
							{{Form::label('aboutme', 'About me')}}
							{{Form::textarea('aboutme', $data->about_me, ['class' => 'form-control'])}}
						</div>
						{{Form::label('gambar', 'Change Profile Picture')}} <br>
						{{Form::file('gambar')}}
						{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
					{!! Form::close() !!} 
				</div>
			</div>
		</div>
	@else
		<div class="container">
            <h3 style="color: white">Maaf, ini bukan tempat untuk anda</h3>
        </div>
	@endif
</body>
</html>