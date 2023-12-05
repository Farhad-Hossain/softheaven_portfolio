<!DOCTYPE html>
<html lang="en">
  
  <head>
    <title>Blank Page - Vali Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('b')}}/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    @yield('styles')
  </head>

  <body class="app sidebar-mini">
    @include('layouts.admin.navbar')
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    @include('layouts.admin.aside')
    <main class="app-content">
      <div class="app-title">
        <div>
          <p><i class="bi bi-speedometer"></i> Blank Page</p>
          <p>Start a beautiful journey here</p>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="bi bi-house-door fs-6"></i></li>
          <li class="breadcrumb-item"><a href="#">Blank Page</a></li>
        </ul>
      </div>
      
      <div class="row">
        <div class="col-md-12">
          @yield('content')
        </div>
      </div>
    </main>

    <!-- Essential javascripts for application to work-->
    <script src="{{asset('b')}}/js/jquery-3.7.0.min.js"></script>
    <script src="{{asset('b')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('b')}}/js/main.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript"></script>
    @yield('scripts')
  </body>
</html>