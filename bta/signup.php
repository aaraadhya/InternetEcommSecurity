<?php
include 'php_modules/modules.php';
if($_POST['firstName']!="" && $_POST['lastName']!="" && $_POST['emailId']!="" && $_POST['userName']!="" && $_POST['securityAnswer']!="" && $_POST['pass']!="" && $_POST['confPass']!="")
{
 
if($_POST['pass']==$_POST['confPass'])
createUser($_POST['userName'],$_POST['firstName'],$_POST['lastName'],$_POST['emailId'],$_POST['confPass'], $_POST['securityAnswer']);
else
echo "Password do not match";
exit();
}

?>
<!DOCTYPE html>
<html>
    <head>
        <title>
            Blue Store
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
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">

                    </button>
                    <a class="navbar-brand" href="catalogue.php">
                        <img alt="Brand" src = "images/title.png" id="title">
                    </a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="cart.php" id = "whiteText">Cart</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" id = "whiteText">Account <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="logOutRedirect.html">Logout</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Account</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container well">
            <h2>Sign In</h2>
            <p>&nbsp;&nbsp;</p>
            <form name="signUpForm" action="signup.php" onsubmit= "return validateSignUpForm();" method="post">
                <div class="form-group col-sm-12">
                    <div class="col-sm-2">
                        <label for="firstName">First Name</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="firstName" class="form-control" id="firstName" placeholder="First Name">
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <div class="col-sm-2">
                        <label for="lastName">Last Name</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Last Name">
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <div class="col-sm-2">
                        <label for="emailId">Email Id</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="emailId" class="form-control" id="emailId" placeholder="johndoe@example.com">
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <div class="col-sm-2">
                        <label for="userName">Username</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="userName" class="form-control" id="userName" placeholder="User Name">
                    </div>
                </div>

                <div class="form-group col-sm-12">
                    <div class="col-sm-2">
                        <label for="securityQuestion">Security Question</label>
                    </div>
                    <div class="col-sm-10">
                        <select name = "securityQuestion" id = "questionList" class="form-control">
                            <option id = "0">Select Question</option>
                            <option id = "1">What is the name of your first Pet?</option>
                            <option id = "2">What is the last name of the teacher who gave you your first failing grade?</option>
                            <option id = "3">What is the name of the place your wedding reception was held?</option>
                            <option id = "4">What is the name of your first School?</option>
                            <option id = "5">What is the name of the City you were born in?</option>
                        </select>
                    </div>
                </div>

                <div class="form-group col-sm-12">
                    <div class="col-sm-2">
                        <label for="securityAnswer">Answer</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="password" name="securityAnswer" class="form-control" id="securityAnswer" placeholder="Answer">
                    </div>
                </div>

                <div class="form-group col-sm-12">
                    <div class="col-sm-2">
                        <label for="pass">Password</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="password" name="pass" class="form-control" id="pass" placeholder="Password">
                    </div>
                </div>

                <div class="form-group col-sm-12">
                    <div class="col-sm-2">
                        <label for="confPass">Confirm Password</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="password" name="confPass" class="form-control" id="confPass" placeholder="Confirm Password">
                    </div>
                </div>

                <div class="col-sm-12 text-center">
                    <input type="submit" class="btn btn-default" value="submit" />
                </div>
                <p>&nbsp;</p>

                <div class = "pull-right">
                    <a href="index.php"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;&nbsp;Already a user?Sign In!</a>
                </div>

            </form>
        </div>
    </body>
<script type="text/javascript" src="scripts/script.js"></script>
</html>