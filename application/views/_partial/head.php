<!DOCTYPE html>
<html lang="en" class="{theme}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta name="description" content="">
		<meta name="author" content="">
		
		<title>Thiran - {title}</title>
		<script src="<?php echo base_url('assets/dist/backend.min.js'); ?>"></script>
                <script src="<?php echo base_url('assets/dist/appcustom.js'); ?>"></script>
                 <script src="<?php echo base_url('assets/js/bootstrap-editable.js');?>"></script>
                 <script src="<?php echo base_url('assets/dist/x-editable.js'); ?>"></script>
                  <!-- InputMask -->
        <script src="<?php echo base_url('assets/dist/input-mask/jquery.inputmask.js');?>"></script>
        <script src="<?php echo base_url('assets/dist/input-mask/jquery.inputmask.date.extensions.js');?>"></script>
        <script src="<?php echo base_url('assets/dist/input-mask/jquery.inputmask.extensions.js');?>"></script>
         <!-- DateRange -->
        <script src="<?php echo base_url('assets/dist/date_range_picker/tether.min.js');?>"></script>
       <script src="<?php echo base_url('assets/dist/date_range_picker/datePicker.js');?>"></script>
                <script type="text/javascript" src="<?php echo base_url('assets/dist/pjax-standalone.js');?>"></script> 
	<script type='text/javascript'>
		// Ensure console is defined
		if(typeof console === 'undefined') console = {"log":function(m){}};

		// PJAX links!
		pjax.connect({
			'container': 'content',
			'success': function(event){
				var url = (typeof event.data !== 'undefined') ? event.data.url : '';
				console.log("Successfully loaded "+ url);
			},
			'error': function(event){
                            console.log(event);
				var url = (typeof event.data !== 'undefined') ? event.data.url : '';
				console.log("Could not load "+ url);
			},
			'ready': function(){
				console.log("PJAX loaded!");
			},
                        'beforeSend': function(){
                              var base_url = window.location.origin;
                                  $.ajax({
                                type:"GET",
                                url:base_url+"/Thiran/welcome/session_auth",
                                dataType: "json",
                                success: function(data){
                            if(data.login==="invalid"){
                           console.log("leaving "+data.login);
                            window.location.href=base_url+"/Thiran/welcome"; 
                             }
                              else{
                              console.log("sending "+data.login);
                          }
                      }
                       });
                        },
                        'complete':function(){
                            var base_url = window.location.origin;
                            var js_script = document.createElement('script');
                            var x_js_script = document.createElement('script');
                            js_script.type = "text/javascript";
                            js_script.src = base_url+"/Thiran/assets/dist/jcrop/crop-avatar.js";
                            js_script.async = true;
                            document.getElementsByTagName('head')[0].appendChild(js_script); 
                             x_js_script.type = "text/javascript";
                             x_js_script.src = base_url+"/Thiran/assets/dist/x-editable.js";
                             x_js_script.async = true;
                            document.getElementsByTagName('head')[0].appendChild(x_js_script);
                        }
		});
		// pjax.connect('content', 'pjaxer');
		// pjax.connect('content');
		// pjax.connect();

	</script>
        
		<?php
			// Grocery CRUD scripts
			if ( !empty($crud_data) )
			{
				foreach ($crud_data->css_files as $file)
					echo link_tag($file).PHP_EOL;

				foreach ($crud_data->js_files as $file)
					echo "<script src='$file'></script>".PHP_EOL;
			}
		?>
		
		<link href="<?php echo base_url('assets/dist/backend.min.css'); ?>" rel="stylesheet">
                <link href="<?php echo base_url('assets/dist/appcustom.css'); ?>" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/jcrop/cropper.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-editable.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/jcrop/crop-avatar.css">
                <link href="<?php echo base_url('assets/dist/date_range_picker/picker.css'); ?>" rel="stylesheet">
                <link href="http://fonts.googleapis.com/css?family=Raleway:400" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
	</head>

	<body class="{theme}">
	