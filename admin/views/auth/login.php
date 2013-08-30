<?php include APPPATH.'views/common/header.php' ?>

<link href="<?php echo $BASE_URL.APPPATH;?>static/css/signin.css" rel="stylesheet">

<h1><?php echo lang('login_heading');?></h1>
<p><?php echo lang('login_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<?php echo form_open("auth/login",array('class'=>'form-signin'));?>

  <p>
    <?php echo form_input($identity,null,'class="form-control" placeholder="邮箱"'); ?>
  </p>

  <p>
    <?php echo form_input($password,null,'class="form-control" placeholder="密码"');?>
  </p>

  <p><?php echo form_submit('submit', 'login','class="btn btn-lg btn-primary btn-block"');?></p>

<?php echo form_close();?>

<p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>

<?php include APPPATH.'views/common/footer.php' ?>
