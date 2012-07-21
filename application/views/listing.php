<?php include 'tpl/header.inc'?>
<div id="left">
<?php if(isset($tags)):?>
<?php foreach ($tags as $tag):?>
<span><a href="index.php/welcome/list/<?php echo $tag->id ?>"><?php echo $tag->name;?></a></span>
<?php endforeach;?>
<?php endif; ?>
</div>
<div id="right">
<h3>Click tags on left side to see photos.</h3>
<?php if(isset($images)):?>
<?php foreach ($images as $image): ?>
<a href="index.php/tagging/index/<?php echo $image->id;?>"><img src="<?php echo $image->path.$image->title ?>" width="100" /></a>
<?php endforeach;?>
<?php endif;?>
</div>
<?php include 'tpl/footer.inc'?>
