{block name=body}
<h1>组管理</h1>
<p>组列表</p>
<F5>
<table cellpadding=0 cellspacing=10 class="table table-bordered ">
    <tr>
        <th>ID</th>
        <th>组名</th>
        <th>描述</th>
        <th>操作</th>
    </tr>
    {foreach $groups as $group} 
    <tr>
            <td>{$group.id}</td>
            <td>{$group.name}</td>
            <td>{$group.description}</td>
            <td><a href="{$site_url}/auth/edit_group/{$group.id}">修改</a></td>
    </tr>
    {/foreach}
</table>

{/block}
