<?php /* Smarty version Smarty-3.1.14, created on 2013-07-15 20:23:27
         compiled from "admin/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214669560551e3b13914ddb6-85707712%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '501a0360182d917804079e7ade24f97d39ffd456' => 
    array (
      0 => 'admin/templates/login.tpl',
      1 => 1373891003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214669560551e3b13914ddb6-85707712',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51e3b13917f7b0_27627124',
  'variables' => 
  array (
    'static_file_dir' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e3b13917f7b0_27627124')) {function content_51e3b13917f7b0_27627124($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simpla Admin | Sign In by www.865171.cn</title>
<!--                       CSS                       -->
<!-- Reset Stylesheet -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['static_file_dir']->value;?>
/css/reset.css" type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['static_file_dir']->value;?>
/css/style.css" type="text/css" media="screen" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['static_file_dir']->value;?>
/css/invalid.css" type="text/css" media="screen" />
<!--                       Javascripts                       -->
<!-- jQuery -->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_file_dir']->value;?>
/js/jquery-1.3.2.min.js"></script>
<!-- jQuery Configuration -->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_file_dir']->value;?>
/js/simpla.jquery.configuration.js"></script>
<!-- Facebox jQuery Plugin -->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_file_dir']->value;?>
/js/facebox.js"></script>
<!-- jQuery WYSIWYG Plugin -->
<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['static_file_dir']->value;?>
/js/jquery.wysiwyg.js"></script>
</head>
<body id="login">
<div id="login-wrapper" class="png_bg">
  <div id="login-top">
    <h1>Simpla Admin</h1>
    <!-- Logo (221px width) -->
    <a href="#"><img id="logo" src="<?php echo $_smarty_tpl->tpl_vars['static_file_dir']->value;?>
/images/logo.png" alt="Simpla Admin logo" /></a> </div>
  <!-- End #logn-top -->
  <div id="login-content">
    <form action="login" method="post">
      <div class="notification information png_bg">
        <div> Just click "Sign In". No password needed. </div>
      </div>
      <p>
        <label>Username</label>
        <input class="text-input" type="text" name="username" />
      </p>
      <div class="clear"></div>
      <p>
        <label>Password</label>
        <input class="text-input" type="password" name="password" />
      </p>
      <div class="clear"></div>
      <!--
      <p id="remember-password">
        <input type="checkbox" />
        Remember me </p>
      <div class="clear"></div>
      <p>
      -->
        <input class="button" type="submit" value="Sign In" />
      </p>
    </form>
  </div>
  <!-- End #login-content -->
</div>
<!-- End #login-wrapper -->
</body>
</html>
<?php }} ?>