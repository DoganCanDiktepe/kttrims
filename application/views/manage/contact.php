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
                            <li><a href="<?php echo base_url('manage/about/'); ?>" class="active">İLETİŞİM</a>
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
                                    <th>ID</th>
                                    <th>Ad Soyad</th>
                                    <th>E-Mail</th>
                                    <th>Telefon Numarası</th>
                                    <th>Subject</th>
                                    <th>Mesaj</th>
                                    <th>Oluşturma Tarihi</th>
                                    <th style="width:15px;"></th>
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
                                            <p><?php echo $v['fullname']; ?></p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p><?php echo $v['email']; ?></p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p><?php echo $v['phone']; ?></p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p><?php echo $v['subject']; ?></p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p><?php echo $v['message']; ?></p>
                                        </td>
                                        <td class="v-align-middle">
                                            <p><?php echo $v['create_at']; ?></p>
                                        </td>
                                        <td class="v-align-middle">
                                            <a href="<?php echo base_url('manage/contact/remove/' . $v['id']); ?>"
                                               class="btn btn-danger"><i class="fa fa-trash"></i></a>
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