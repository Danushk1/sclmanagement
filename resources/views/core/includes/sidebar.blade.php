<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div class="h-100">

        <div class="user-wid text-center py-4">
            <div class="user-img">
               
            </div>

            <div class="mt-3">

                <a href="#" class="text-dark font-weight-medium font-size-16">{{ Auth::user()->name }}</a>
                

            </div>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>
                <li>
                    <a href="pdfdowonload/{{ Auth::user()->id }}" class=" waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>pdf Download</span>
                    </a>
                </li>
                @role('super_admin')
                <li>
                    <a href="{{ route('register') }}" class=" waves-effect">
                        <i class="mdi mdi-airplay"></i>
                        <span>Student Register

                       
                        </span>
                    </a>
                </li>
                @endrole
                
                <li>
                    <a class="has-arrow waves-effect">
                        <i class="bx bx-notepad"></i>
                        <span>LMS</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="#">Laravel</a></li>
                        <li><a href="#">React-js</a></li>
                        <li><a href="#">Java</a></li>
                        <li><a href="#">Android</a></li>
                    </ul>
                </li>
                <li>
                    <a class="has-arrow waves-effect">
                        <i class="bx bx-notepad"></i>
                        <span>Video</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                    <li><a href="#">Laravel</a></li>
                        <li><a href="#">React-js</a></li>
                        <li><a href="#">Java</a></li>
                        <li><a href="#">Android</a></li>
                    </ul>
                </li>
                
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
