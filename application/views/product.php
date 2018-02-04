<!DOCTYPE html>
<html lang="en">
<head>

    <?php include("inc/head.php"); ?>

    <?php if (count($categoryDetail)) { ?>
        <title><?php echo (!empty($categoryDetail['meta_title'])) ? $categoryDetail['meta_title'] : $categoryDetail['title']; ?></title>
        <meta name="description" content="<?php echo $categoryDetail['meta_description']; ?>">
        <meta name="keywords" content="<?php echo $categoryDetail['meta_keywords']; ?>">
    <?php } ?>

</head>
<body>

<?php include("inc/mobile-menu.php"); ?>

<div class="wrapper">
    <div class="wrapper-inner">

        <?php include("inc/header.php"); ?>

        <div class="content clearfix">

            <?php if (count($categoryDetail)) { ?>

                <section class="section-block featured-media tm-slider-parallax-container">
                    <div class="tm-slider-container full-width-slider" data-parallax data-parallax-fade-out
                         data-animation="slide" data-scale-under="1140" data-scale-min-height="300">
                        <ul class="tms-slides">
                            <li class="tms-slide" data-image data-force-fit data-overlay-bkg-color="#333334"
                                data-overlay-bkg-opacity="0.7">
                                <div class="tms-content">
                                    <div class="tms-content-inner center">
                                        <div class="row">
                                            <div class="column width-12 mt-60">
                                                <h1 class="tms-caption title-large color-white all-caps fw-300"
                                                    data-animate-in="preset:slideInUpShort;duration:1000ms;"
                                                    data-no-scale>
                                                    <?php echo $categoryDetail['title']; ?>
                                                </h1>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                                if ($categoryDetail['picture']) {
                                    $categoryDetail['picture'] = json_decode($categoryDetail['picture'], true);
                                    $categoryDetail['picture'] = end($categoryDetail['picture']);
                                } else {
                                    $categoryDetail['picture'] = '';
                                }
                                ?>
                                <img
                                    data-src="<?php echo base_url(UPLOAD_RESIZE . $categoryDetail['picture']['attach_file_name']); ?>"
                                    src="<?php echo base_url('bundle/images/blank.png') ?>" alt=""/>
                            </li>
                        </ul>
                    </div>
                </section>

                <div class="section-block pb-0">
                    <div class="row">
                        <div class="column width-8 offset-2 center">
                            <p class="fw-300 fs-20"><?php echo $categoryDetail['short_description']; ?></p>
                        </div>
                        <div class="column width-10 offset-1">
                            <div class="row grid">

                                <?php
                                foreach ($productList as $k => $v) {
                                    $v['picture'] = json_decode($v['picture'], true);
                                    $firstImage = reset($v['picture']);
                                    ?>
                                    <figure class="thumbnails horizon"
                                            data-animate-in="preset:slideInUpShort;duration:1000ms;"
                                            data-threshold="0.3">
                                        <div class="box">
                                            <div class="img"
                                                 style="background-image:url(<?php echo base_url(UPLOAD_RESIZE . $firstImage['attach_file_name']); ?>)"></div>
                                            <div class="content-info">
                                                <p>
                                                    <?php echo $v['short_description']; ?>
                                                </p>
                                                <span>View <br/> Gallery</span>
                                            </div>
                                        </div>
                                        <h2><?php echo $v['title']; ?></h2>


                                        <a class="overlay-link lightbox-link"
                                           href="<?php echo base_url(UPLOAD_RESIZE . $firstImage['attach_file_name']); ?>"
                                           data-caption="<?php echo $v['title']; ?>"
                                           data-group="<?php echo $v['seoUrl'] ?>" data-lightbox-animation="fadeIn">View
                                            Gallery</a>


                                        <div class="hide-gallery">
                                            <?php
                                            foreach ($v['picture'] as $pk => $pv) {
                                                if ($pv['attach_file_name'] != $firstImage['attach_file_name']) {
                                                    ?>
                                                    <a class="overlay-link lightbox-link"
                                                       data-group="<?php echo $v['seoUrl'] ?>"
                                                       data-caption="<?php echo $v['title'] ?>"
                                                       href="<?php echo base_url(UPLOAD_RESIZE . $pv['attach_file_name']); ?>"
                                                       data-lightbox-animation="fadeIn"></a>
                                                <?php }
                                            } ?>
                                        </div>
                                    </figure>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>


            <?php } else { ?>

                <div class="section-block pt-0" style="background:#000;height:30px;"></div>

                <div class="section-block pt-0 pb-0">
                    <div class="row">
                        <div class="column width-10 offset-1">
                            <div class="row grid">
                                <?php
                                foreach ($categoryList as $clk => $clv) {
                                    $clv['picture'] = json_decode($clv['picture'], true);
                                    $clv['picture'] = reset($clv['picture']);
                                    ?>
                                    <figure class="thumbnails horizon"
                                            data-animate-in="preset:slideInUpShort;duration:1000ms;"
                                            data-threshold="0.3">

                                        <div class="box">
                                            <div class="img"
                                                 style="background-image:url(<?php echo base_url(UPLOAD_RESIZE . $clv['picture']['attach_file_name']); ?>)"></div>
                                            <div class="content-info">
                                                <p>
                                                    <?php echo $clv['short_description']; ?>
                                                </p>
                                                <span>View <br/> Gallery</span>
                                            </div>
                                        </div>
                                        <h2><?php echo $clv['title']; ?></h2>
                                        <a href="<?php echo base_url($lang['url'].'/product/'.$clv['seoUrl']);?>"></a>
                                    </figure>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>

            <?php include("inc/brands-slider.php"); ?>

            <?php include("inc/certificate.php"); ?>

        </div>

        <?php include("inc/footer.php"); ?>

    </div>
</div>

<?php include("inc/js.php"); ?>

</body>
</html>