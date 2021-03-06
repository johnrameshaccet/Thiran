<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thiran | Social signup</title>

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
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Thiran -strength & grace</a>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
 <img src="<?php echo base_url(); ?>assets/img/header-bg.jpg" class="bg">
    <!-- Header -->
    <header>
        <div class="container">
            <div style="padding-top: 119px;">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<h3>Please fill in your details.</h3>
			<p>We'll be using this to complete basic information to join Thiran!</p>
			<br>
                        <div class="alert alert-danger fade in" style="display:none;" id="error_signup">
                            <button style="margin-top:0px" type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <strong>Please fill the fields completely.</strong> College, Mobile and Year passout should be valid.
                                
			</div>
			<?php echo form_open('social/signup',array('class'=>'form-horizontal','role'=>'form')); ?>
                        <div class="form-group">
				<label for="fname" class="col-lg-2 control-label">First Name</label>
				<div class="col-lg-10">
                                    <input readonly class="form-control" name="first_name" value="<?php if(!empty($info)){ echo $info['first_name'];} ?>">
				</div>
			</div>
                        <div class="form-group">
				<label for="lname" class="col-lg-2 control-label">Last Name</label>
				<div class="col-lg-10">
                                    <input readonly class="form-control" name="last_name" value="<?php if(!empty($info)){echo $info['last_name'];} ?>">
				</div>
			</div>
                         <div class="form-group">
				<label for="email" class="col-lg-2 control-label">Email</label>
				<div class="col-lg-10">
                                    <input readonly class="form-control" name="email" value="<?php if(!empty($info)){ echo $info['email'];} ?>">
				</div>
			</div>
                        <input type="hidden" name="uid" value="<?php if(!empty($info)){ echo $info['uid'];} ?>">
                        <div class="form-group">
				<label for="mobile" class="col-lg-2 control-label">Mobile</label>
				<div class="col-lg-10">
					<input type="text" class="form-control" id="mobile" name="phone_no" placeholder="Your mobile number">
				</div>
			</div>
                        <div class="form-group"> <label for="user_type" class="col-lg-2 control-label">User type</label>
							<div class="col-lg-10">	
                                                      <select id="user_type" name="role" class="form-control" onChange='checkForPassOut(this)'>
                                                                <option value="0">Select-one</option>
                                                                <option value="AL">Alumni</option>
                                                                <option value="ST">Student</option>
                                                                <option value="RE">Recruiter</option>
                                                                 </select>
								</div>
                        </div>
			<div id ="div_college" style="display:none" class="form-group">
				<label for="college_id" class="col-lg-2 control-label">College</label>
				<div class="col-lg-10">
					 <select id="college_id" name="college_id" class="form-control">
                                             <option value="0">select colg</option>
                                            <option value="ACCET">ACCET</option>
                                            <option value="TC">TC</option>
                                        </select>
				</div>
			</div>
          <div id ="div_ypassout"style="display:none" class="form-group"> 
              <label for="ypassout" class="col-lg-2 control-label">Year of Passout </label>
				<div class="col-lg-10">				
                   <input type="text" class="form-control" name="ypassout" id="ypassout" />
                                </div></div>
                             <div id ="div_company"style="display:none" class="form-group">
                                 <label for="company_name" class="col-lg-2 control-label">Company Name </label>
							<div class="col-lg-10">	
                                <input type="text" class="form-control" name="company_name" id="company_name" />
							</div>
                             </div>
			 
			<div class="form-group">
				<div class="col-lg-offset-2 col-lg-10">
					<button type="submit" id="signup_submit" class="btn btn-lg btn-info">Start <i class="glyphicon glyphicon-chevron-right"></i></button>
				</div>
			</div>
			<?php echo form_hidden('signup','true'); ?>
			<?php echo form_close(); ?>			
		</div>
	</div>
</div>
        </div>
    </header>
      <!-- jQuery Version 1.11.0 -->
<script src="<?php echo asset_url();?>js/jquery-1.11.0.js"></script>
<script src="<?php echo asset_url();?>js/signup.js"></script>

   
</body>

</html>