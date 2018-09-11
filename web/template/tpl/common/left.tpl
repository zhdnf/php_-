<div class="left-sidebar">
            <!-- 用户信息 -->
            <div class="tpl-sidebar-user-panel">
                <div class="tpl-user-panel-slide-toggleable">
                    <div class="tpl-user-panel-profile-picture">
                        <img src="{$respath}assets/img/user04.png" alt="">
                    </div>
                    <span class="user-panel-logged-in-text">
              <i class="am-icon-circle-o am-text-success tpl-user-panel-status-icon"></i>
              {$username}
			  </span>
                  
                </div>
            </div>

            <!-- 菜单 -->
            <ul class="sidebar-nav">
				{foreach $menus_top as $key => $value}
                <li class="sidebar-nav-link">
                    <a href="javascript:;" class="sidebar-nav-sub-title">
                        <i class="am-icon-table sidebar-nav-link-logo"></i> {$value}
                        <span class="am-icon-chevron-down am-fr am-margin-right-sm sidebar-nav-sub-ico"></span>
                    </a>
					<ul class="sidebar-nav sidebar-nav-sub">
					{foreach $menus[$key] as $k => $v}
                        <li class="sidebar-nav-link">
                            <a href="{url($k)}">
                                <span class="am-icon-angle-right sidebar-nav-link-logo"></span> {$v}
                            </a>
                        </li>
					{/foreach}
					</ul>
                </li>
				{/foreach}
            </ul>
        </div>