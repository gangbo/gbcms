<?php /* Smarty version Smarty-3.1.14, created on 2013-07-03 15:10:01
         compiled from "admin\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1819651d2e1701171b8-95114635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08a46991dcc3c576a46dfeda4bdc085d8940bb09' => 
    array (
      0 => 'admin\\templates\\login.tpl',
      1 => 1372856996,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1819651d2e1701171b8-95114635',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.14',
  'unifunc' => 'content_51d2e17063bd95_55211181',
  'variables' => 
  array (
    'warning' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51d2e17063bd95_55211181')) {function content_51d2e17063bd95_55211181($_smarty_tpl) {?><html>
<body>
<form method="post" action="">
<table>
<tr><td>用户名:</td><td><input type="text" name="username"/></td></tr>
<tr><td>密码:</td><td><input type="password" name="password"/></td></tr>
<tr><td></td><td><input type="submit" value="登陆"/></td></tr>
</table>
<p class="warning"><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</p>
</form>
</body>
</html>
<?php }} ?>