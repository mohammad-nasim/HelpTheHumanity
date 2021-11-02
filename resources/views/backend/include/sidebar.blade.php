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
                <a href="{{ route('profile.index') }}" class="d-block"> <i class="fas fa-user text-light"></i> Profile : <strong class="text-light"> {{ Auth::user()->name }} </strong></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item  ">
                    <a href="#" class="nav-link ">
                        <i class="fab fa-audible"></i>
                        <p>
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
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
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
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
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
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
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
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
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
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
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
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
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
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
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
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
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
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
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
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
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
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
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
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
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
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
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
                <li class="nav-item ">
                    <a href="#" class="nav-link ">
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
