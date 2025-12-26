<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta name="image" content="{{ asset('uploads/setting/1758738078.favicon.png')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/circular-std/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/libs/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/charts/chartist-bundle/chartist.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/assets/vendor/fonts/flag-icon-css/flag-icon.min.css') }}">
    <title>Urban Transportation Dashboard</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.8/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.bootstrap4.min.css">
    <style>
        /* DataTables Buttons container */
        .dataTables_wrapper .dt-buttons{
            display: flex;
            gap: 5px;               
        }

        .buttons-pdf,.buttons-print, .buttons-excel, .buttons-copy{
            background-color: #5969ff;
            border-color: #5969ff !important;
            border-top-left-radius: 5px !important;
            border-top-right-radius: 5px !important;
            border-bottom-left-radius: 5px !important;
            border-bottom-right-radius: 5px !important;
            padding: 10px 20px;
        }
        .buttons-pdf:hover,.buttons-print:hover, .buttons-excel:hover, .buttons-copy:hover{
            background-color: #5969ff !important;
        }
    </style>>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="{{url('dashboard')}}">
                    <img src="{{asset('uploads/setting/logo.png')}}" style="width: 200px;"  alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <!-- <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li> -->
                        <!-- <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown connection">
                            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                            <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                <li class="connection-list">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/github.png" alt="" > <span>Github</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dribbble.png" alt="" > <span>Dribbble</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/dropbox.png" alt="" > <span>Dropbox</span></a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/bitbucket.png" alt=""> <span>Bitbucket</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/mail_chimp.png" alt="" ><span>Mail chimp</span></a>
                                        </div>
                                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                            <a href="#" class="connection-item"><img src="assets/images/slack.png" alt="" > <span>Slack</span></a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="conntection-footer"><a href="#">More</a></div>
                                </li>
                            </ul>
                        </li> -->
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('admin/assets/images/avatar.png')}}" alt="" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">{{ auth()->user()->name }} </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <!-- <a class="dropdown-item" href="#"><i class="fas fa-user mr-2"></i>Account</a> -->
                                <a class="dropdown-item" href="{{ route('profile.edit') }}"><i class="fas fa-cog mr-2"></i>Setting</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-power-off mr-2"></i> Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
    <!-- ============================================================== -->
    <!-- end navbar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- left sidebar -->
    <!-- ============================================================== -->
    <div class="nav-left-sidebar sidebar-dark">
        <div class="menu-list">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav flex-column">
                        <li class="nav-divider">
                            Menu
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ request()->is('dashboard') ? 'active' : '' }}" href="{{ url('dashboard') }}"><i class="fa fa-fw fa-user-circle"></i>Dashboard</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link {{ request()->is('dashboard/booking') ? 'active' : '' }}" href="{{ url('dashboard/booking') }}">
                                <i class="fas fa-fw fa-table"></i>
                                Booking
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('profile') ? 'active' : '' }}" href="{{ route('profile.edit') }}">
                                <i class="fas fa-cog "></i>
                                Profile Setting
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-power-off"></i>

                            Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        <!-- 
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>UI Elements</a>
                            <div id="submenu-2" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/cards.html">Cards <span class="badge badge-secondary">New</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/general.html">General</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/carousel.html">Carousel</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/listgroup.html">List Group</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/typography.html">Typography</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/accordions.html">Accordions</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/tabs.html">Tabs</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Chart</a>
                            <div id="submenu-3" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/chart-c3.html">C3 Charts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/chart-chartist.html">Chartist Charts</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/chart-charts.html">Chart</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/chart-morris.html">Morris</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/chart-sparkline.html">Sparkline</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/chart-gauge.html">Guage</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Forms</a>
                            <div id="submenu-4" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/form-elements.html">Form Elements</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/form-validation.html">Parsely Validations</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/multiselect.html">Multiselect</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/datepicker.html">Date Picker</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/bootstrap-select.html">Bootstrap Select</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                            <div id="submenu-5" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/general-table.html">General Tables</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-divider">
                            Features
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Pages </a>
                            <div id="submenu-6" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/blank-page.html">Blank Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/blank-page-header.html">Blank Page Header</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/login.html">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/404-page.html">404 page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/sign-up.html">Sign up Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/forgot-password.html">Forgot Password</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/pricing.html">Pricing Tables</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/timeline.html">Timeline</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/calendar.html">Calendar</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/sortable-nestable-lists.html">Sortable/Nestable List</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/widgets.html">Widgets</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/media-object.html">Media Objects</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/cropper-image.html">Cropper</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/color-picker.html">Color Picker</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Apps <span class="badge badge-secondary">New</span></a>
                            <div id="submenu-7" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/inbox.html">Inbox</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/email-details.html">Email Detail</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/email-compose.html">Email Compose</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/message-chat.html">Message Chat</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Icons</a>
                            <div id="submenu-8" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/icon-fontawesome.html">FontAwesome Icons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/icon-material.html">Material Icons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/icon-simple-lineicon.html">Simpleline Icon</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/icon-themify.html">Themify Icon</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/icon-flag.html">Flag Icons</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/icon-weather.html">Weather Icon</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-map-marker-alt"></i>Maps</a>
                            <div id="submenu-9" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/map-google.html">Google Maps</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="pages/map-vector.html">Vector Maps</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Menu Level</a>
                            <div id="submenu-10" class="collapse submenu" style="">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Level 1</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Level 2</a>
                                        <div id="submenu-11" class="collapse submenu" style="">
                                            <ul class="nav flex-column">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Level 1</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#">Level 2</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end left sidebar -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        @yield('content')
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                     Copyright ⓒ Urban Transportation 2025.
                 </div>
                        <!-- <div class="col-xl-12 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.datatables.net/1.13.8/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.8/js/dataTables.bootstrap4.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.4.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.bootstrap4.min.js"></script>

    <!-- Excel کے لیے -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.html5.min.js"></script>

    <!-- PDF کے لیے -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>

    <!-- Print + Column visibility -->
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.4.2/js/buttons.colVis.min.js"></script>

    <!-- bootstap bundle js -->
    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>
    <!-- slimscroll js -->
    <script src="{{ asset('admin/assets/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('admin/assets/libs/js/main-js.js') }}"></script>
    <!-- chart chartist js -->
    <script src="{{ asset('admin/assets/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
    <!-- sparkline js -->
    <script src="{{ asset('admin/assets/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
    <!-- morris js -->
    <script src="{{ asset('admin/assets/vendor/charts/morris-bundle/raphael.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/charts/morris-bundle/morris.js') }}"></script>
    <!-- chart c3 js -->
    <script src="{{ asset('admin/assets/vendor/charts/c3charts/c3.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
    <script src="{{ asset('admin/assets/vendor/charts/c3charts/C3chartjs.js') }}"></script>
    <script src="{{ asset('admin/assets/libs/js/dashboard-ecommerce.js') }}"></script>

    <script>
        $(document).ready(function () {
            $('#bookingsTable').DataTable({
                dom: "<'row'<'col-md-6'B><'col-md-6'f>>" +
                "<'row'<'col-12'tr>>" +
                "<'row'<'col-md-5'i><'col-md-7'p>>",
                paging: false,
                info: false,
                buttons: [
                { extend: 'copy',  text: 'Copy' },
                { extend: 'excel', text: 'Excel' },
                { extend: 'print', text: 'Print' },
                {
                  extend: 'pdfHtml5',
                  text: 'PDF',
                  orientation: 'landscape',
                  pageSize: 'A4', // ✅ A3 سب سے safe (اگر نہ چاہیں تو LEGAL رکھیں)
                  exportOptions: { columns: ':visible' },

                  customize: function (doc) {
                    doc.pageMargins = [6, 6, 6, 6];

                    doc.defaultStyle.fontSize = 9;          // ✅ مزید کم
                    doc.styles.tableHeader.fontSize = 11;

                    var tableNode = doc.content.find(function (n) { return n.table; });
                    if (!tableNode) return;

                    var body = tableNode.table.body;
                    var colCount = body[0].length;

                    // ✅ widths: پہلے columns auto, آخر والے کو بھی space دیں
                    // اگر colCount = 10 ہو تو 10 widths بن جائیں گی
                    tableNode.table.widths = Array(colCount).fill('auto');

                    // ✅ padding کم تاکہ ایک extra column بھی fit ہو جائے
                    tableNode.layout = {
                      hLineWidth: function(){ return 0.5; },
                      vLineWidth: function(){ return 0.5; },
                      paddingLeft: function(){ return 2; },
                      paddingRight: function(){ return 2; },
                      paddingTop: function(){ return 1; },
                      paddingBottom: function(){ return 1; }
                  };

                    // ✅ long text wrap ہو جائے (cut نہ ہو)
                    // (pdfmake by default wrap کرتا ہے، یہ just safe)
                }
                },

                ],
            });
        });
    </script>


</body>

</html>