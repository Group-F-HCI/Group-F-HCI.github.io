<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="survey check.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<title>Survey Checker</title>

</head>
<body>
	<nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
        <img id="surver" class="navbar-brand" href="Surver.png" src="Surver.png">
     	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
            
            <li class="nav-item" style="margin-top: 0.5%;">
                <a class="nav-link" href="#" style="color: white;">Home</a>
            </li>
            <li class="nav-item" style="margin-top: 0.5%;">
                <a class="nav-link" href="#" style="color: #96F3FA;">Create</a>
            </li>
            <li class="nav-item" style="margin-top: 0.5%;">
                <a class="nav-link" href="#" style="color: #96F3FA;">Collections</a>
            </li>
            <li id="profile" class="nav-item dropdown">
                <a style="text-align: right;" class="nav-link dropdown-toggle" href="NonPicture.jpg" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img id="PhotoProfile" src="NonPicture.jpg">
                    <span style="color: #96F3FA;">Nama User</span>
                </a>
               
                <div id="dropdown" class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Profile</a>
                <a class="dropdown-item" href="#">Log out</a>
                </div>
            </li>
            </ul>
        </div>
     	</nav>


         <div class="lay1">
             <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab, voluptatibus.</p>
         </div>

         <div class="lay2">
             <img src="Picture01.jpg" alt="Picture01.jpg">
         </div>

         <div class="lay3">
             <img src="NonPicture.jpg" alt="NonPicture.jpg">
             <p style="margin-right: 30px; ">Username :</p>
             <h5 style="padding-right: 640px;">pujakerangajaib69</h5>

             <p style="margin-right: 37px;">Fullname :</p>
             <h5 style="padding-right: 570px;">uvuvwevwe ugwemubem ossas</h5>

             <p style="margin-right: 66px;">Email :</p>
             <h5 style="padding-right: 580px;">ossas@unj.id</h5>

             <p style="margin-right: 14px;">Description :</p>
             <h5 style="width: 59%;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis ratione tempore accusamus numquam sint esse quia, assumenda ullam reiciendis atque consequuntur! Dicta expedita mollitia temporibus nesciunt optio deserunt tempora? Necessitatibus?</h5>
         </div>

         <div class="lay4">
             <h3 style="margin-left: 470px; background: #96F3FA;">LINK</h3>
             <h3 style="background-color: #005B88; color: white;">SUBMIT</h3>
         </div>

</body>
</html>