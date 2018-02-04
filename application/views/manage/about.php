<!DOCTYPE html>
<html>
<head>
    <?php include "inc/head.php"; ?>
</head>
<body class="fixed-header ">

<?php include "inc/sidebar.php"; ?>

<div class="page-container ">
    <?php include "inc/header.php"; ?>
    <div class="page-content-wrapper ">
        <div class="content ">
            <div class="jumbotron" data-pages="parallax">
                <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
                    <div class="inner">
                        <ul class="breadcrumb">
                            <li>
                                <p>Sayfa</p>
                            </li>
                            <li><a href="<?php echo base_url('manage/about/'); ?>" class="active">KURUMSAL</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid container-fixed-lg bg-white">
                <div class="panel panel-transparent">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover" id="basicTable">
                                <thead>
                                <tr>
                                    <th style="width:20%">ID</th>
                                    <th style="width:20%">Görsel</th>
                                    <th style="width:29%">Başlık</th>
                                    <th style="width:15%">Son Günceleme</th>
                                    <th style="width:5%"></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($list as $k => $v) {
                                    ?>
                                    <tr>
                                        <td class="v-align-middle ">
                                            <p><?php echo $v['id']; ?></p>
                                        </td>
                                        <td class="v-align-middle">
                                            <div class="thumbnail-wrapper d48 circular b-white b-a b-white">
                                                <img width="30" height="30"
                                                     data-src-retina="<?php echo base_url('upload/' . $v['picture']) ?>"
                                                     data-src="<?php echo base_url('upload/' . $v['picture']) ?>"
                                                     alt=""
                                                     src="<?php echo base_url('upload/' . $v['picture']) ?>">
                                        </td>
                                        <td class="v-align-middle">
                                            <p><?php echo $v['title']; ?></p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p><?php echo $v['update_at']; ?></p>
                                        </td>
                                        <td class="v-align-middle">
                                            <a href="<?php echo base_url('manage/about/edit/' . $v['id']); ?>"
                                               class="btn"><i class="fa fa-edit"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('bundle/manage/dist/manage.js'); ?>"></script>
</body>
</html>