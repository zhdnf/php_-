{include file="common/header.tpl"}
{include file="common/left.tpl"}

<div class="tpl-content-wrapper">
	<div class="row">
                    <div class="am-u-sm-12 am-u-md-12 am-u-lg-12">
                        <div class="widget am-cf">
                            <div class="widget-head am-cf">
     
                                <div class="widget-function am-fr">
                                    <a href="javascript:;" class="am-icon-cog"></a>
                                </div>
                            </div>
                            <div class="widget-body am-fr">

                                <form class="am-form tpl-form-border-form tpl-form-border-br submit-form" action={if !$u }
								{url('user/manage/add')}
								{/if}
								{url('user/manage/edit')} method="post">
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">管理员名称</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="username" 
											{if $u}
												value = "{$u}" readonly="readonly"
											{/if}
											placeholder="请输入管理名称">
                                        </div>
                                    </div>
									<div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">管理员密码</label>
                                        <div class="am-u-sm-9">
                                            <input type="password" class="tpl-form-input" name="password" placeholder="请输入管理员密码">                                          
                                        </div>
                                    </div>
									<div class="am-form-group">
                                        <label for="user-intro" class="am-u-sm-3 am-form-label">启用/禁用</label>
                                        <div class="am-u-sm-9">
                                            <div class="tpl-switch">
                                                <input type="checkbox" name="status[]" class="ios-switch bigswitch tpl-switch-btn" value="1">
                                                <div class="tpl-switch-btn-view">
                                                    <div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">所属管理组</label>
                                        <div class="am-u-sm-9">
                                            	<select name="groupid" data-am-selected="" style="display: none;">
													<option value=-1>请选择</option>
													{foreach $groups as $key => $value}
													<option value="{$key}">{$value}</option>
													{/foreach}
												</select>									
                                        </div>
                                    </div>

                                    <div class="am-form-group">
                                        <div class="am-u-sm-9 am-u-sm-push-3">
                                            <button type="button" class="submit-btn am-btn am-btn-primary tpl-btn-bg-color-success">提交</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                 </div>
          </div>
</div>


{include file="common/footer.tpl"}