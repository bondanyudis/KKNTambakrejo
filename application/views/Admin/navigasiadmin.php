<div class="row">
	<div class="col-md-12">
		<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
			<div class="navbar-header">
				<a class="navbar-brand" href="">Selamat Datang  <?php print_r($this->session->userdata['username']);?></a>
			</div>
			<div class="pull-rightaka" style="float: right; margin-top: 9px; margin-right: 35px;">
				<a class="btn btn-danger" href="<?php echo base_url('index.php/C_login/Logout');?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
			</div>
		</div>