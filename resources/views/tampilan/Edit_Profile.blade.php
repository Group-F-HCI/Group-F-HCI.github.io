<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

	<!-- Option 1: jQuery and Bootstrap Bundle (Include Popper) -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<title>SURVER (Survey Saver)</title>
	<link rel="stylesheet" type="text/css" href="biodata.css">

</head>
<body>
	<!-- NAVBAR -->
    @include('some_include/navbar')
    
  		<div class="row">
    		<div id="LayoutKiri">
    			<div id="ProfilUser">
      				<div id="Gambar">
      					<img src="Images/NonPicture.jpeg" id="FotoProfil">
      				</div >
      				<br>
      				<div id="Keterangan">
      					Name : Loremu Iptumu <br>
      					Title : Filler X <br>
      					SP : 5 <br>
      					FP : 50 
      				</div>
      			</div>
    		</div>

    		<div id="LayoutKanan">
      			<div id="IsiData">

      			<form id="Data">
  					<div class="form-group">
    					<label for="formGroupExampleInput">Username</label>
    					<input type="text" class="form-control" id="formGroupExampleInput">
  					</div>

  					<div class="form-group">
    					<label for="formGroupExampleInput2">Password</label>
    					<input type="Password" class="form-control" id="formGroupExampleInput">
  					</div>

  					<div class="form-group">
    					<label for="formGroupExampleInput2">Fullname</label>
    					<input type="text" class="form-control" id="formGroupExampleInput">
  					</div>

  					<div class="form-group">
    					<label for="exampleInputEmail1">Email</label>
    					<input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
  					</div>

  					<div class="form-group">
    					<label for="formGroupExampleInput2">Telegram</label>
    					<input type="text" class="form-control" id="formGroupExampleInput">
  					</div>

  					<div class="form-group">
    					<label for="formGroupExampleInput2">Occupation</label>
    					<input type="text" class="form-control" id="formGroupExampleInput">
  					</div>

  					<div class="form-group">
    					<label for="formGroupExampleInput2">Instance/School/University</label>
    					<input type="text" class="form-control" id="formGroupExampleInput">
  					</div>

  					<div class="form-group">
                		<label for="exampleFormControlTextarea1">About Me</label>
               			 <textarea class="form-control" id="exampleFormControlTextarea" rows="8"></textarea>
            		</div>

            		<div class="form-group">
            			<label for="exampleFormControlFile1">Profile Picture</label>
            			<input type="file" class="form-control-file" id="exampleFormControlFile">
        			</div>

        			<br>
        			<br>
        			<br>

        			<button type="submit" class="btn btn-primary" id="Buat">EDIT</button>
				</form>

				</div>
    		</div>
  		</div>
  	
</body>
</html>