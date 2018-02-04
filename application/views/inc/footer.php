<footer class="footer footer-fixed">
	<div class="footer-top two-columns-on-tablet">
		<div class="row flex">
			<div class="column width-6">
				<div class="widget">
					<p class="mb-20"><?php echo q('ftText');?></p>
					<div class="newsletter-form-container">
						<form action="bundle/php/subscribe.php" method="post" novalidate>
							<div class="row mb-20">
								<div class="column width-12 left">
									<div class="field-wrapper">
										<input type="email" name="email" class="form-email form-element" placeholder="<?php echo q('emailadres');?>" tabindex="2" required>
										<button type="submit" class="form-submit button color-hover-white icon-plus"></button>
									</div>
								</div>
							</div>
							<input type="text" name="honeypot" class="form-honeypot form-element">
						</form>
					</div>
				</div>
			</div>
			<div class="column width-4 offset-2 right left-on-mobile">
				<div class="widget">
					<div class="pull-right">
						<p class="pull-left"><?php echo q('follow');?>:</p>
						<ul class="social-list list-horizontal pull-left">
							<li><a href="#" title="Facebook" target="_blank"><span class="icon-facebook"></span></a></li>
							<li><a href="#" title="Instagram" target="_blank"><span class="icon-instagram"></span></a></li>
							<li><a href="#" title="YouTube" target="_blank"><span class="icon-youtube"></span></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="row">
			<div class="column width-12">
				<div class="footer-bottom-inner center clear-float">
					<p class="copyright pull-left clear-float-on-mobile">
						&copy; 2017 KT Trims &amp; Accessroies. All rights reserved.
					</p>
					<p class="pull-right clear-float-on-mobile no-margins">
						<?php
							if($lang['url'] == 'en'){
								$langHref = '/lang/tr/';
								$langTitle = 'Türkçe';
							}else{
								$langHref = '/lang/en/';
								$langTitle = 'English';
							}
						?>
						<a href="<?php echo $langHref; ?>"><?php echo $langTitle;?></a>
						<a href="#" class="scroll-to-top" data-no-hide><?php echo q('backtop');?></a>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>