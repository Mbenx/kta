<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Dashboard">
        <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

        <title>Daftar KTA Pramuka On-Line</title>

        <!-- Bootstrap core CSS -->
        <link href="../admin1/assets/css/bootstrap.css" rel="stylesheet">
        <!--external css-->
        <link href="../admin1/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="../admin1/assets/css/style.css" rel="stylesheet">
        <link href="../admin1/assets/css/style-responsive.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>
        <header class="header black-bg">
            <!--            <div class="sidebar-toggle-box">
                            <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                        </div>-->
            <!--logo start-->
            <a href="../index.php" class="logo"><b>Pendaftaran KTA Pramuka On-Line</b></a>
            <!--logo end-->
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="../index.php">HOME</a></li>
                </ul>
            </div>
        </header>

        <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
        <div id="login-page">
            <div class="container">

                <form class="form-login" action="index.html">
                    <h2 class="form-login-heading">Pendaftaran Akun Baru</h2>
                    <div class="login-wrap">
                        <select class="form-control" placeholder="ID Kwarran" autofocus>
                            <option>Kwarran </option>
                        </select>
                        <br>
                        <select class="form-control" placeholder="ID Pangkalan" autofocus>
                        </select>
                        <br>
                        <input type="text" class="form-control" placeholder="Nama User / Pangkalan" autofocus>
                        <br>
                        <input type="text" class="form-control" placeholder="E Mail" autofocus>
                        <br>
                        <input type="password" class="form-control" placeholder="Password">
                        <br>
                        <input type="password" class="form-control" placeholder="Re Password">
                        <label class="checkbox">
<!--                            <span class="pull-right">
                                <a data-toggle="modal" href="login.php#myModal"> Saya Sudah Memiliki Akun.</a>

                            </span>-->
                        </label>
                        <button class="btn btn-theme btn-block" href="?" type="submit"><i class="fa fa-lock"></i> SIGN ME UP</button>
                        <hr>


                        <div class="registration">
                            Anda Sudah Memiliki Akun?<br/>
                            <a class="" href="login.php">
                                Login
                            </a>
                        </div>

                    </div>

                    <!-- Modal -->
                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title">Forgot Password ?</h4>
                                </div>
                                <div class="modal-body">
                                    <p>Enter your e-mail address below to reset your password.</p>
                                    <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                                </div>
                                <div class="modal-footer">
                                    <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                    <button class="btn btn-theme" type="button">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- modal -->

                </form>	  	

            </div>
        </div>

        <!-- js placed at the end of the document so the pages load faster -->
        <script src="assets/js/jquery.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>

        <!--BACKSTRETCH-->
        <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
        <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
        <script>
            $.backstretch("assets/img/login-bg.jpg", {speed: 500});
        </script>


    </body>
</html>
