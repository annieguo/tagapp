<?php include 'tpl/header.inc'?>
<span><?php //echo $error;?></span>

<div id="wrapper">
<?php if(isset($image)):?>
<div id="tagging-area">
<div id="img-tags">
<?php if(isset($tags)):?>
<?php foreach($tags as $tag):?>
<div class="tag" style="position:absolute; 
     width:<?php echo $tag->width;?>px;
     height:<?php echo $tag->height;?>px;
     top:<?php echo $tag->top;?>px;
     left:<?php echo $tag->left;?>px">
     <div><?php echo $tag->description;?></div>
</div>
<?php endforeach; ?>
<?php endif;?>
</div>
<img id="img" src="<?php echo $image->path.$image->title?>" width="600px" />

<div id="draggable">

    <div id="drag" class="ui-widget-content"></div>
    <form id="tag-form" method="post">
        <input type="hidden" name="pictureid" value="<?php echo $image->id;?>" />
        <input type="hidden" name="width" id="width" value="" />
        <input type="hidden" name="height" id="height" value="" />
        <input type="hidden" name="top" id="top" value="" />
        <input type="hidden" name="left" id="left" value="" />
        <input id="tagname" type="text" name="description" maxlength="20" value="" />
        <input type="button" id="tag" onclick="tag_photo();" value="Tag" />
        <div id="tag-list"></div>
    </form>
</div>
</div>
<?php endif;?>
</div>

<div id="name-list">
<div><a class="tag" href="#" onclick="show();return false;">Tag This Photo</a></div>
<div id="tag-name-list">
<?php if(isset($names)):?>
<?php foreach($names as $name):?>
<span><a href="index.php/welcome/list/<?php echo $name->id;?>"><?php echo $name->name;?></a></span>
<?php endforeach; ?>
<?php endif;?>
</div>
</div>
<?php include 'tpl/footer.inc'?>    