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

                                <form class="am-form tpl-form-border-form tpl-form-border-br submit-form" action= {if !$n }
								{url('site/notice/add')}
								{/if}
								{url('site/notice/edit')} method="post">
                                    <div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">公告名称</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="title" 
											{if $n}
												value = "{$n}" readonly="readonly"
											{/if}											
											placeholder="请输入公告名称">
                                        </div>
                                    </div>
									<div class="am-form-group">
                                        <label class="am-u-sm-3 am-form-label">公告内容</label>
                                        <div class="am-u-sm-9">
                                            <input type="text" class="tpl-form-input" name="content" placeholder="请输入公告内容">                                          
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