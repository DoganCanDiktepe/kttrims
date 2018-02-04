<nav class="page-sidebar" data-pages="sidebar">
    <div class="sidebar-header">
        <img src="<?php echo base_url('bundle/images/logo.svg') ?>" alt="logo" class="brand"
             data-src="<?php echo base_url('bundle/images/logo.svg') ?>"
             data-src-retina="<?php echo base_url('bundle/images/logo.svg') ?>" width="78">
    </div>
    <div class="sidebar-menu m-t-30">
        <ul class="menu-items">
            <?php
            /*
            <li class="">
                <a href="<?php echo base_url('manage/dashboard/'); ?>"><span class="title">Dashboard</span></a>
                <span class="icon-thumbnail"><i class="pg-home"></i></span>
            </li>
            */ ?>
            <?php /* <li class="">
                <a href="<?php echo base_url('manage/about/');?>"><span class="title">Kurumsal</span></a>
                <span class="icon-thumbnail"><i class="pg-bag"></i></span>
            </li> */ ?>
            <li class="">
                <a href="<?php echo base_url('manage/category/'); ?>"><span class="title">Kategori</span></a>
                <span class="icon-thumbnail"><i class="pg-menu_lv"></i></span>
            </li>
            <li class="">
                <a href="<?php echo base_url('manage/product/'); ?>"><span class="title">Ürünler</span></a>
                <span class="icon-thumbnail"><i class="pg-plus"></i></span>
            </li>
            <li class="">
                <a href="<?php echo base_url('manage/referance/'); ?>"><span class="title">Referanslar</span></a>
                <span class="icon-thumbnail"><i class="pg-layouts"></i></span>
            </li>
            <li class="">
                <a href="<?php echo base_url('manage/subscribe/'); ?>"><span class="title">Subscribe</span></a>
                <span class="icon-thumbnail"><i class="fa fa-newspaper-o"></i></span>
            </li>
            <li class="">
                <a href="<?php echo base_url('manage/contact/'); ?>"><span class="title">İletişim</span></a>
                <span class="icon-thumbnail"><i class="pg-mail"></i></span>
            </li>
            <?php /* <li class="">
                <a href="<?php echo base_url('manage/language/'); ?>"><span class="title">Dil Seçenekleri</span></a>
                <span class="icon-thumbnail"><i class="pg-layouts"></i></span>
            </li> */ ?>
        </ul>
    </div>
</nav>