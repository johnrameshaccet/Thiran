<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Thiran</title>
        
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
<form id="signup_t" name="signup_t" method="post">
								<div class="form-group">
                                                                    <label for="first_name" style="color: black">First Name <span id="fname"></span></label>
									<input type="text" class="form-control" required oninvalid="this.setCustomValidity('Enter firstname Here')" oninput="setCustomValidity('')" name="first_name" id="first_name" />
								</div>
								<div class="form-group">
                                                                <label for="last_name" style="color: black">Last Name <span id="lname"></span></label>
								
									<input type="text" class="form-control" required oninvalid="this.setCustomValidity('Enter lastname Here')" oninput="setCustomValidity('')" name="last_name" id="last_name" />
								</div>
                                                      
							        <div class="form-group"><label for="email" style="color: black">Email <span id="email_id"></span></label>
								
                                                                    <input type="email" class="form-control" required oninvalid="this.setCustomValidity('Enter email Here')" oninput="setCustomValidity('')" name="email" id="email" />
								</div>
								
                                                            
                                                               <div class="form-group">  <label for="password" style="color: black">Password <span id="pswd"></span></label>
								
                                                                    <input type="password" class="form-control" required oninvalid="this.setCustomValidity('Enter passwd Here')" oninput="setCustomValidity('')" name="password" id="password" />
								</div> 
                                                           <div class="form-group">       <label for="conf_password" style="color: black">Confirm Password <span id="cfpswd"></span></label>
								
                                                                    <input type="password" class="form-control" required oninvalid="this.setCustomValidity('Enter confirm passwd Here')" oninput="setCustomValidity('')" name="conf_password" id="conf_password" />
								</div>
								   <div class="form-group"> <label for="phone_no" style="color: black">Mobile <span id="mobile"></span></label>
								
                                                                    <input type="text" class="form-control" required oninvalid="this.setCustomValidity('Enter year of phone no Here')" oninput="setCustomValidity('')" name="phone_no" id="phone_no" />
							</div>
								<div class="form-group"> <label for="user_type" style="color: black">User type</label>
								
                                                      <select id="user_type" required oninvalid="this.setCustomValidity('Pick one Here')" oninput="setCustomValidity('')"  name="user_type" class="form-control" onChange='checkForPassOut(this)'>
                                                                <option value="0">Select-one</option>
                                                                <option value="AL010">Alumni</option>
                                                                <option value="ST010">Student</option>
                                                                <option value="RE010">Recruiter</option>
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

          <script>
$(document).ready(function() {
        
 
$('#register_submit').click(function(e){
  e.preventDefault();
 
  $.ajax({
    url:"<?php echo base_url()?>welcome/signup",
    type:"post",
    data: $('#signup_t').serialize(),
    dataType: "json",
    success: function(result){
        $('#fname').html(result.first_name);
        $('#lname').html(result.last_name);
        $('#email_id').html(result.email);
        $('#pswd').html(result.password);
        $('#cfpswd').html(result.conf_password);
        $('#mobile').html(result.phone_no);
        
    }
  });
});


});
function checkForPassOut(node){
    if(node.value !== "RE010" && node.value !== "0" ){
        $("#div_ypassout")[0].style.display = "block";
        $("#div_college")[0].style.display = "block";
         $("#div_company")[0].style.display = "none";
    }
    else if(node.value==="RE010"){
        $("#div_company")[0].style.display = "block";
        $("#div_ypassout")[0].style.display = "none";
        $("#div_college")[0].style.display = "none";
    }
    else if(node.value==="0"){
        $("#div_company")[0].style.display = "none";
        $("#div_ypassout")[0].style.display = "none";
        $("#div_college")[0].style.display = "none";
    }
}
</script>
      <script src="<?php echo asset_url();?>js/classie.js"></script>
    <script src="<?php echo asset_url();?>js/cbpAnimatedHeader.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo asset_url();?>js/agency.js"></script>
    <script type="text/javascript" src="<?php echo asset_url();?>js/custom/tooltip.js"></script>
    </body>

</html>
