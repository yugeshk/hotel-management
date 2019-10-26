<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tiptin Management System- Dashboard</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span></button>
            <a class="navbar-brand" href="login.php"><span>Welcome to the </span>Tiptin Hotel</a>
        </div>
    </div>
</nav>

<div class="col-sm-9 col-sm-offset-2 col-lg-10 col-lg-offset-1 main">

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header" align="center">Customer Registration</h1>
        </div>
    </div><!--/.row-->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">Account Details:</div>
                <div class="panel-body">
                    <div class="emp-response"></div>
                    <form role="form" id="addUser" data-toggle="validator" method="post">
                        <div class="row">

                            <div class="form-group col-lg-6">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" id="first_name" required data-error="Enter First Name" required="">
                                <div class="help-block with-errors"></div>
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" id="last_name" required="">
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Username</label>
                                <input type="text" class="form-control" placeholder="username" id="user_name" required="">
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Password</label>
                                <input type="password" class="form-control" placeholder="" id="user_password" required minlength="6">
                            </div>

                            <div class="form-group col-lg-6">
                                <label>Email ID</label>
                                <input type="email" class="form-control" placeholder="example@abc.com" id="email_id" required>
                                <div class="help-block with-errors"></div>
                            </div>

                        </div>
                        <div align=" center">
                            <button type="submit" class="btn btn-lg btn-primary">Submit</button>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <button type="reset" class="btn btn-lg btn-danger">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>

</div>    <!--/.main-->

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>
<script src="js/foundation-datepicker.min.js"></script>
<script src="js/validator.min.js"></script>
<script src="js/custom.js"></script>
<script src="ajax.js"></script>


</body>
</html>

