<nav class="navbar navbar-fixed-top navbar-expand-sm bg-dark navbar-dark">
    <!-- BEGIN LOGO -->
    <div class="page-logo">
        <a target="_break" href="http://www.nsst.com.tw/">
            <img src="{{ asset('img/logo/logo.png') }}" alt="logo" class="logo-default" width="95px" height="16px" />
        </a>
        <div class="menu-toggler sidebar-toggler hide">
        </div>
    </div>
    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
    <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
        data-target=".navbar-collapse">
    </a>
    <!-- BEGIN TOP NAVIGATION MENU -->
    <ul class="navbar-nav ml-auto">
        <!-- BEGIN USER LOGIN DROPDOWN -->
        <li class="nav-item dropdown">
            <a href="javascript:;" class="nav-link dropdown-toggle" id="navbardrop" data-toggle="dropdown">
                <span class="username username-hide-on-mobile">name</span>
                <input type="hidden" id="readonly" value="privilege">
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="">
                    <i class="fa-solid fa-globe"></i> {{ trans('manage.neighborhood_site') }}
                </a>
                <a class="dropdown-item" href="">
                    <i class="fa-solid fa-desktop"></i> {{ trans('manage.service_system') }}
                </a>
				<a href="" class="divider"></a>
                <a class="dropdown-item" href="">
                    <i class="fa-solid fa-key"></i> {{ trans('manage.log_out') }}
                </a>
            </div>
        </li>
        <!-- END USER LOGIN DROPDOWN -->
    </ul>
    <!-- END TOP NAVIGATION MENU -->
</nav>
