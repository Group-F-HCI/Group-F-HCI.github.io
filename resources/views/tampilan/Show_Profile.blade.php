<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/ShowProfile.css">

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <title>SURVER (Survey Saver)</title>
</head>
<body>
    
    <!-- NAVBAR -->
    @include('some_include/navbar')

    <div class="container">
        <h2 id="AnotherUser" align="center">About Another_User</h2>
        <article>
            <div class="row" style="padding-top: 2%;">
                <div class="col-5">
                    <img id="AnotherPhotoProfile" src="images/NonPicture.jpg">
                </div>
                <div class="col-7">
                    Title : SenderX<br>
                    SP : 15<br>
                    FP : 15<br>
                </div>
            </div>
            Name : Safron Aobara <br><br>
            Telegram : fkkasfjkasjkafj <br><br>
            Occupation : Unknown <br><br>
            Description : <br>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Unde vero explicabo ducimus illo, consequuntur quidem deserunt, 
            voluptate iusto rem id maxime possimus ullam eligendi! Error ut ea dolore velit amet? <br>
        </article>
    </div>

</body>
</html>