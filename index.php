<?php
include './connection.php';
if(isset($_SESSION['username'])){
    header("location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel='shortcut icon' type='image/x-png' href='images/favicon.png'/>

        <title>UpatuApp | Tanzania</title>

        <!-- Bootstrap Core CSS -->
        <link href="stylesheets/bootstrap.min.css" rel="stylesheet">

        <!-- MetisMenu CSS -->
        <link href="stylesheets/metisMenu.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="stylesheets/sb-admin-2.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="stylesheets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
		<link href="stylesheets/style.css" rel="stylesheet" type="text/css">

    </head>

    <body>

        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/">UpatuApp Tanzania</a>
                </div>
                <!-- /.navbar-header -->


                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">

                            <li>
                                <a href="index.php"><i class="fa fa-sign-in fa-fw"></i> Login</a>
                            </li>


                        </ul>
                       
                    </div>
                    <!-- /.sidebar-collapse -->
                  
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <!-- partials part-->
            <!-- Page Content -->
            <div id="page-wrapper">
                <div class="container-fluid">
                    <div class="row">

                        <div class="col-md-6 col-md-offset-3">
                            <div class="login-panel panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Please Sign In</h3>
                                </div>
                                <div class="panel-body">
                                    <form role="form" method="post" action="login.php">
                                       <?= isset($_SESSION['msg'])?$_SESSION['msg']:NULL; unset($_SESSION['msg']) ?>
                                        <fieldset>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Username" name="username" type="text" autofocus>
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                            </div>
                                           
                                            <!-- Change this to a button or input when using this as a form -->
                                            <button class="btn btn-lg btn-success btn-block" name="btn">Login</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /#page-wrapper -->

            <!-- /#Footer -->
            <?php include './templates/footer.php';