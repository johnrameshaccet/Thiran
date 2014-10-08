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
                <link href="<?php echo base_url('assets/dist/date_range_picker/picker.css'); ?>" rel="stylesheet">
                <link href="http://fonts.googleapis.com/css?family=Raleway:400" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
	</head>

	<body class="{theme}">
	