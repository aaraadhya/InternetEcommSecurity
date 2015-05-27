<?php
include 'php_modules/modules.php';
    
//$password = $_POST['pass'];
//
//if(passwordCheck($password))
//{
//    echo "<h1>Error 404</h1>";
//    exit();
//}


?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			BTA - Catologue
		</title>

		<!-- Javascript -->
		
		<!-- Bootstrap -->
		<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<!-- Icons provided by Glyphicons @ http://glyphicons.com/ -->

		<!-- Style -->
		<link href="styles/catalogue.css" rel="stylesheet">
		<!--[if IE]>
 		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<![endif]-->

	</head>
		<!-- HTML Body -->
		<body bgcolor = "#6495ed">
		<h1><i><center>Women's Collection<i></h1><p class = "one"></p>
            
            <?php  catalogeDisplay();  ?>
			</div>
			</div>
			</div>
		</body>
</html>