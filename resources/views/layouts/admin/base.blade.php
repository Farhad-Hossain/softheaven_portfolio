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
    <script src="https://unpkg.com/htmx.org@1.9.10" integrity="sha384-D1Kt99CQMDuVetoL1lrYwg5t+9QdHe7NLX/SoJYkXDFfX37iInKRy5xLSi8nO7UC" crossorigin="anonymous"></script>
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
          
          <div id="content">
          @yield('content')


          <div class="modal fade" tabindex="-1" role="dialog" id="baseModal">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="base-modal-title"></h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body" id="modal-body">
                  
                </div>
              </div>
            </div>
          </div>      
        </div>
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
      })

      function ckEditor(id)
      {
        ClassicEditor
            .create( document.querySelector( "#"+id ) )
            .catch( error => {
                console.error( error );
            } );
      }

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

      function riseModal(title="", component)
      {
        $(`#base-modal-title`).text(title);
        $(`#baseModal #modal-body`).empty().append( $(`#`+component).html() );
        $(`#baseModal`).modal('show');
      }
    </script>
    @stack('js')
  </body>
</html>