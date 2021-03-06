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
                                <li><a href="settings.php">Account</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container well">
            <h2>Sign In</h2>
            <p>&nbsp;&nbsp;</p>
            <form action="pass.php" method="post">
                <div class="form-group col-sm-12">
                    <div class="col-sm-2">
                        <label for="exampleInputEmail1">Username</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="User Name">
                    </div>
                </div>

                <div class="form-group col-sm-12">
                    <div class="col-sm-2">
                        <label for="exampleInputPassword1">Security Question</label>
                    </div>
                    <div class="col-sm-10">
                        <label for="exampleInputPassword1">Your First School ?</label>
                    </div>
                </div>

                <div class="form-group col-sm-12">
                    <div class="col-sm-2">
                        <label for="exampleInputPassword1">Answer</label>
                    </div>
                    <div class="col-sm-10">
                        <input type="password" name="answer" class="form-control" id="securityAnswer" placeholder="Answer">
                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <input type="submit" class="btn btn-default" value="submit" />
                </div>
                <p>&nbsp;</p>

                <div class = "pull-right">
                    <a href="forgotPassword.html"><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;&nbsp;Forgot Password?</a>
                    <br/>
                    <a href="signup.html"><span class="glyphicon glyphicon-user"></span>&nbsp;&nbsp;&nbsp;New User? Sign Up!</a>
                </div>

            </form>
        </div>

        <p class = "one"></p>
            <div class="pull-right">
                <h4>&copy;Blue Store&nbsp;&nbsp;&nbsp;&nbsp;</h4>
            </div>
    </body>
<script type="text/javascript" src="scripts/script.js"></script>
</html>