<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="your_icon"/>
    <title>Bakery Admin</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style-admin.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">

    {{--//js--}}
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    {{--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>--}}
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>

    <script type="text/javascript" charset="utf8" src="{{asset('js/jquery.dataTables.js')}}"></script>

    <script src="{{asset('js/jquery-ui.js')}}"></script>

    <script src="{{asset('js/bootstrap-flash-alert.js')}}"></script>

    <script src="{{asset('js/notify.js')}}"></script>
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">
    <?php
        // dd( URL::route('infor.edit',1) );
    ?>
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('admin') }}">
            <div class="sidebar-brand-icon">
                <i class="fas fa-birthday-cake"></i>
            </div>
            <div class="sidebar-brand-text mx-3">{{trans('admin.logo')}}<sup>dat</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Dashboards Accordion Menu -->
        <li class="nav-item active">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>{{trans('admin.dashboards')}}</span>
            </a>
            <div id="collapseOne" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">{{trans('admin.da_sta')}}</h6>
                    <a class="collapse-item" href="index.html">Default Dashboard</a>
                    <a class="collapse-item" href="#">Social Dashboard</a>
                </div>
            </div>
        </li>
        <!-- Cònig Page -->
        <li class="nav-item active">
            <a class="nav-link" href="#" data-toggle="collapse" data-target="#config-page" aria-expanded="true" aria-controls="collapseOne">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Config Page</span>
            </a>
            <div id="config-page" class="collapse hide" aria-labelledby="headingOne" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Config Page ( ex: Footer, Infor )</h6>
                    <a class="collapse-item" href="{{ URL::route('infor.edit',1) }}">Infor</a>
                    <a class="collapse-item" href="#">Footer</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Components
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-folder"></i>
                <span>Pages</span>
            </a>
            <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Management:</h6>
                    <a class="collapse-item {{ substr(Route::currentRouteName(), 0, strlen('product')) =='product' ? 'active-menu' : '' }}" href="{{ url('admin/product') }}">
                        Products Management
                    </a>
                    <a class="collapse-item {{ substr(Route::currentRouteName(), 0, strlen('category')) =='category' ? 'active-menu' : '' }}" href="{{ url('admin/category') }}">
                        Categories Management
                    </a>
                    <a class="collapse-item {{ substr(Route::currentRouteName(), 0, strlen('sliders')) =='sliders' ? 'active-menu' : '' }}" href="{{ url('admin/slider') }}">Member Management</a>
                    <a class="collapse-item" href="{{ url('admin/category') }}">User Management</a>
                    <a class="collapse-item {{ substr(Route::currentRouteName(), 0, strlen('slider')) =='slider' ? 'active-menu' : '' }}" href="{{ url('admin/slider') }}">Slider Management</a>
                    <a class="collapse-item" href="{{ url('category') }}">Slider Group Management</a>
                    <div class="collapse-divider"></div>
                    <h6 class="collapse-header">Other Pages:</h6>
                    <a class="collapse-item" href="404.html">404 Page</a>
                    <a class="collapse-item" href="blank.html">Blank Page</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Addons
        </div>

        <!-- Nav Item - Charts -->
        <li class="nav-item">
            <a class="nav-link" href="charts.html">
                <i class="fas fa-fw fa-chart-area"></i>
                <span>Charts</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="tables.html">
                <i class="fas fa-fw fa-table"></i>
                <span>Tables</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <!-- Topbar Search -->
                <form class="d-none d-md-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-0 bg-light" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" style="font-size: 0.85rem;">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                                <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav mr-auto ml-md-auto">

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-bell fa-fw"></i>
                            <!-- Counter - Alerts -->
                            <span class="badge badge-danger badge-counter">9+</span>
                        </a>
                        <!-- Dropdown - Alerts -->
                        <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--grow-in" aria-labelledby="alertsDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                    <!-- Nav Item - Messages -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-envelope fa-fw"></i>
                            <!-- Counter - Messages -->
                            <span class="badge badge-danger badge-counter">7</span>
                        </a>
                        <!-- Dropdown - Messages -->
                        <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--grow-in" aria-labelledby="messagesDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{--<img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">--}}
                            {{ ucfirst(Auth::user()->name) }}
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right border-0 shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ url('admin/user/'.Auth::user()->id)}}">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                Settings
                            </a>
                            <a class="dropdown-item" href="{{ url('admin/user/'.Auth::user()->id)}}">
                                <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                Activity Log
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal" >
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>

                </ul>

                <!-- Sidebar Toggle (Topbar) -->
                <button id="sidebarToggleTop" class="btn btn-link d-md-none">
                    <i class="fa fa-bars"></i>
                </button>

            </nav>
            <!-- End of Topbar -->

            <!-- /.container-fluid -->
            @yield('content')
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; DatVL 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a>
            </div>
        </div>
    </div>
</div>

{{--js--}}

<script>
    $(document).ready( function () {
        var start_status = '';
        var end_status = '';
        $('#listProduct').DataTable({
            paging: false,
            searching:false,
            "bInfo": false,
        });
        $( "#not-sale, #for-sale" ).sortable({
            connectWith: ".connectedSortable",
            sort: function(e){
                start_status = $(this).attr('status');
            },
            update: function(e, ui) {
                end_status = $(this).attr('status');
                var id = $(ui.item).attr('value');
                if(start_status != end_status){
                    console.log(id);
                    // console.log(start_status, end_status);
                    // var project_id = $('#project_id').val();
                    $.ajax({
                        type: "GET",
                        url: 'post-sale',
                        dataType: "json",
                        data: {
                            'id': id,
                            'field': 'is_sale',
                            'is_sale': end_status,
                        },
                        success: function (data) {
                            console.log(data);
                            $.notify("Move to Sale Products", "success");
                        },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });
                }
            }
        }).disableSelection();

        $.notify('{{ session()->get('message') }}', "success");

    } );
</script>
</body>

</html>
