<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Lịch thi</title>
    <link rel="stylesheet" type="text/css"  
        href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}"/>
    <link rel="stylesheet" type="text/css"  
        href="{{ asset('admin/css/admin.css') }}"/>
    <link rel="stylesheet" type="text/css" 
        href="{{ asset('lib/css/font-awesome.min.css') }}"/>
    <link href="{{ asset('admin/metisMenu/metisMenu.min.css') }}" 
        rel="stylesheet">
    <link href="{{ asset('admin/datatables-plugins/dataTables.bootstrap.css') }}" 
        rel="stylesheet">
    <link href="{{ asset('admin/datatables-responsive/dataTables.responsive.css') 
        }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css"  
        href="{{ asset('admin/css/sb-admin-2.css') }}"/>
    <link rel="stylesheet" type="text/css" 
        href="{{ asset('admin/js/datepicker/css/datepicker.css') }}"/>
</head>
<body>

    <div id="wrapper">
        
    <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ route('admin.test.list') }}">Giao diện Admin</a>
            </div>
            <div class="dropdown nav navbar-top-links navbar-right">
                <button class="btn btn-primary dropdown-toggle" type="button" 
                    data-toggle="dropdown">
                    <i class="glyphicon glyphicon-user"></i>
                    <span class="caret"></span></button>
                <ul class="dropdown-menu">
                    {{-- <li style="padding-left: 20px;">{{ Auth::user()->user_name }}
                        </li>
                    <li><a href="{{ route("admin.user.update", 
                        ['id'=> Auth::user()->id]) }}">Sửa Profile</a></li>
                    <li class="input-logout">
                        <a href="{{ route('admin.logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="{{ route('admin.logout') }}" 
                            method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li> --}}
                </ul>
            </div>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Lịch thi<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.test.list') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.test.add') }}">Thêm mới</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Sinh viên<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.student.list') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.student.add') }}">Thêm mới</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Môn học<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="{{ route('admin.class.list') }}">Danh sách</a>
                                </li>
                                <li>
                                    <a href="{{ route('admin.class.add') }}">Thêm mới</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        @yield("content")
    </div>
    
    <script src="{{ asset('lib/bootstrap/js/jquery.min.js') }}"></script>
    <script src="{{ asset('lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/metisMenu/metisMenu.min.js') }}"></script>
    <script src="{{ asset('admin/datatables/js/jquery.dataTables.min.js')
        }}"></script>
    <script src="{{ asset('admin/datatables-plugins/dataTables.bootstrap.min.js') 
        }}"></script>
    <script src="{{ asset('admin/datatables-responsive/dataTables.responsive.js') 
        }}"></script>
    <script src="{{ asset('admin/js/sb-admin-2.js') }}"></script>
    <script src="{{ asset('admin/js/admin.js') }}"></script>
    <script src="{{ asset('admin/js/datepicker/js/bootstrap-datepicker.js') }}" 
        type="text/javascript" language="javescript"></script>
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
</body>
</html>