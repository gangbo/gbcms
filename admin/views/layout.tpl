{include file='common/header.tpl'}

<div class="row">
    <div class="col-md-2">
        <div class="well sidebar-nav">
            <ul class="nav">
                <li>权限管理</li>
                <li><a href="{$site_url}/auth/">用户列表</a></li>
                <li><a href="{$site_url}/auth/create_user">新增管理员</a></li>
                <li><a href="{$site_url}/auth/groups">组管理</a></li>
                <li>配置</li>
                <li><a href="#">系统设置</a></li>
                <li><a href="#">1111</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-10">{block name=body}{/block}</div>
</div>

{include file='common/footer.tpl'}
