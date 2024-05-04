<div class="sidebar">
    <div class="sidebar-inner">
        <div class="sidebar-logo">
            <div class="peers ai-c fxw-nw">
                <div class="peer peer-greed">
                    <router-link class="sidebar-link td-n" :to="{ name: 'dashboard'}">
                        <div class="peers ai-c fxw-nw">
                            <div class="peer">
                                <div class="logo">
                                    <img src="assets/static/images/logo.png" alt="">
                                </div>
                            </div>
                            <div class="peer peer-greed">
                                <h5 class="lh-1 mB-0 logo-text">{{ config('app.name') }}</h5>
                            </div>
                        </div>
                    </router-link>
                </div>
                <div class="peer">
                    <div class="mobile-toggle sidebar-toggle">
                        <a href="" class="td-n">
                            <i class="ti-arrow-circle-left"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- ### $Sidebar Menu ### -->
        <ul class="sidebar-menu scrollable pos-r">
            <li class="nav-item mT-30 actived">
                <router-link class="sidebar-link" :to="{ name: 'dashboard'}" >
                <span class="icon-holder">
                  <i class="c-orange-500 ti-home"></i>
                </span>
                    <span class="title">Dashboard</span>
                </router-link>
            </li>

            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                        <span class="icon-holder">
                          <i class="c-orange-500 ti-user"></i>
                        </span>
                    <span class="title">RBAC</span>
                    <span class="arrow">
                          <i class="ti-angle-right"></i>
                        </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <router-link :to="{ name: 'user'}"  class='sidebar-link'>User</router-link>
                    </li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                        <span class="icon-holder">
                          <i class="c-orange-500 ti-layout-accordion-list"></i>
                        </span>
                    <span class="title">Task </span>
                    <span class="arrow">
                          <i class="ti-angle-right"></i>
                        </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <router-link :to="{ name: 'task'}" class='sidebar-link'>Task</router-link>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
