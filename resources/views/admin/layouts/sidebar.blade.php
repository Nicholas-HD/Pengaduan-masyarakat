<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pengaduan masyarakat </title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('template/css/sb-admin-2.min.css') }}"
rel="stylesheet">

 <!-- Custom styles for this page -->
    <link href="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
   
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ url('/admin') }}">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Pengaduan</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

              
            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ '/category' }}">
                    <i class="fas fa-fw fa-book"></i>
                    <span>kosong</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="{{ '/food' }}">
                    <i class="fas fa-fw fa-table"></i>
                    <span>kosong</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRole"
                    aria-expanded="true" aria-controls="collapseRole">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Role</span>
                </a>
                <div id="collapseRole" class="collapse" aria-labelledby="headingRole" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Settings Role user</h6>
                        <a class="collapse-item" href="{{ route('role.index') }}">All Role</a>
                        <a class="collapse-item" href="{{ route('role.create') }}">Create Role</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRolePermission"
                    aria-expanded="true" aria-controls="collapseRole">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Permission</span>
                </a>
                <div id="collapseRolePermission" class="collapse" aria-labelledby="headingRole" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Settings Permission</h6>
                        <a class="collapse-item" href="{{ route('permission.index') }}">Permission</a>
                        <a class="collapse-item" href="{{ route('permission.create') }}">Create Permission</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseRolePengaduan"
                    aria-expanded="true" aria-controls="collapseRole">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pengaduan</span>
                </a>
                <div id="collapseRolePengaduan" class="collapse" aria-labelledby="headingRole" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Settings Pengaduan</h6>
                        <a class="collapse-item" href="{{ route('pengaduan.index') }}">Pengaduan</a>
                        <a class="collapse-item" href="{{ route('pengaduan.create') }}">Create Pengaduan</a>
                    </div>
                </div>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
               
               
            </div>
        </ul>
        <!-- End of Sidebar -->