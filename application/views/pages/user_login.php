<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thiran | User Login</title>
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
    <link href="http://fonts.googleapis.com/css?family=Raleway:400" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <a class="navbar-brand page-scroll" href="<?php echo base_url(); ?>">THIRAN</a>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
    <img src="<?php echo base_url(); ?>assets/img/header-bg.jpg" class="bg">
    <!-- Header -->
    <header>
        <div class="container">
            <div style="padding-top: 150px;">
	<div class="row">
<div class="col-lg-4 col-lg-offset-4 col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 login">
    <div class="col-xs-12 well text-center">
         <?php echo alert_box(); ?>
        <!-- Login Image -->
        <img src="<?php echo asset_url();?>img/user.png" alt="User" class="img-circle" width="150" title="User"/>
        <br><br>
        <!-- Login Form -->
        <?php echo form_open('welcome/login_t'); ?>

                <!-- Code for username -->

                <div class="input-group">
                   <span class="input-group-btn">
                                <pre class="btn btn-default"><i class="fa fa-user"></i></pre>
                        </span><input placeholder="Email" type="email" class="form-control"  required oninvalid="this.setCustomValidity('Enter email Here')" oninput="setCustomValidity('')"  name="email" id="email" />
                </div>
                 <label for="email" class="err"><?php echo form_error('email'); ?></label>
                <!-- Code for password -->

                <div class="input-group" style="margin-top: 3px">
                <span class="input-group-btn">
                                <pre class="btn btn-default"><i class="fa fa-lock"></i></pre>
                        </span><input type="password"  required oninvalid="this.setCustomValidity('Enter password Here')" oninput="setCustomValidity('')"  name="password" id="password" class="form-control" placeholder="Password" />

                </div>
                <label for="password" class="err"><?php echo form_error('password'); ?></label>
                    <?php echo form_hidden('ulogin','true'); ?>
                <!-- Login Submit-->
                <div style="padding-top:2px;padding-bottom: 3px">
               <input type="submit" class="col-xs-6 btn btn-primary btn-flat" name="login" value="Login" />
                </div>
			<?php echo form_close(); ?>
             
                <a href="#" class="col-xs-6" style="color:rgba(9, 65, 184, 0.86); text-align: center; white-space: nowrap"> Forgot password?</a>
      
        <!-- Signup page link for other's -->  
        <div id="account-signup-divider" class="shared-divider">
						<div class="shared-divider-label">
							<span>or</span>
						</div>
					</div> 
         <span style="color: #222">Don't have account?</span><a href="signup_t" style="color:rgba(9, 65, 184, 0.86);"> Sign Up here</a>
           <div id="account-signup-divider" class="share-divider">
						<div class="shared-divider-label">
							<span>Sign in Through</span>
						</div>
					</div> 
  <ul class="social-icons">
         
                <li><a href="<?php echo base_url(); ?>social/session/facebook" data-original-title="Facebook" class="rounded-x social_facebook"></a></li>
                <li><a href="<?php echo base_url(); ?>social/session/google" data-original-title="Google Plus" class="rounded-x social_googleplus"></a></li>
                <li><a href="#" data-original-title="Linkedin" class="rounded-x social_linkedin"></a></li>
          
                        </ul>
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