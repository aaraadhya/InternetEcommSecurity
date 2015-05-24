<?php
include 'php_modules/modules.php';
    
$user = $_POST['username'];
$ans = $_POST['answer'];



if(credentialCheck($user,$ans))
{
    echo "<h1>Error in username and/or password</h1>";
    exit();
}

?>

<!DOCTYPE html>
<html>
	<head>
		<title>
			BTA - Store
		</title>

		<!-- Javascript -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

		<!-- Bootstrap -->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<!-- Icons provided by Glyphicons @ http://glyphicons.com/ -->

		<!-- Style -->
		<link href="styles/style.css" rel="stylesheet">
		<!--[if IE]>
 		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<![endif]-->

	</head>

	<body>
		<div class="container">
			<h2>Sign In</h2>
			<p>&nbsp;&nbsp;</p>
			<form action="catalogue.php" method="post">
 	 			<div class="form-group col-sm-12">
 	 				<div class="col-sm-2">
 	 					<label for="exampleInputEmail1">Password</label>
 	 				</div>
    				<div class="col-sm-10">
    					<input type="password" name="pass" class="form-control"  placeholder="Password">
    				</div>
  				</div>
  				
  				<div class="col-sm-12 text-center">
  					<input type="submit" class="btn btn-default" value="submit" />
  				</div>
			</form>
		</div>
	</body>
	<script type="text/javascript" src="scripts/script.js"></script>
</html>