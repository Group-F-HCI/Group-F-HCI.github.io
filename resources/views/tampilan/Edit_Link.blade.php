<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	 <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	 <!-- Option 1: jQuery and Bootstrap Bundle (Include Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<title>Edit</title>
	<link rel="stylesheet" type="text/css" href="EditLink.css">

</head>
<body>
    <!-- NAVBAR -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
        <img id="surver" class="navbar-brand" href="#" src="Images/Surver.png">
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
                    <img id="PhotoProfile" src="Images/NonPicture.jpeg">
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

    <form id="BuatSurvey">
    	<div id="Isian">

            <div class="form-group">
                <label for="formGroupExampleInput">Title</label>
                <input type="text" class="form-control" id="formGroupExampleInput1">
            </div>
            
            <div class="form-group">
                <label for="formGroupExampleInput2">Insert Link</label>
                <input type="text" class="form-control" id="formGroupExampleInput1">
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
            </div>

        </div>

        <div class="form-group">
            <label for="exampleFormControlFile1">Insert Picture</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1">
        </div>

        <br>
        <br>
        <br>

        <button type="submit" class="btn btn-primary" id="Buat">EDIT</button>
        <button type="submit" class="btn btn-primary" id="Buat1">DELETE</button>
    </form>
</body>
</html>