<!DOCTYPE html>
<html lang="en">
<head>
@include('dashboard.includes.style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
    <!-- Right navbar links -->
    @include('dashboard.includes.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('dashboard.includes.sidebar')

    <div class="content-wrapper">
        @yield('content')
    </div>



    @include('dashboard.includes.script')

    </div>
</body>
