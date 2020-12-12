<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/HomeAfterLogin.css">

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <title>SURVER (Survey Saver)</title>
</head>
<body>
    @include('some_include/navbar')
    <div class="container">
        <img id="quote" height="50%" width="50%" src="images/Quote.jpg">
        <article>

            <h3 id="request" style="color: #005B88;">REQUEST LIST : </h3>
            @if (count($data)>=1)
                <div class="row">
                    @foreach ($data as $item)
                        <div class="col-6 col-lg-4 mb-2">
                            <div id="kartu" class="card">
                                <div class="card-body">
                                    <a href="#"><h5 id="cardTitle" class="card-title">{{$item->title}}</h5></a>
                                    <h6 class="card-subtitle mb-2 ">{{$item->username}}</h6>
                                    <h6 class="card-subtitle mb-2 ">{{$item->fullname}}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else   
                <h3 style="color: white;">Maaf, data lagi kosong</h3>
            @endif
        </article>

        
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>

    </div>

</body>
</html>