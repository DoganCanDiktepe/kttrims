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
                            <li><a href="#" class="active">DİL SEÇENEKLERİ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid container-fixed-lg bg-white">
                <div class="panel panel-transparent">
                    <div class="panel-body">
                        <a href="<?php echo base_url('manage/language/add/'); ?>" class="btn btn-info pull-right"><i
                                    class="fa fa-plus"></i></a>
                        <div class="clearfix"></div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="basicTable">
                                <thead>
                                <tr>
                                    <th style="width:20%">ID</th>
                                    <th style="width:10%">Başlık</th>
                                    <th style="width:29%">URL</th>
                                    <th style="width:5%"></th>
                                    <th style="width:5%"></th>
                                </tr>
                                </thead>
                                <tbody>
								<?php foreach ($list as $k => $v) { ?>
                                    <tr>
                                        <td class="v-align-middle"><?php echo $v['id']; ?></td>
                                        <td class="v-align-middle"><?php echo $v['name']; ?></td>
                                        <td class="v-align-middle"><?php echo $v['url']; ?></td>
                                        <td class="v-align-middle">
                                            <a href="<?php echo base_url('manage/language/edit/'.$v['id']); ?>"
                                               class="btn"><i class="fa fa-edit"></i></a>
                                        </td>
                                        <td class="v-align-middle"><a
                                                    href="<?php echo base_url('manage/language/remove/'.$v['id']); ?>"
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