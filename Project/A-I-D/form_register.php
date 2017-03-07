<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Animals AID ::HOME::</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Animals A-I-D</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Funding donation</a>
                    </li>
                    <li>
                        <a href="#">Blood donation</a>
                    </li>
                    <li>
                        <a href="#">Home for animals</a>
                    </li>
                    <li>
                        <a href="#">Follow</a>
                    </li>
                    <li>
                        <a href="#">News</a>
                    </li>
                    <li>
                        <a href="secure/index.php">Login</a>
                    </li>
                    <li>
                        <a href="form_register.php">register</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
   
    
<div>
        <h1>register</h1>
        <form action="register.php" method="POST">
            <label for="name">Username: </label>
            <input type="text" name="name" required autofocus>
            <label for="password">Password: </label>
            <input type="password" name="password" required>
            <label for="email">E-mail: </label>
            <input type="email" name="email" placeholder="example@domain.com" required>
            <br><br>
            <input type="submit" value="register">
        </form>
        <br>
        <br>
        <a href="index.php">กลับหน้าหลัก</a>
        </div>
<hr>














   

               <div class="col-md-3" >
                    <p class="lead">List of Donors</p>
                        <div class="list-group">
                            <p class="list-group-item">
                                <i class="fa fa-comment fa-fw">Jutatip</i>
                                <span class="pull-right text-muted samll">
                                    <em>$100</em>
                                </span>   
                    </p>

                    <p class="list-group-item">
                        <i class="fa fa-comment fa-fw">Suthisa</i>
                        <span class="pull-right text-muted samll">
                            <em>$100</em>
                        </span> 
                    </p>
                    <p class="list-group-item">
                        <i class="fa fa-comment fa-fw">Chanon</i>
                        <span class="pull-right text-muted samll">
                            <em>$100</em>
                        </span> 
                    </p>
                </div>
            </div>



   
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="text-center col-lg-12">
                    <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>