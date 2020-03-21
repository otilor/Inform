<div class="left side-menu">
    <button type="button" class="button-menu-mobile button-menu-mobile-topbar open-left waves-effect">
        <i class="ion-close"></i>
    </button>

    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <!--<a href="" class="logo"><i class="mdi mdi-assistant"></i>Zoter</a>-->
            <a href="" class="logo">
                <img src="assets/images/logo-lg.png" alt="" class="logo-large">
            </a>
        </div>
    </div>

    <div class="sidebar-inner niceScrollleft">

        <div id="sidebar-menu">
            <ul>
                <li class="menu-title">Main</li>

                <li>
                    <a href="/" class="waves-effect">
                        <i class="mdi mdi-message-plus"></i>
                        <span> Message</span>
                    </a>
                </li>

                <li>
                    <a href="/add" class="waves-effect">
                        <i class="mdi mdi-account-multiple-plus "></i>
                        <span> Add students </span>
                    </a>
                </li>

                <li>
                    <a class="waves-effect">
                    <form action="{{ route('logout') }}" method="POST">
                        {{ csrf_field() }}
                        <i class="mdi mdi-account-multiple-plus "></i>
                        <span> <input type="submit" value="Logout"> </span>
                    </form>
                    </a>
                </li>

                

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>