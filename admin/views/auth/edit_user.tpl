{block name=body}
<h1>编辑用户</h1>
<p></p>

<div id="infoMessage">{$message}</div>

<form action="#" method="post" class="form-inline" role="form">

      <label for="exampleInputEmail1">姓名</label>
      <input type="text" class="form-control" name="{$first_name.name}" value="{$first_name.value}"/>

      <label for="exampleInputEmail1">部门</label>
      <input type="text" class="form-control" name="{$company.name}" value="{$company.value}"/>

      <label for="exampleInputEmail1">手机</label>
      <input type="text" class="form-control" name="{$phone.name}" value="{$phone.value}"/>

      <label for="exampleInputEmail1">密码</label>
      <input type="password" class="form-control" name="{$password.name}" />

      <label for="exampleInputEmail1">确认密码</label>
      <input type="password" class="form-control" name="{$password_confirm.name}" />

     <h3>用户组</h3>
     {foreach $groups as $group}
        <input type="checkbox" name="groups[]" value="{$group.id}" {if isset($group.checked)}checked="checked"{/if}/>
        {$group.name}
     {/foreach}
    <input type="hidden" name="id" value="{$user->id}" />

    <input type="submit" value="提交" />

</form>

{/block}
