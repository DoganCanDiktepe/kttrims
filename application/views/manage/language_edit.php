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
                            <li><a href="<?php echo base_url('manage/language/'); ?>" class="active">DİL SEÇENEKLERİ</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid container-fixed-lg">
                <div class="panel panel-transparent">
                    <div class="panel-heading">
                        <div class="panel-title"><?php echo $detail['name']; ?></div>
                    </div>
                    <div class="panel-body">
                        <form class="" method="POST" role="form">
                            <?php if ($detail['id']) { ?>
                                <input type="hidden" name="id" value="<?php echo $detail['id']; ?>">
                            <?php } ?>

                            <div class="form-group text-right">
                                <input type="checkbox" class="pull-right switch" id="activate" name="activate"
                                       value="<?php echo ($detail['activate']) ? 1 : 0; ?>" data-size="small"
                                       data-init-plugin="switchery"
                                    <?php echo ($detail['activate']) ? 'checked="checked"' : ''; ?> />
                            </div>

                            <div class="form-group form-group-default required ">
                                <label>Başlık</label>
                                <input type="text" name="name" value="<?php echo $detail['name']; ?>"
                                       class="form-control" required>
                            </div>

                            <div class="form-group form-group-default required ">
                                <label>URL</label>
                                <input type="text" name="url" value="<?php echo $detail['url']; ?>"
                                       class="form-control" required>
                            </div>
                            <button class="btn btn-success" type="submit">Kaydet</button>
                            <a href="<?php echo base_url('manage/language'); ?>" class="btn btn-danger">Vazgeç</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('bundle/manage/dist/manage.js'); ?>"></script>
</body>
</html>