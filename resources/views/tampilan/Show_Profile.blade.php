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
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
        <img id="surver" class="navbar-brand" href="#" src="images/Surver.png">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            <li class="nav-item" style="margin-top: 0.5%;">
                <a class="nav-link" href="#" style="color: #96F3FA;">Home</a>
            </li>
            <li class="nav-item" style="margin-top: 0.5%;">
                <a class="nav-link" href="#" style="color: #96F3FA;">Create</a>
            </li>
            <li class="nav-item" style="margin-top: 0.5%;">
                <a class="nav-link" href="#" style="color: #96F3FA;">Collections</a>
            </li>
            <li id="profile" class="nav-item dropdown">
                <a style="text-align: right;" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img id="PhotoProfile" src="images/NonPicture.jpg">
                    <span style="color: #96F3FA;"> nama user</span>
                </a>
                <div id="dropdown" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Log out</a>
                </div>
            </li>
            </ul>
        </div>
    </nav>

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