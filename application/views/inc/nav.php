<?php
$category = categoryGlobal();
?>

    <li>
        <a href="<?php echo base_url($lang['url'] . '/'.q('about_url')); ?>"><?php echo q('about_title');?></a>
    </li>
    <li>
        <a href="<?php echo base_url($lang['url'] . '/'.q('our_url')); ?>"><?php echo q('our_title'); ?></a>
    </li>
<?php foreach ($category as $k => $v) {
    ?>
    <li class="cat-name">
        <a href="<?php echo base_url($lang['url'] . '/product/' . $v['seoUrl']); ?>"><?php echo $v['title']; ?></a>
    </li>
<?php } ?>