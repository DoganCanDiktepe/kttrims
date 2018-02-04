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
                            <li><a href="<?php echo base_url('manage/category/'); ?>" class="active">KATEGORİLER</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid container-fixed-lg">
                <div class="panel panel-transparent">
                    <div class="panel-heading">
                        <div class="panel-title"><?php echo $detail['title']; ?></div>
                    </div>
                    <div class="panel-body">
                        <form class="" method="POST" role="form">
							<?php if ($detail['id']) { ?>
                                <input type="hidden" name="id" value="<?php echo $detail['id']; ?>">
							<?php } ?>
                            <div class="form-group text-right">
                                <input type="checkbox" class="pull-right switch" id="active" name="active"
                                       value="<?php echo ($detail['active']) ? 1 : 0; ?>" data-size="small"
                                       data-init-plugin="switchery"
									<?php echo ($detail['active']) ? 'checked="checked"' : ''; ?> />
                            </div>
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
                                        if (!empty($detail['picture'])) {
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
                                       class="form-control" onkeyup="MODULE.General.seo($(this).val());" required>
                            </div>
                            <div class="form-group">
                                <label>Kısa Açıklama</label>
                                <textarea class="form-control" rows="6"
                                          name="short_description"><?php echo $detail['short_description']; ?></textarea>
                            </div>
                            <div class="form-group form-group-default required ">
                                <label>Sıralama</label>
                                <input type="text" name="sort" value="<?php echo $detail['sort']; ?>"
                                       class="form-control" required>
                            </div>

                            <div class="form-group form-group-default ">
                                <label>SeoUrl</label>
                                <input type="text" name="seoUrl" id="seoUrl" value="<?php echo $detail['seoUrl']; ?>"
                                       class="form-control">
                            </div>

                            <div class="form-group form-group-default">
                                <label>Meta Title</label>
                                <input type="text" name="meta_title" value="<?php echo $detail['meta_title']; ?>"
                                       class="form-control">
                            </div>

                            <div class="form-group form-group-default ">
                                <label>Meta Keywords</label>
                                <input type="text" name="meta_keywords" value="<?php echo $detail['meta_keywords']; ?>"
                                       class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Meta Description</label>
                                <textarea class="form-control" rows="6"
                                          name="meta_description"><?php echo $detail['meta_description']; ?></textarea>
                            </div>

                            <button class="btn btn-success" type="submit">Kaydet</button>
                            <a href="<?php echo base_url('manage/category'); ?>" class="btn btn-danger">Vazgeç</a>
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