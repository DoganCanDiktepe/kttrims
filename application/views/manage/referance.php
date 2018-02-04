<!DOCTYPE html>
<html>
<head>
    <?php include "inc/head.php"; ?>
</head>
<body class="fixed-header ">

<?php include "inc/sidebar.php"; ?>


<!-- START PAGE-CONTAINER -->
<div class="page-container ">

    <?php include "inc/header.php"; ?>
    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">
            <!-- START JUMBOTRON -->
            <div class="jumbotron" data-pages="parallax">
                <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
                    <div class="inner">
                        <!-- START BREADCRUMB -->
                        <ul class="breadcrumb">
                            <li>
                                <p>SAYFA</p>
                            </li>
                            <li><a href="<?php echo base_url('manage/referance/');?>" class="active">REFERANSLAR</a>
                            </li>
                        </ul>
                        <!-- END BREADCRUMB -->
                    </div>
                </div>
            </div>
            <div class="container-fluid container-fixed-lg bg-white">
                <div class="panel panel-transparent">
                    <div class="panel-body">
                        <a href="<?php echo base_url('manage/referance/add/'); ?>" class="btn btn-info pull-right"><i
                                class="fa fa-plus"></i></a>
                        <div class="clearfix"></div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="basicTable">
                                <thead>
                                <tr>
                                    <th style="width:20%">ID</th>
                                    <th style="width:10%">Görsel</th>
                                    <th style="width:29%">Sıralama</th>
                                    <th style="width:15%">Son Günceleme</th>
                                    <th style="width:5%"></th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                foreach ($list as $k => $v) {
	                                if ($v['picture']) {
		                                $v['picture'] = json_decode($v['picture'],true);
		                                $v['picture'] = end($v['picture']);
		                                $v['picture'] = '<img src="'.base_url(UPLOAD_RESIZE).$v['picture']['attach_file_name'].'" style="width:50px;" />';
	                                }
                                    ?>
                                    <tr>
                                        <td class="v-align-middle"><?php echo $v['id']; ?></td>
                                        <td class="v-align-middle"><?php echo $v['picture']; ?></td>
                                        <td class="v-align-middle"><?php echo $v['sort']; ?></td>
                                        <td class="v-align-middle"><?php echo $v['update_at']; ?></td>
                                        <td class="v-align-middle">
                                            <a href="<?php echo base_url('manage/referance/edit/' . $v['id']); ?>"
                                               class="btn"><i class="fa fa-edit"></i></a>
                                        </td>
                                        <td class="v-align-middle"><a
                                                href="<?php echo base_url('manage/referance/remove/' . $v['id']); ?>"
                                                class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
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