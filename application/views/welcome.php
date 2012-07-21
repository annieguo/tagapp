<?php include 'tpl/header.inc'?>
<h2>Please select an image to upload</h2>
<p><?php echo isset($upload_error)? $upload_error:'';?></p>
<?php echo Form::open('welcome/index/', array('enctype'=>'multipart/form-data')); ?>    
<span class="btn btn-success fileinput-button">
    <i class="icon-plus icon-white"></i>
    <span>Add Image</span>
    <?php echo Form::file('image'); ?>
</span>
<?php echo Form::submit("submit", "Submit"); ?>
<?php echo Form::close(); ?>
<?php include 'tpl/footer.inc'?>