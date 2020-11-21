<?php
if(isset($_POST['submit'])){
$name = ht$_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

echo "

<script>
alert('".$name."');
alert('".$email."');
alert('".$password."');
</script>

";
}




?>
<!DOCTYPE html>
<html>
<head>
	<title>
		DSC CSS
	</title>
	<!-- link to bootstrap css file -->
	<link rel="stylesheet" type="text/css" href="index.css">

	<style type="text/css">
	/*body{
		display: none;
	}*/
	</style>
</head>
<body>
	<div class="row justify-content-center mt-5" id="row">
		<div class="col-10">
			<form method="post" action="/" id="form">
				<div class="form-group row">
					<label class="col-md-4 text-md-right col-form-label ">
						Enter your name
					</label>
					<div class="col-md-8">
						<input type="text" name="name" class="form-control" required minlength="3">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-4 text-md-right col-form-label ">
						Enter your email
					</label>
					<div class="col-md-8">
						<input type="email" name="email" class="form-control" required minlength="3">
					</div>
				</div>

				<div class="form-group row">
					<label class="col-md-4 text-md-right col-form-label ">
						Enter your password

					</label>
					<div class="col-md-8">
						<input type="password" name="password" class="form-control" required minlength="3">
					</div>
				</div>
				<button type="Reset">Reset</button> 
				<button class="btn btn-success" type="submit" name="submit">Submit</button>
				<button class="btn btn-danger" id="closeBtn" onclick="document.getElementById('form').style.display='none';
			">
				Hide form
			</button>
			</form>

			
			<button id="showBtn" class="btn btn-info" onclick="document.getElementById('form').style.display='block';
			alert('Hey')"
			>
				Show Button
			</button>
			<button onclick="myFunction()> Pop UP </button>
		</div>
	</div>
	 <script type="text/javascript" src="app.js"> 
		
	</script>
</body>
</html>



