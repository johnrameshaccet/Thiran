
<header class="header">

	<a href="<?php echo site_url(); ?>" class="logo">
            Thiran <font style="font-size: small">-strength & grace</font>
	</a>

	<nav class="navbar navbar-static-top" role="navigation">
		<a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</a>
		<div class="navbar-right">
			<ul class="nav navbar-nav">
				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<i class="fa fa-user"></i>
                                                <span><?php echo $user['first_name']; ?>&nbsp;<?php echo $user['last_name']; ?>&nbsp;<i class="caret"></i></span>
					</a>
					<ul class="dropdown-menu">
						<li class="user-header bg-light-blue">
                                                    <img src="<?php echo asset_url(); ?>img/user.png" class="img-circle" alt="User Image" />
                                                    <p><?php echo $user['first_name']; ?>&nbsp;<?php echo $user['last_name']; ?></p>
						</li>
                                                 <!-- Menu Body -->
                                <li class="user-body">
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Followers</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Profile</a>
                                    </div>
                                    <div class="col-xs-4 text-center">
                                        <a href="#">Friends</a>
                                    </div>
                                </li>
						<li class="user-footer">
							<div class="pull-left">
								<a href="<?php echo site_url('account'); ?>" class="btn btn-default btn-flat">Account</a>
							</div>
							<div class="pull-right">
								<a href="<?php echo site_url('account/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>

</header>