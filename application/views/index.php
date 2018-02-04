<!DOCTYPE html>
<html lang="en">
<head>

    <?php include "inc/head.php"; ?>
    <title>KT Trims &amp; Accessories</title>

</head>
<body class="home-page">

<?php include "inc/mobile-menu.php"; ?>

<div class="wrapper">
    <div class="wrapper-inner">

        <?php include "inc/header.php"; ?>

        <div class="content clearfix">

            <section class="section-block featured-media window-height tm-slider-parallax-container">
                <div class="tm-slider-container full-width-slider" data-parallax data-parallax-fade-out
                     data-animation="slide" data-scale-under="1140" data-scale-min-height="500">
                    <ul class="tms-slides">
                        <li class="tms-slide" data-video data-video-bkg data-mute-video data-overlay-bkg-color="#333334"
                            data-overlay-bkg-opacity="0.45">
                            <div class="tms-content">
                                <div class="tms-content-inner left">
                                    <div class="rows">
                                        <div class="column width-10 offset-1">
                                            <?php
                                            $x = 0;
                                            foreach ($category as $k => $v) {
                                                $x++;
                                                $x = ($x > 0 and $x < 9) ? '0' . $x : $x;
                                                ?>
                                                <div class="tms-caption"
                                                     data-animate-in="preset:slideInUpShort;duration:1000ms;delay:100ms;"
                                                     data-no-scale>
                                                    <div class="p-v-10 interactive-link">
                                                        <a href="<?php echo base_url($lang['url'].'/product/' . $v['seoUrl']); ?>"
                                                           data-id="<?php echo $v['seoUrl']; ?>">
                                                            <span class="labels"><?php echo $x; ?></span>
                                                            <h3 class="title-large color-white all-caps title"><?php echo $v['title']; ?></h3>
                                                        </a>
                                                    </div>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="background">
                                            <ul>
                                                <?php
                                                foreach ($category as $k => $v) {
                                                    $v['picture'] = json_decode($v['picture'], true);
                                                    $v['picture'] = end($v['picture']);
                                                    ?>
                                                    <li style="background-image:url(<?php echo base_url(UPLOAD_RESIZE . $v['picture']['attach_file_name']); ?>"
                                                        data-id="<?php echo $v['seoUrl']; ?>"></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tms-caption hide-on-mobile"
                                 data-animate-in="preset:slideInUpShort;duration:1000ms;delay:600ms;"
                                 data-x="center"
                                 data-y="bottom"
                                 data-offsety="50">
                                <a href="#features"
                                   class="icon-circled icon-down-open-mini medium scroll-link bkg-white color-theme no-margins"
                                   data-offset="-60"></a>
                            </div>
                            <img data-src="<?php echo base_url('/bundle/video/thumbnail.jpg') ?>" data-retina
                                 src="<?php echo base_url('/bundle/images/blank.png'); ?>" alt=""/>
                            <video poster="<?php echo base_url('/bundle/video/thumbnail.jpg') ?>" autoplay="" loop=""
                                   width="1000" height="565">
                                <source type="video/mp4" src="<?php echo base_url('/bundle/video/background.mp4') ?>">
                                <source type="video/webm" src="<?php echo base_url('/bundle/video/background.webm') ?>">
                            </video>
                        </li>
                    </ul>
                </div>
            </section>

            <section class="section-block pt-130 pb-130" id="features">
                <div class="row flex">
                    <div class="column width-5 push-5">
                        <div class="feature-image mb-mobile-50 horizon"
                             data-parallax="direction:horizontal;speed:0.05;">
                            <div class="feature-image-inner center-on-mobile horizon"
                                 data-animate-in="preset:slideInLeftShort;duration:500ms;" data-threshold="0.6">
                                <img src="<?php echo base_url('/bundle/images/generic/img-1.jpg'); ?>" alt="" title=""/>
                            </div>
                        </div>
                        <div class="feature-image feature-image-2 mb-mobile-50 horizon"
                             data-parallax="direction:horizontal;speed:-0.05;">
                            <div class="feature-image-inner center-on-mobile horizon"
                                 data-animate-in="preset:slideInRightShort;duration:500ms;" data-threshold="0.7">
                                <img src="<?php echo base_url('/bundle/images/generic/img-2.png') ?>" alt="" title=""/>
                            </div>
                        </div>
                    </div>
                    <div class="column width-7 pull-5 left">
                        <div class="feature-content">
                            <div class="feature-content-inner horizon center-on-mobile"
                                 data-animate-in="preset:slideInUpShort;duration:900ms;delay:300ms;"
                                 data-threshold="0.5">
                                <h3 class="mb-20 all-caps f-w-regular f-xlarge">WORLD'S BEST WASHABLE LEATHER
                                    LABELS</h3>
                                <p class="fs-20 fw-300">Stain-free, Chromium-free, hot wash safe, <br/> dry-clean safe
                                </p>
                                <a href="#" class="default-link all-caps" title="Read More">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section
                class="section-block-overflow mb-150 hero-5 hero-5-services-2 clear-height show-media-column-on-mobile bkg-grey-ultralight">
                <div class="media-column width-6">
                    <div class="feature-image-inner center-on-mobile horizon pt-100"
                         data-parallax="direction:vertical;speed:0.05;">
                        <img src="<?php echo base_url('/bundle/images/generic/showroom.jpg') ?>" class="horizon"
                             data-animate-in="preset:slideInUpShort;duration:900ms;delay:300ms;" data-threshold="0.5"/>
                    </div>
                    <div class="center-on-mobile blend horizon" data-parallax="direction:vertical;speed:-0.3;">
                        <img src="<?php echo base_url('/bundle/images/icon/yellow-circle.svg') ?>" class="horizon"
                             data-animate-in="preset:slideInUpShort;duration:900ms;delay:300ms;" data-threshold="0.5"/>
                    </div>
                </div>
                <div class="row">
                    <div class="column width-5 offset-7">
                        <div class="hero-content split-hero-content horizon"
                             data-animate-in="preset:slideInUpShort;duration:900ms;delay:500ms;" data-threshold="0.6">
                            <div class="hero-content-inner left">
                                <h3 class="mb-50 all-caps f-w-regular f-xlarge center">Showroom</h3>
                                <div class="tm-slider-container content-slider center-arrow pagination-none"
                                     data-animation="slide" data-scale-min-height="400" data-scale-under="960"
                                     data-width="1250" data-height="800">
                                    <ul class="tms-slides">
                                        <li class="tms-slide" data-image>
                                            <div class="thumbnail img-scale-in mb-0" data-hover-easing="easeInOut"
                                                 data-hover-speed="700" data-hover-bkg-color="#000000"
                                                 data-hover-bkg-opacity="0.6">
                                                <a class="overlay-link lightbox-link" data-group="showroom"
                                                   data-caption="Showroom"
                                                   data-image-url="<?php echo base_url('/bundle/images/showroom/1.jpg') ?>"
                                                   href="<?php echo base_url('/bundle/images/showroom/1.jpg') ?>"
                                                   data-lightbox-animation="fadeIn">
                                                    <div class="img"
                                                         style="background-image:url(<?php echo base_url('/bundle/images/showroom/1.jpg') ?>)"></div>
														<span class="overlay-info">
															<span>
																<span>
																	<i class="icon-plus"></i>
																</span>
															</span>
														</span>
                                                </a>
                                            </div>
                                        </li>
                                        <li class="tms-slide" data-image>
                                            <div class="thumbnail img-scale-in mb-0" data-hover-easing="easeInOut"
                                                 data-hover-speed="700" data-hover-bkg-color="#000000"
                                                 data-hover-bkg-opacity="0.6">
                                                <a class="overlay-link lightbox-link" data-group="showroom"
                                                   data-caption="Showroom"
                                                   data-image-url="<?php echo base_url('/bundle/images/showroom/2.jpg') ?>"
                                                   href="<?php echo base_url('/bundle/images/showroom/2.jpg') ?>"
                                                   data-lightbox-animation="fadeIn">
                                                    <div class="img"
                                                         style="background-image:url(<?php echo base_url('/bundle/images/showroom/2.jpg') ?>)"></div>
														<span class="overlay-info">
															<span>
																<span>
																	<i class="icon-plus"></i>
																</span>
															</span>
														</span>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php include("inc/brands-slider.php"); ?>

            <?php include("inc/location.php"); ?>

            <?php include("inc/certificate.php"); ?>

        </div>

        <?php include("inc/footer.php"); ?>

    </div>
</div>

<?php include("inc/js.php"); ?>

</body>
</html>