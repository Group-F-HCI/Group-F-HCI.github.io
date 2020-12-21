<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ URL::asset('css/Collections.css') }}">

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <title>SURVERID (Survey Saver)</title>
</head>
<body>
    
    @include('some_include/navbar')

    <div class="container">
        <h2 id="collections" align="center">Collections</h2>
        <article>
            @if (count($data)>=1)
                <div class="row">
                    @foreach ($data as $item)
                        <div class="col-6 col-lg-4 mb-2">
                            <div class="card">
                                <img src="/laravel_project/surverid/public/storage/post_images/{{$item->image}}" class="card-img-top">
                                <div class="card-body">
                                    <a href="/laravel_project/surverid/public/surverid_db/{{$item->id}}/edit">
                                        <h5 class="card-title" style="color: black;">{{$item->title}}</h5>
                                    </a> 
                                    <p class="card-text">
                                        Description : <br>
                                        {{$item->description}}
                                    </p>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <a href="{{$item->link}}" class="btn btn-primary">Link</a>
                                    </div>
                                    <div class="col-6">
                                        {!! Form::open(['method' => 'DELETE', 'class' => 'float-right' ,'action' => ['App\Http\Controllers\data_controller@destroy', $item->id] ])!!}
                                            {{Form::submit('DELETE', ['class' => 'btn btn-danger'])}}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else 
                <h5 style="color: white">Maaf, tidak ada data yang bisa ditampilkan</h5>
            @endif
        </article>

    </div>
</body>
</html>
