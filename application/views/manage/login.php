<!DOCTYPE html>
<html>
<head>
	<?php include "inc/head.php";?>
</head>
<body class="fixed-header ">

	<div class="login-wrapper ">
		<!-- START Login Background Pic Wrapper-->
		<div class="bg-pic">
			<!-- START Background Pic-->
			<img src="<?php echo base_url('bundle/images/slider/denim-patches.jpg');?>" data-src="<?php echo base_url('bundle/images/slider/denim-patches.jpg');?>" data-src-retina="<?php echo base_url('bundle/images/slider/denim-patches.jpg');?>" alt="" class="lazy">
			<!-- END Background Pic-->
			<!-- START Background Caption-->
			<div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
				<h2 class="semi-bold text-white">KT Trims</h2>
				<p class="small">
					At KT Trims & Accessories, we have a diverse group of experts working collaboratively with global clients and business partners to custom manufacture and deliver the finest leather labels, trims and other accessories with safety and sustainability focus. Our in-house tannery has more than century of expertise in leather tanning, with the last three decades focused on reactive leathers mainly used in garment industry. Our state of the art label factory in Istanbul was established in 2014 and employs industry veterans in label design and manufacturing, with a capacity of 500,000 labels/day.
				</p>
			</div>
			<!-- END Background Caption-->
		</div>
		<!-- END Login Background Pic Wrapper-->
		<!-- START Login Right Container-->
		<div class="login-container bg-white">
			<div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">

				<img style="" src="<?php echo base_url('bundle/images/logo-dark.svg')?>" alt="logo" data-src="<?php echo base_url('bundle/images/logo-dark.svg')?>" data-src-retina="<?php echo base_url('bundle/images/logo-dark.svg')?>'">
				<!-- START Login Form -->
				<form id="login_form" class="p-t-15" role="form" method="POST" action="<?php echo base_url('manage/login/enter');?>">
					<!-- START Form Control-->
					<div class="form-group form-group-default">
						<label>E-mail</label>
						<div class="controls">
							<input type="text" name="email" placeholder="E-mail Adresi" class="form-control" required>
						</div>
					</div>
					<!-- END Form Control-->
					<!-- START Form Control-->
					<div class="form-group form-group-default">
						<label>Şifre</label>
						<div class="controls">
							<input type="password" class="form-control" name="password" placeholder="Credentials" required>
						</div>
					</div>
					<button class="btn btn-primary btn-cons m-t-10" type="submit">Giriş</button>
				</form>

			</div>
		</div>

	</div>




<script src="<?php echo base_url('bundle/manage/dist/manage.js');?>"></script>
</body>
</html>