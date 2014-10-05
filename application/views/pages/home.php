
<div class="row">

	<div class="col-md-4">

		<?php echo box_open('Welcome!'); ?>
			<p>To get the most out of Thiran start with our 2 minute tour. </p>
                        <p><a href="#" class="btn btn-primary">Start Tour</a> <a class="btn btn-default">No Thanks</a></p>
		<?php echo box_close('Have a nice day.'); ?>

		<?php echo box_open('Shortcuts'); ?>
			<?php if ($user['role']=='admin') echo app_btn('users', 'Backend', $url = 'admin/backend_user', $badge = 2); ?>
			<?php echo app_btn('user', 'Profile', $url = 'user'); ?>
			<?php echo app_btn('info', 'Account', $url = 'account'); ?>
			<?php echo app_btn('sign-out', 'Logout', $url = 'account/logout'); ?>
		<?php echo box_close(); ?>

	</div>

	<?php if ($user['role']=='admin') { ?>
	<div class="col-md-4">
		<?php echo small_box('aqua', 2, 'Backend Users', 'users', 'admin/backend_user'); ?>
	</div>
	<?php } ?>

	<div class="col-md-4">
		<?php echo small_box('yellow', 0, 'Frontend Users', 'users', 'user'); ?>
	</div>

</div>
