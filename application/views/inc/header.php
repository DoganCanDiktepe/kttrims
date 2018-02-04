<header class="header with-shadow header-absolute header-fixed-on-mobile header-transparent" data-helper-in-threshold="300" data-helper-out-threshold="500"  data-sticky-threshold="300" data-bkg-threshold="300" data-compact-threshold="300">
	<div class="header-inner">
		<div class="row nav-bar">
			<div class="column width-12 nav-bar-inner">
				<div class="logo">
					<div class="logo-inner">
						<a href="<?php echo base_url($lang['url']);?>"><img src="<?php echo base_url('/bundle/images/logo-dark.svg')?>" alt="KT Trims &amp; Accessories" /></a>
						<a href="<?php echo base_url($lang['url']);?>"><img src="<?php echo base_url('/bundle/images/logo.svg')?>" alt="KT Trims &amp; Accessories" /></a>
					</div>
				</div>
				<nav class="navigation nav-block secondary-navigation nav-right">
					<ul>
						<li class="aux-navigation hide">
							<!-- Aux Navigation -->
							<a href="#" class="navigation-show side-nav-show nav-icon">
								<span class="icon-menu"></span>
							</a>
						</li>
					</ul>
				</nav>
				<nav class="navigation nav-block primary-navigation nav-right">
					<ul>

						<?php include "nav.php"; ?>
						
						<li>
							<div class="v-align-middle">
								<a href="<?php echo base_url($lang['url'].'/'.q('contact_url'));?>" class="button no-label-on-mobile small no-margin-bottom hide-on-mobile"><?php echo q('contact_title');?></a>
							</div>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>