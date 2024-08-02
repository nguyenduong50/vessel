<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Gnmarine.online</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('frontend/images/favicon.ico')}}" />

        <!-- App css -->
        <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
        <link href="{{asset('frontend/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('frontend/css/app.min.css')}}" rel="stylesheet" type="text/css" id="app-stylesheet" />

        <!-- Datatable JS -->
        <!-- <link href="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.css" rel="stylesheet"> -->

        <link href="{{asset('frontend/libs/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('frontend/libs/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('frontend/libs/datatables/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('frontend/libs/datatables/fixedHeader.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('frontend/libs/datatables/scroller.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('frontend/libs/datatables/dataTables.colVis.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('frontend/libs/datatables/fixedColumns.bootstrap4.min.css')}}" rel="stylesheet" type="text/css">

        <style>
            .dataTables_wrapper .dataTables_paginate .paginate_button {
                padding: 1px !important;
            }
            .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
                background-color: #fff !important;
                border: 0px !important;
                background: linear-gradient(to bottom, #fff 0%, #fff 100%) !important;
            }

            div.dataTables_wrapper div.dataTables_length select {
                width: 50px;
            }
            #datatable-buttons, #datatable-fixed-header, #datatable{
                text-transform: uppercase;
                font-size: 14px;
            }
        </style>
        <!-- JQuery -->
        <script type="text/javascript" src="{{asset('frontend/js/jquery-3.5.1.min.js')}}"></script>
    </head>

    <body>
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Topbar Start -->
            <div class="navbar-custom">
                <ul class="list-unstyled topnav-menu float-right mb-0">
                    <li class="dropdown notification-list">
                        <a class="nav-link dropdown-toggle nav-user mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            @if(Auth::user()->avatar !== null)
                                <img src="{{asset('frontend/images/users/'.Auth::user()->avatar)}}" alt="user-image" class="rounded-circle" />
                            @else
                                <img src="{{asset('frontend/images/users/avatar.png')}}" alt="user-image" class="rounded-circle" />
                            @endif

                            <span class="d-none d-sm-inline-block ml-1">{{Auth::user()->name}}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right profile-dropdown">
                            <!-- item-->
                            <div class="dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome !</h6>
                            </div>

                            <!-- item-->
                            <a href="{{route('user.edit', Auth::user()->id)}}" class="dropdown-item notify-item">
                                <i class="mdi mdi-account-outline"></i>
                                <span>Profile</span>
                            </a>

                            <div class="dropdown-divider"></div>

                            <!-- item-->
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item notify-item">
                                <i class="mdi mdi-logout-variant"></i>
                                <span>Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>

                    <!-- <li class="dropdown notification-list">
                        <a href="#" class="nav-link right-bar-toggle waves-effect">
                            <i class="mdi mdi-settings noti-icon"></i>
                        </a>
                    </li> -->
                </ul>

                <!-- LOGO -->
                <div class="logo-box">
                    <a href="index.html" class="logo text-center">
                        <span class="logo-lg">
                            <img src="{{asset('frontend/images/logo-light.png')}}" alt="" height="28" />
                            <!-- <span class="logo-lg-text-light">Zircos</span> -->
                        </span>
                        <span class="logo-sm">
                            <!-- <span class="logo-sm-text-dark">Z</span> -->
                            <img src="{{asset('frontend/images/logo-sm.png')}}" alt="" height="24" />
                        </span>
                    </a>
                </div>

                <ul class="list-unstyled topnav-menu topnav-menu-left m-0">
                    <li>
                        <button class="button-menu-mobile waves-effect">
                            <i class="mdi mdi-menu"></i>
                        </button>
                    </li>

                    <li class="dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle mr-0 waves-effect" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <!-- <img src="{{asset('frontend/images/flags/us.jpg')}}" alt="user-image" class="mr-1" height="12" /> <span class="align-middle">English <i class="mdi mdi-chevron-down"></i> </span> -->
                        </a>
                        <div class="dropdown-menu">
                            <a href="" class="dropdown-item notify-item"> <img src="{{asset('frontend/images/flags/us.jpg')}}" alt="user-image" class="mr-1" height="12" /> <span class="align-middle">English</span> </a>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">
                <div class="slimscroll-menu">
                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <ul class="metismenu" id="side-menu">
                            <!-- <li class="menu-title">Navigation</li> -->

                            <li>
                                <a href="{{route('home')}}" class="waves-effect waves-light">
                                    <i class="mdi mdi-view-dashboard"></i>
                                    <!-- <span class="badge badge-success badge-pill float-right">2</span> -->
                                    <span> Home </span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="waves-effect waves-light">
                                    <i class="mdi mdi-account-convert"></i>
                                    <span> User Account </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('user.index')}}">User List</a></li>
                                    <li><a href="{{route('user.create')}}">Create New User</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="waves-effect waves-light">
                                    <i class="mdi mdi-layers"></i>
                                    <span> Company </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('company.index')}}">Company List</a></li>
                                    <li><a href="{{route('company.create')}}">Create New Company</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="waves-effect waves-light">
                                    <i class="mdi mdi-ship-wheel"></i>
                                    <span> Vessels </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('vessel.index')}}">Vessel List</a></li>
                                    <li><a href="{{route('vessel.create')}}">Create New Vessel</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="waves-effect waves-light">
                                    <i class="ion ion-md-exit"></i>
                                    <span> Logout </span>
                                </a>                               
                            </li>
                        </ul>
                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->
            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <!-- <li class="breadcrumb-item"><a href="#">Pinaweb</a></li>
                                            <li class="breadcrumb-item"><a href="#">Admin</a></li> -->
                                        </ol>
                                    </div>
                                    <h4 class="page-title"></h4>
                                </div>
                            </div>
                        </div>
                        <!-- Content -->
                        @yield('content')
                    </div>
                </div>
                <!-- end content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12"> <a href=""></a></div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->
            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <!-- <div class="right-bar">
            <div class="rightbar-title">
                <a href="#" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h4 class="font-16 m-0 text-white"></h4>
            </div>
            <div class="slimscroll-menu">
            </div>
        </div> -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>


        <!-- Vendor js -->
        <script src="{{asset('frontend/js/vendor.min.js')}}"></script>

        <script src="{{asset('frontend/libs/morris-js/morris.min.js')}}"></script>
        <script src="{{asset('frontend/libs/raphael/raphael.min.js')}}"></script>

        <script src="{{asset('frontend/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('frontend/js/app.min.js')}}"></script>

        <!-- Datatable JS -->
        <!-- <script src="https://cdn.datatables.net/v/dt/dt-1.13.6/datatables.min.js"></script> -->
        <script>
            let table = new DataTable('#vesselTable');
            let table1 = new DataTable('#userTable');
            let table2 = new DataTable('#companyTable');
        </script>

        <!-- Datatable plugin js -->
        <script src="{{asset('frontend/libs/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('frontend/libs/datatables/dataTables.bootstrap4.min.js')}}"></script>

        <script src="{{asset('frontend/libs/datatables/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('frontend/libs/datatables/responsive.bootstrap4.min.js')}}"></script>

        <script src="{{asset('frontend/libs/datatables/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('frontend/libs/datatables/buttons.bootstrap4.min.js')}}"></script>

        <script src="{{asset('frontend/libs/datatables/buttons.html5.min.js')}}"></script>
        <script src="{{asset('frontend/libs/datatables/buttons.print.min.js')}}"></script>

        <script src="{{asset('frontend/libs/datatables/dataTables.keyTable.min.js')}}"></script>
        <script src="{{asset('frontend/libs/datatables/dataTables.fixedHeader.min.js')}}"></script>
        <script src="{{asset('frontend/libs/datatables/dataTables.scroller.min.js')}}"></script>
        <script src="{{asset('frontend/libs/datatables/dataTables.fixedColumns.min.js')}}"></script>

        <script src="{{asset('frontend/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{asset('frontend/libs/pdfmake/pdfmake.min.js')}}"></script>
        <script src="{{asset('frontend/libs/pdfmake/vfs_fonts.js')}}"></script>

        <!-- Datatables init -->
        <script src="{{asset('frontend/js/pages/datatables.init.js')}}"></script>
    </body>
</html>
