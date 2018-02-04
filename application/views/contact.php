<!DOCTYPE html>
<html lang="en">
<head>

	<?php include("inc/head.php"); ?>
	<title>KT Trims &amp; Accessories</title>

</head>
<body>

	<?php include("inc/mobile-menu.php"); ?>

	<div class="wrapper">
		<div class="wrapper-inner">

			<?php include("inc/header.php"); ?>

			<div class="content clearfix">

				<?php include("inc/location.php"); ?>

				<section class="section-block replicable-content contact-2 pt-20">
					<div class="row">
						<div class="column width-12 center horizon" data-animate-in="preset:slideInUpShort;duration:900ms;delay:300ms;" data-threshold="0.5">
							<h1 class="all-caps mb-70 f-w-regular f-xxlarge"><?php echo q('stay_title');?></h1>
						</div>
						<div class="column width-8 offset-2 horizon" data-animate-in="preset:slideInUpShort;duration:900ms;delay:400ms;" data-threshold="0.5">
							<div class="contact-form-container">
								<form class="contact-form" method="post" novalidate>
									<div class="row">
										<div class="column width-6">
											<input type="text" name="fname" class="form-fname form-element xlarge" placeholder="<?php echo q('fullname');?>*" tabindex="1" required>
										</div>
										<div class="column width-6">
											<input type="email" name="email" class="form-email form-element xlarge" placeholder="<?php echo q('youremail');?>*" tabindex="2" required>
										</div>
										<div class="column width-6">
											<input type="text" name="phone" class="form-phone form-element xlarge" placeholder="<?php echo q('yourphone');?>" tabindex="3">
										</div>
										<div class="column width-6">
											<input type="text" name="subject" class="form-subject form-element xlarge" placeholder="<?php echo q('subject');?>" tabindex="4">
										</div>
										<div class="column width-6">
											<input type="text" name="honeypot" class="form-honeypot form-element xlarge">
										</div>
									</div>
									<div class="row">
										<div class="column width-12">
											<textarea name="message" class="form-message form-element xlarge" placeholder="<?php echo q('message');?>*" tabindex="6" required></textarea>
										</div>
										<div class="column width-12 right">
											<input type="submit" value="<?php echo q('submit');?>" class="form-submit button xlarge bkg-theme bkg-hover-green color-white color-hover-white all-caps">
										</div>
									</div>
								</form>
								<div class="form-response"></div>
							</div>
						</div>
					</div>
				</section>

				<?php include("inc/brands-slider.php"); ?>

				<?php include("inc/certificate.php"); ?>

			</div>

			<?php include("inc/footer.php"); ?>

		</div>
	</div>

	<?php include("inc/js.php"); ?>

</body>
</html>