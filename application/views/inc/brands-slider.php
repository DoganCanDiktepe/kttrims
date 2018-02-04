<?php $referanceList = referanceGetList();
if(count($referanceList)){
?>
<section class="section-block">
    <div class="row">
        <div class="column width-12 center horizon" data-animate-in="preset:slideInUpShort;duration:900ms;delay:300ms;"
             data-threshold="0.5">
            <h1 class="all-caps mb-70 f-w-regular f-xxlarge">SUPPLIER TO SOME OF THE <br/> WORLD'S MOST EXCLUSIVE BRANDS
            </h1>
        </div>
        <div class="column width-12 horizon" data-animate-in="preset:slideInUpShort;duration:900ms;delay:500ms;"
             data-threshold="0.6">
            <div class="tm-slider-container logo-slider" data-nav-dark data-nav-keyboard="false" data-auto-advance
                 data-auto-advance-interval="4000" data-progress-bar="false" data-pause-on-hover="false"
                 data-carousel-visible-slides="6">
                <ul class="tms-slides">
                    <?php
                    foreach ($referanceList as $k => $v) {
                        if ($v['picture']) {
                            $v['picture'] = json_decode($v['picture'], true);
                            $v['picture'] = reset($v['picture']);
                        }
                        ?>
                        <li class="tms-slide">
                            <div class="tms-content-scalable">
                                <img
                                    data-src="<?php echo base_url(UPLOAD_RESIZE . $v['picture']['attach_file_name']) ?>"
                                    src="<?php echo base_url(UPLOAD_RESIZE . $v['picture']['attach_file_name']) ?>"
                                    alt=""/>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php } ?>