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
                                <p>Pages</p>
                            </li>
                            <li><a href="#" class="active">KATEGORİLER</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid container-fixed-lg bg-white">
                <div class="panel panel-transparent">
                    <div class="panel-body">
                        <a href="<?php echo base_url('manage/category/add/'); ?>" class="btn btn-info pull-right"><i
                                    class="fa fa-plus"></i></a>
                        <div class="clearfix"></div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="basicTable">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Görsel</th>
                                    <th>Başlık</th>
                                    <th>Son Günceleme</th>
                                    <th style="width:15px;"></th>
                                    <th style="width:15px;"></th>
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
                                        <td class="v-align-middle"><?php echo $v['title']; ?></td>
                                        <td class="v-align-middle"><?php echo $v['update_at']; ?></td>
                                        <td class="v-align-middle">
                                            <a href="<?php echo base_url('manage/category/edit/'.$v['id']); ?>"
                                               class="btn"><i class="fa fa-edit"></i></a>
                                        </td>
                                        <td class="v-align-middle"><a
                                                    href="<?php echo base_url('manage/category/remove/'.$v['id']); ?>"
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

    <script src="<?php echo base_url('bundle/manage/dist/manage.js'); ?>"></script>
</body>
</html>