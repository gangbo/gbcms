<?php include APPPATH.'views/common/header.php' ?>
<h1><?php echo lang('create_group_heading');?></h1>
<p><?php echo lang('create_group_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/create_group",array('role'=>'form', 'class'=>'form-inline'));?>
    <div class="form-group">
        <?php echo lang('create_group_name_label', 'group_name');?>
        <?php echo form_input($group_name);?>
    </div>
    <div class="form-group">
        <?php echo lang('create_group_desc_label', 'description');?>
        <?php echo form_input($description);?>
    </div>

    <?php echo form_submit('submit', lang('create_group_submit_btn'));?>

<?php echo form_close();?>

<?php include APPPATH.'views/common/footer.php' ?>
