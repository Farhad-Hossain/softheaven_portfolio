<!DOCTYPE html>
<html lang="en">
  
  <head>
    <title>{{ $title ?? 'Admin' }}</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('b')}}/css/main.css">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    @yield('styles')
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
          @if ($errors->any())
          <div class="card">
            <div class="card-header">Errors:</div>
            <div class="card-body">
            
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
            </div>
          </div>
          @endif

          @if (session('success'))
              <div class="alert alert-success">
                  <b>{{ session('success') }}</b>
              </div>
          @endif

          @if (session('error'))
              <div class="alert alert-danger">
                  <b>{{ session('error') }}</b> 
              </div>
          @endif
          
          @yield('content')
        </div>
      </div>
    </main>

    <!-- Essential javascripts for application to work-->
    <script src="{{asset('b')}}/js/jquery-3.7.0.min.js"></script>
    <script src="{{asset('b')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('b')}}/js/main.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready(function () {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        function getJson(url, method='GET', data={}) {
            return JSON.parse($.ajax({
                type: method,
                url: url,
                data: data,
                dataType: 'json',
                global: false,
                async: false,
                success: function (data) {
                    return data;
                }
            }).responseText);
        }
        var obj = {};
        var ids = $("[id]");
        ids.each(function (ind, el) {
          idValue = $(el).attr('id');
          if ( idValue !== '' ) {
            console.log( idValue )
          }
        });
      })

      function ckEditor(id)
      {
        ClassicEditor
            .create( document.querySelector( "#"+id ) )
            .catch( error => {
                console.error( error );
            } );
      }
    </script>

    @stack('js')

    <script>

        
    </script>
    
  </body>
</html>