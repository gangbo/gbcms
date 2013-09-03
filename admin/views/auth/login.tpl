
{include file='common/header.tpl'}
<link href="{$static_file_url}static/css/signin.css" rel="stylesheet">

<h1>请登录</h1>
<p>唯品会商品类别管理系统</p>

<div id="infoMessage">{$message}</div>

<form action="#" method="post" class='form-signin'>

  <p>
    <input type='text' name="{$identity.name}" value="{$identity.value}" class="form-control" placeholder="邮箱" />
  </p>

  <p>
    <input type='password' name="{$password.name}" class="form-control" placeholder="密码" />
  </p>

  <p><button type='submit' class="btn btn-lg btn-primary btn-block"/>登录</button></p>

</form>
<p><a href="forgot_password">忘记密码？</a></p>

{include file='common/footer.tpl'}
