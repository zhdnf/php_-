{include file="common/header.tpl"}
{include file="common/left.tpl"}

<div class="tpl-content-wrapper">
	<div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">管理员列表</div>
                            </div>
                            <div class="widget-body  am-fr">
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <a href="{url('user/manage/add')}" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>                                      
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>管理员名称</th>
												<th>所属管理组</th>
                                                <th>状态</th>
												<th>创建时间</th>
                                                <th>最后登录时间</th>
												<th>最后登录ip</th>
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
											{foreach $users as $key =>$value}
                                            <tr class="gradeX">
                                                <td>{$value['username']}</td>
												<td>{$roles['groups'][$value['groupid']]}</td>
												{if $value['status']==1}
                                                <td>启用</td>
												{else}
												<td>禁用</td>
												{/if}
                                                <td>{date('Y-m-d H:i:s', $value['create_time'])}</td>
												<td>{date('Y-m-d H:i:s', $value['last_login_time'])}</td>
                                                <td>{$value['last_login_ip']}</td>
												<td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="http://www.test.com/web/index.php?m=user&c=manage&a=edit&u={$value['username']}">
                                                            <i class="am-icon-pencil"></i> 编辑
                                                        </a>
                                                        <a href="javascript:;" class="tpl-table-black-operation-del">
                                                            <i class="am-icon-trash"></i> 删除
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
											{/foreach}
                                        </tbody>
                                    </table>
                                </div>
                                {$pager}
                            </div>
                        </div>
                    </div>
                </div>
           </div>
</div>


{include file="common/footer.tpl"}