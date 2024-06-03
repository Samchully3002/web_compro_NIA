<!doctype html>
    <html>
    <head>
       @include('web.backend.includes.head')
    </head>
    <body>
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
      @include('web.backend.includes.header')
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
                @yield('content')
            </div>
            <!-- / Content -->

            @include('web.backend.includes.footer')
            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>  
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->

    <script src=" {{asset('assets/web/backend/assets/vendor/libs/jquery/jquery.js')}}"></script>
    <script src=" {{asset('assets/web/backend/assets/vendor/libs/popper/popper.js')}}"></script>
    <script src=" {{asset('assets/web/backend/assets/vendor/js/bootstrap.js')}}"></script>
    <script src=" {{asset('assets/web/backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src=" {{asset('assets/web/backend/assets/vendor/js/menu.js')}}"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="{{asset('assets/web/backend/assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>

    <!-- Main JS -->
    <script src="{{asset('assets/web/backend/assets/js/main.js')}}"></script>

    <!-- Page JS -->
    <script src="{{asset('assets/web/backend/assets/js/dashboards-analytics.js')}}"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>


    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>

    <script>
$( document ).ready(function() {
        
        var table = $('.videos-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('admin.list.videos') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'title', name: 'title'},
              {data: 'description', name: 'description'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });

      // var table = $('.news-table').DataTable({
      //     processing: true,
      //     serverSide: true,
      //     ajax: "{{ route('admin.list.news') }}",
      //     columns: [
      //         {data: 'id', name: 'id'},
      //         {data: 'title', name: 'title'},
      //         {data: 'description', name: 'description'},
      //         {data: 'action', name: 'action', orderable: false, searchable: false},
      //     ]
      // });
          
    });
</script>
    <!-- <script type="text/javascript" src="{{asset('assets/web/backend/assets/js/pages/media-videos.js')}}"></script> -->
    </body>
    </html>