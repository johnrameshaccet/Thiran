<?php $this->load->view('_partial/head'); ?>

	<?php $this->load->view('_partial/header'); ?>

	<div class="wrapper row-offcanvas row-offcanvas-left">

		<!-- Left side column. contains the logo and sidebar -->
		<aside class="left-side sidebar-offcanvas">
			<section class="sidebar">
				<div class="user-panel">
                                     <div class="pull-left image">
                            <img src="<?php if(!empty($profile)){ echo $profile['photo'];} ?>" class="img-circle" alt="User Image" />
                                     </div>
					<div class="pull-left info">
						<p>Hello, <?php echo $user['first_name']; ?></p>
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>
                             <!-- search form -->
                    <form action="#" method="get" class="sidebar-form">
                        <div class="input-group">
                            <input type="text" name="q" class="form-control" placeholder="Search..."/>
                            <span class="input-group-btn">
                                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                            </span>
                        </div>
                    </form>
                    <!-- /.search form -->
				<?php $this->load->view('_partial/menu'); ?>
			</section>
		</aside>
                
		<!-- Right side column. Contains the navbar and content of the page -->
		<aside id="content" class="right-side">
			<section class="content-header">
				<h1>{title}</h1>
				<?php $this->load->view('_partial/breadcrumb'); ?>
			</section>			
			<section class="content">
				{body}
				<?php $this->load->view('_partial/back'); ?>
			</section>
		</aside>

	</div>

<?php $this->load->view('_partial/foot'); ?>