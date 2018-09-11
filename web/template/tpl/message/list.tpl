{include file="common/header.tpl"}
{include file="common/left.tpl"}

<div class="tpl-content-wrapper">
	<div class="row-content am-cf">
                <div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
                                <div class="widget-title  am-cf">公告列表</div>
                            </div>
                            <div class="widget-body  am-fr">
                                <div class="am-u-sm-12 am-u-md-6 am-u-lg-6">
                                    <div class="am-form-group">
                                        <div class="am-btn-toolbar">
                                            <div class="am-btn-group am-btn-group-xs">
                                                <a href="{url('site/notice/add')}" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>                                      
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="am-u-sm-12">
                                    <table width="100%" class="am-table am-table-compact am-table-striped tpl-table-black ">
                                        <thead>
                                            <tr>
                                                <th>公告名称</th>
												<th>公告内容</th>
                                                <th>创建时间</th>									
                                            </tr>
                                        </thead>
                                        <tbody>
											{foreach $notice as $key =>$value}
                                            <tr class="gradeX">
												<td>{$value['title']}</td>
                                                <td>{$value['content']}</td>																			
                                                <td>{date('Y-m-d H:i:s', $value['create_time'])}</td>
												<td>
                                                    <div class="tpl-table-black-operation">
                                                        <a href="javascript:;">
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