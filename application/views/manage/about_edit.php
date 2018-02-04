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
                    <div class="panel-heading">
                        <div class="panel-title"><?php echo $detail['title']; ?></div>
                    </div>
                    <div class="panel-body">
                        <form class="" method="POST" role="form">
							<?php if ($detail['id']) { ?>
                                <input type = "hidden" name = "id" value = "<?php echo $detail['id']; ?>" >
							<?php } ?>
                            <div class="form-group ">
                                <label>Dil</label>
                                <select class="full-width" data-init-plugin="select2" name="lang_id">
                                    <option value="-1">Seçiniz</option>
			                        <?php foreach (langList() as $k => $v) { ?>
                                        <option <?php echo ($v['id'] == $detail['lang_id']) ? 'selected="selected"' : '';?> value="<?php echo $v['id']; ?>"><?php echo $v['name']; ?></option>
			                        <?php } ?>
                                </select>
                            </div>
                            <div class="form-group required fileinput-box">
                                <label>Görsel</label>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="col-xs-12 col-sm-3">
                                    <span class="btn btn-danger fileinput-button btn-block">
                                        Görsel Seç...
                                        <input class="fileUpload" type="file" name="files">
                                    </span>
                                    </div>
                                    <div class="col-xs-12 col-sm-9">
                                        <div class="progress m-t-15">
                                            <div class="progress-bar progress-bar-success"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="row">
                                    <div class="files filesoutPut">
										<?php
										if (count($detail['picture']) > 0) {
											$pictures = json_decode($detail['picture'], true);
											foreach ($pictures as $k => $v) {
												?>
                                                <div class="col-xs-4 col-sm-2 items"
                                                     data-img="<?php echo $v['attach_file_name']; ?>">
                                                    <img src="<?php echo base_url(
															UPLOAD_RESIZE
														).$v['attach_file_name']; ?>" class="img-responsive">
                                                    <a class="remove-picture"><i class="fa fa-trash"></i></a>
                                                </div>
											<?php }
										} ?>
                                    </div>
                                </div>
                                <input type="hidden" name="picture" value='<?php echo (count($detail['picture'])) ? $detail['picture'] : '';?>'/>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group form-group-default required ">
                                <label>Başlık</label>
                                <input type="text" name="title" value="<?php echo $detail['title']; ?>"
                                       class="form-control" required>
                            </div>
                            <div class="form-group">
                                <h5>Açıklama</h5>
                                <div class="summernote-wrapper">
                                    <div id="summernote" class="field1"><?php echo nl2br(
											$detail['description']
										); ?></div>
                                    <textarea name="description" class="hide" id="field2"><?php echo nl2br(
											$detail['description']
										); ?></textarea>
                                </div>
                            </div>
                            <button class="btn btn-success" type="submit">Kaydet</button>
                            <a href="<?php echo base_url('manage/about'); ?>" class="btn btn-danger">Vazgeç</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url('bundle/manage/dist/manage.js'); ?>"></script>
<script>
    $(function () {
        MODULE.Plugins.upload('manage/attachment/upload_files');
    });
</script>
</body>
</html>