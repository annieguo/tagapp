<?php include 'tpl/header.inc'?>
<div id="tag-name-list">
<?php if(isset($images)):?>
<?php foreach($images as $image):?>
<a href="index.php/tagging/index/<?php echo $image->id;?>"><img id="img" src="<?php echo $image->path.$image->title?>" width="100" /></a>
<?php endforeach; ?>
<?php endif;?>
</div>
<?php include 'tpl/footer.inc'?>