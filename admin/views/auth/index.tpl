{block name=body}
<h1>用户列表</h1>
<p></p>

<div id="infoMessage">{$message}</div>
<table cellpadding=0 cellspacing=10 class="table table-bordered ">
    <tr>
        <th>帐号</th>
        <th>姓名</th>
        <th>email</th>
        <th>所属组</th>
        <th>状态</th>
        <th>操作</th>
    </tr>
    {foreach $users as $user}
        <tr>
            <td>{$user->first_name}</td>
            <td>{$user->last_name}</td>
            <td>{$user->email}</td>
            <td>
                {foreach $user->groups as $group}
                    {t_anchor url="auth/edit_group/{$group->id}" title="{$group->name}"}<br />
                {/foreach}
            </td>
            <td>
                {if $user->active}
                    {t_anchor url="auth/deactivate/{$user->id}" title="活动"}
                {else}
                    {t_anchor url="auth/activate/{$user->id}" title="不活动"}
                {/if}
            </td>
            <td>{t_anchor url="auth/edit_user/{$user->id}" title="Edit"}</td>
        </tr>
    {/foreach}
</table>

<p>{t_anchor url="auth/create_user" title="新建用户"} | {t_anchor url="auth/create_group" title="创建组"}</p>
{/block}
