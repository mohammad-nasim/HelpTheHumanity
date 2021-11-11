<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('admin/dashboard') }}" class="brand-link">
        <img src="{{asset('backend/img/app_image/logo/logo.png')}}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">

        <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a class="h4" href="{{ route('profile.index') }}" class="d-block"> <i class="fas fa-user-shield"></i>  : <strong class="text-light"> {{ Auth::user()->name }} </strong></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item {{ (request()->is('admin/herosection*')) ? 'menu-open' : '' }}  ">
                    <a href="#" class="nav-link {{ (request()->is('admin/herosection*')) ? 'active' : '' }} ">
                        <i class="fab fa-audible"></i>
                        <p class="">
                            Hero Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('herosection.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Title & Slogan</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ ( request()->is('admin/feature*') || request()->is('admin/additionalfeature*')) ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link {{ ( request()->is('admin/feature*') || request()->is('admin/additionalfeature*')) ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Featured Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('feature.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Features</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('additionalfeature.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Additional Section</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ ( request()->is('admin/aboutus*') || request()->is('admin/additionalaboutus*')) ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link {{ ( request()->is('admin/aboutus*') || request()->is('admin/additionalaboutus*')) ? 'active' : '' }} ">
                        <i class="fas fa-address-card"></i>
                        <p>
                            About Us Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('aboutus.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Section</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('additionalaboutus.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Addtional Section</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ ( request()->is('admin/service*') || request()->is('admin/additionalservice*')) ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link {{ ( request()->is('admin/service*') || request()->is('admin/additionalservice*')) ? 'active' : '' }} ">
                        <i class="fas fa-cogs"></i>
                        <p>
                            Service Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('service.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Services</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('additionalservice.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Addtional Section</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ ( request()->is('admin/paymentmethod*')) ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link {{ ( request()->is('admin/paymentmethod*')) ? 'active' : '' }} ">
                        <i class="fas fa-file-invoice-dollar"></i>
                        <p>
                            Payment Method
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('paymentmethod.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Data</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ ( request()->is('admin/donatenow*') || request()->is('admin/additionaldonatenow*')) ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link {{ ( request()->is('admin/donatenow*') || request()->is('admin/additionaldonatenow*')) ? 'active' : '' }} ">
                        <i class="fas fa-hand-holding-usd"></i>
                        <p>
                            Donate Now Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('donatenow.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data List</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('additionaldonatenow.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Additional Section </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ ( request()->is('admin/cause*') || request()->is('admin/additionalcause*')) ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link {{ ( request()->is('admin/cause*') || request()->is('admin/additionalcause*')) ? 'active' : '' }}  ">
                        <i class="far fa-building"></i>
                        <p>
                            Cause Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('cause.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data List</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('additionalcause.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Additional Section </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ ( request()->is('admin/gallery*') || request()->is('admin/additionalgallery*')) ? 'menu-open' : '' }}  ">
                    <a href="#" class="nav-link {{ ( request()->is('admin/gallery*') || request()->is('admin/additionalgallery*')) ? 'active' : '' }} ">
                        <i class="fas fa-images"></i>
                        <p>
                            Gallery Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('gallery.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>All Pictures</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('additionalgallery.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Addtional Section</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ ( request()->is('admin/funfactor*')) ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link {{ ( request()->is('admin/funfactor*')) ? 'active' : '' }} ">
                        <i class="far fa-laugh-wink"></i>
                        <p>
                            Fun Factor Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('funfactor.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Fun Factor Data</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ ( request()->is('admin/ourteam*') || request()->is('admin/additionalourteam*')) ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link {{ ( request()->is('admin/ourteam*') || request()->is('admin/additionalourteam*')) ? 'active' : '' }} ">
                        <i class="fas fa-users-cog"></i>
                        <p>
                            Our Team Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('ourteam.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Team Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('additionalourteam.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Addtional Section</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ ( request()->is('admin/event*') || request()->is('admin/additionalevent*')) ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link {{ ( request()->is('admin/event*') || request()->is('admin/additionalevent*')) ? 'active' : '' }} ">
                        <i class="fas fa-calendar-check"></i>
                        <p>
                            Event Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('event.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Event Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('additionalevent.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Addtional Section</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ ( request()->is('admin/partner*')) ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link {{ ( request()->is('admin/partner*')) ? 'active' : '' }} ">
                        <i class="fas fa-handshake"></i>
                        <p>
                            Partner Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('partner.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Partners</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ ( request()->is('admin/news*') || request()->is('admin/additionalnews*')) ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link {{ ( request()->is('admin/news*') || request()->is('admin/additionalnews*')) ? 'active' : '' }} ">
                        <i class="fas fa-newspaper"></i>
                        <p>
                            News Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('news.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>News Data</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('additionalnews.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Additional Section </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ ( request()->is('admin/contact*') || request()->is('admin/additionalcontact*')) ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link {{ ( request()->is('admin/contact*') || request()->is('admin/additionalcontact*')) ? 'active' : '' }} ">
                        <i class="fas fa-address-book"></i>

                        <p>
                            Contact Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('contact.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Contact Details</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('additionalcontact.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Additional Data</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item {{ ( request()->is('admin/footer*')) ? 'menu-open' : '' }} ">
                    <a href="#" class="nav-link {{ ( request()->is('admin/footer*')) ? 'active' : '' }} ">
                        <i class="fas fa-hourglass-end"></i>
                        <p>
                            Footer Section
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ route('footer.index') }}" class="nav-link ">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Footer Data</p>
                            </a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
