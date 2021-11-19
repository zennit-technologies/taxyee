
<div class="site-sidebar" style="height: 100%;position: fixed;">
    <div class="custom-scroll custom-scroll-light">
        <div style="margin0: 30px;">
            <div class="user-img">
            <?php $profile_image = img(Auth::user()->picture); ?>
            <div class="pro-img" style="background-image: url({{ Auth::guard('provider')->user()->avatar ? asset('storage/app/public/'.Auth::guard('provider')->user()->avatar) : asset('asset/img/provider.jpg') }});margin-top: 15px;"></div>
            <h4 style="color: #ffffff;text-align: center;">{{Auth::user()->first_name}} {{Auth::user()->last_name}}</h4>
        </div>
         <div style="margin-top: 30px;">
            <ul class="sidebar-menu">

                <li>
                    <a href="{{ route('provider.index') }}" class="waves-effect waves-light">
                        <span class="s-icon"><i class="ti-anchor user-sidebaricon"></i></span>
                        <span class="s-text user-dashboard">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('provider.dailyearning') }}" class="waves-effect waves-light">
                        <span class="s-icon"><i class="ti-car user-sidebaricon"></i></span>
                        <span class="s-text user-dashboard">My Trips</span>
                    </a>
                </li>

                <li class="with-sub">

                    <a href="#" class="waves-effect waves-light">
                        <span class="s-caret"><i class="fa fa-angle-down user-sidebaricon"></i></span>
                        <span class="s-icon"><i class="ti-money user-sidebaricon"></i></span>
                        <span class="s-text user-dashboard">Earning</span>
                    </a>
                    <ul>
                        <li><a href="{{ route('provider.weeklyearning') }}"><span class="s-text user-dashboard">Weekly Earning</span></a></li>
                        <li><a href="{{ route('provider.yearlyearning') }}"><span class="s-text user-dashboard">Daily Earning</span></a></li>
                    </ul>


                    <!--a href="#" class="waves-effect waves-light">
                        <span class="s-caret"><i class="fa fa-angle-down user-sidebaricon"></i></span>
                        <span class="s-icon"><i class="ti-money user-sidebaricon"></i></span>
                        <span class="s-text user-dashboard">Earning</span>
                    </a>
                    <ul>
                        <li><a href="/weeklyearning"><span class="s-text user-dashboard">Weekly Earning</span></a></li>
                        <li><a href="/yearlyearning"><span class="s-text user-dashboard">Yearly Earning</span></a></li>
                    </ul-->
                </li>

                <li>
                    <a href="{{ route('provider.upcoming')}}" class="waves-effect waves-light">
                        <span class="s-icon"><i class="ti-palette user-sidebaricon"></i></span>
                        <span class="s-text user-dashboard">Schedule Trips</span>
                    </a>
                </li>

                <!--li>
                    <a href="{{ route('provider.profile.index') }}" class="waves-effect waves-light">
                        <span class="s-icon"><i class="ti-user user-sidebaricon"></i></span>
                        <span class="s-text user-dashboard">Profile</span>
                    </a>
                </li-->

                <li class="with-sub">

                    <a href="#" class="waves-effect waves-light">
                        <span class="s-caret"><i class="fa fa-angle-down user-sidebaricon"></i></span>
                        <span class="s-icon"><i class="ti-user user-sidebaricon"></i></span>
                        <span class="s-text user-dashboard">Profile</span>
                    </a>
                    <ul>
                        <li><a href="{{ route('provider.profile.index') }}"><span class="s-text user-dashboard">My Profile</span></a></li>
                        <li><a href="{{ route('provider.documents.index') }}"><span class="s-text user-dashboard">My Documents </span></a></li>
                        <li><a href="{{ route('provider.location.index') }}"><span class="s-text user-dashboard">My Location </span></a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url('/provider/logout') }}"
                    onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();" class="waves-effect waves-light">
                    <span class="s-icon"><i class="ti-power-off user-sidebaricon"></i></span>
                    <span class="s-text user-dashboard">Logout</span>
                    </a>
                </li>
                    <form id="logout-form" action="{{ url('/provider/logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
            </ul>
        </div>
    </div>
</div>
</div>

<!--nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
    <ul class="nav sidebar-nav">
        <li>
            <a href="{{ route('provider.earnings') }}">Patner Earnings</a>
        </li-->
        <!-- <li>
            <a href="#">Invite</a>
        </li> -->
        <!--li>
            <a href="{{ route('provider.profile.index') }}">Profile</a>
        </li-->
        <!-- <li>
            <a href="#">Help</a>
        </li> -->
        <!--li>
            <a href="{{ url('/provider/logout') }}"
                onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ url('/provider/logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
        </li>
    </ul>
</nav-->