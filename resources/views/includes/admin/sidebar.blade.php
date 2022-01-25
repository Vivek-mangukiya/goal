<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="{{route('admin.home')}}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-briefcase-alt-2"></i>
                        <span>Pages</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('pages.header')}}">Header</a></li>
                        <li><a href="{{route('pages.footer')}}">Footer</a></li>
                        <li><a href="{{route('pages.home')}}">Home</a></li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow waves-effect">
                                <span>Services</span>
                            </a>
                            <ul class="sub-menu" aria-expanded="false">
                                <li><a href="#">Header</a></li>
                                <li><a href="#">Footer</a></li>
                                <li><a href="#">Testiomonial</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>  
                <li>
                    <a href="{{route('admin.logout')}}" class="waves-effect"> <i class="bx bx-power-off"></i><span>Logout</span></a>
                </li>

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>