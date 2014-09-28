<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thiran | User SignUp</title>
        
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
<form id="signup_t" name="signup_t" method="post">
								<div class="form-group">
                                                                    <label for="first_name" style="color: black">First Name</label>
									<input type="text" class="form-control" name="first_name" onBlur="isAlphapet_f()" id="first_name" /><span id="fname"></span>
								</div>
								<div class="form-group">
                                                                <label for="last_name" style="color: black">Last Name</label>
								
									<input type="text" class="form-control" name="last_name" onBlur="isAlphapet_l()" id="last_name" /><span id="lname"></span>
								</div>
                                                      
							        <div class="form-group"><label for="email" style="color: black">Email</label>
								
                                                                    <input type="email" class="form-control" onblur="emailvalid()" name="email" id="email" /><span id="email_id"></span>
								</div>
								
                                                            
                                                               <div class="form-group">  <label for="password" style="color: black">Password</label>
								
                                                                    <input type="password" class="form-control" name="password" onBlur='passwd()' id="password" /> <span id="pswd"></span>
								</div> 
                                                           <div class="form-group">       <label for="conf_password" style="color: black">Confirm Password</label>
								
                                                                    <input type="password" class="form-control" name="conf_password" onBlur='pass()' id="conf_password" /><span id="cfpswd"></span>
								</div>
								   <div class="form-group"> <label for="phone_no" style="color: black">Mobile</label>
								
                                                                    <input type="text" class="form-control" name="phone_no" id="phone_no" /> <span id="mobile"></span>
							</div>
								<div class="form-group"> <label for="user_type" style="color: black">User type</label>
								
                                                      <select id="user_type" name="role" class="form-control" onChange='checkForPassOut(this)'>
                                                                <option value="0">Select-one</option>
                                                                <option value="AL">Alumni</option>
                                                                <option value="ST">Student</option>
                                                                <option value="RE">Recruiter</option>
                                                                 </select>
								</div>
                              <div id ="div_college"style="display:none" class="form-group"> <label for="college_id" style="color: black">College</label>
								
                                                                 <select id="college_id" name="college_id" class="form-control">
                                                                <option value="0">select colg</option>
                                                                <option value="ACCET">ACCET</option>
                                                                <option value="TC">TC</option>
                                                                 </select>
								</div>
                                                          <div id ="div_ypassout"style="display:none" class="form-group"> <label for="ypassout" style="color: black">Year of Passout <?php echo form_error('ypassout'); ?></label>
								
                                                                    <input type="text" class="form-control" name="ypassout" id="ypassout" />
							</div>
                             <div id ="div_company"style="display:none" class="form-group"> <label for="company_name" style="color: black">Company Name </label>
								
                                                                    <input type="text" class="form-control" name="company_name" id="company_name" />
							</div>
                           
								<!-- Signup Submit-->
                                                                <input type="submit" id="register_submit" class="btn btn-primary btn-block" name='signup' value="Sign Up" />
							</form>
							<div id="account-signup-divider" class="shared-divider">
						<div class="shared-divider-label">
							<span>or</span>
						</div>
					</div>
                       <font style="color: background">Have an Account?</font>  <a style="color: #31b0d5" id="login_t" href='login_t'>Log In</a>
                   </div>		
</div>
</div>
        </div>
</div>
    </header>
     <!-- jQuery Version 1.11.0 -->
    <script src="<?php echo asset_url();?>js/jquery-1.11.0.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo asset_url();?>js/bootstrap.min.js"></script>
 <script src="<?php echo asset_url();?>js/signup.js"></script>
          
      <script src="<?php echo asset_url();?>js/classie.js"></script>
    <script src="<?php echo asset_url();?>js/cbpAnimatedHeader.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo asset_url();?>js/agency.js"></script>
    <script type="text/javascript" src="<?php echo asset_url();?>js/custom/tooltip.js"></script>
    </body>

</html>
