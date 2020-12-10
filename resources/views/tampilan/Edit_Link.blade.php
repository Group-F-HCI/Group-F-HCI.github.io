<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	 <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	 <!-- Option 1: jQuery and Bootstrap Bundle (Include Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<title>SURVER (Survey Saver)</title>
	<link rel="stylesheet" type="text/css" href="EditLink.css">

</head>
<body>
    <!-- NAVBAR -->
    @include('some_include/navbar')

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