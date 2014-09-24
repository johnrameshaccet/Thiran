<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thiran</title>
    <style>
        /*--------------------------------------------------------------*/

/*------------Styles For Social Buttons On Footer---------------*/

/*--------------------------------------------------------------*/

.social{
	margin-top: 20px;
	background-color: #FAFAFA;
	border-color: #222;
	border-style: solid;
	border-width: 1px;
	padding-right: 20px;
	font-size: 30px;
	padding-top: 10px;
	padding-bottom: 5px;
	-webkit-box-shadow: 0px 2px 6px 0px rgba(50, 50, 50, 1);
	-moz-box-shadow:    0px 2px 6px 0px rgba(50, 50, 50, 1);
	box-shadow:         0px 2px 6px 0px rgba(50, 50, 50, 1);
}
.social .sText{
	padding-top: 25px;
	font-size: 15px;
	font-family: 'Roboto Condensed', sans-serif;
	
}
.fa-facebook{
	background-color: #3B5998;
	color: #ddd;
}
.fa-google{
	background-color: #dd4b39;
	color: #ddd;
}
.fa-twitter{
	background-color: #00aced;
	color: #ddd;
}
.fa-linkedin{
	background-color: #2079A4;
	color: #ddd;
}
    </style>
        
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo asset_url();?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo asset_url();?>css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo asset_url();?>font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll" href="<?php echo base_url(); ?>">Thiran -strength & grace</a>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container">
            <div style="padding-top: 157px;">
	<div class="row">
<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 login">
    <div class="col-xs-12 well text-center">
							<!-- Login Image -->
							<img src="<?php echo asset_url();?>img/user.png" alt="User" class="img-circle" width="150" title="User"/>
                                                        <br><br>
							<!-- Login Form -->
							<form action="#" method="post">
							
								<!-- Code for username -->
								
								<div class="input-group">
                                                                   <span class="input-group-btn">
										<pre class="btn btn-default"><i class="fa fa-user"></i></pre>
									</span><input placeholder="Email" type="email" class="form-control"  required oninvalid="this.setCustomValidity('Enter email Here')" oninput="setCustomValidity('')"  name="email" id="email" />
								</div>
								 <label for="email" class="err"><?php echo form_error('email'); ?></label>
								<!-- Code for password -->
								
                                                                <div class="input-group" style="margin-top: 10px">
								<span class="input-group-btn">
										<pre class="btn btn-default"><i class="fa fa-lock"></i></pre>
									</span><input type="password"  required oninvalid="this.setCustomValidity('Enter password Here')" oninput="setCustomValidity('')"  name="password" id="password" class="form-control" placeholder="Password" />
									
								</div>
								<label for="password" class="err"><?php echo form_error('password'); ?></label>
								<!-- Login Submit-->
                                                                <input type="submit" class="btn btn-primary btn-block" name="login" value="Login" />
							</form>
							<a href="signup1.html" style="color:#00aced; text-align: center"> Forgot password?</a>
							<!-- Buttons for social login -->
							<!-- facebook login -->
							<button type="button" data-placement="top" title="Login with Facebook" class="btn fa fa-facebook ttip"></button>
							
							<!-- google login -->
							<button type="button" data-placement="top" title="Login with Google" class="btn fa fa-google ttip">&nbsp;</button>
							
							<!-- likedin login -->
							<button type="button" data-placement="top" title="Login with LinkedIn" class="btn fa fa-linkedin ttip">&nbsp;</button>
							
							<!-- Signup page link for other's -->
                                                        <br><span style="color: #222">Don't have account?</span><a href="signup_t" style="color:#00aced"> Signup here</a>
						</div>
			
	</div>
</div>
        </div>
</div>
     <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo asset_url();?>js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo asset_url();?>js/bootstrap.min.js"></script>

      <script src="<?php echo asset_url();?>js/classie.js"></script>
    <script src="<?php echo asset_url();?>js/cbpAnimatedHeader.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo asset_url();?>js/agency.js"></script>
		<script type="text/javascript" src="<?php echo asset_url();?>js/custom/tooltip.js"></script>
    </body>

</html>