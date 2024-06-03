<!doctype html>
    <html>
    <head>
       @include('web.frontend.includes.head')
    </head>
    <body>

           <script src="{{asset('assets/web/frontend/vendor/js/dropdown-hover.js')}}"></script>
           <script src="{{asset('assets/web/frontend/vendor/js/mega-dropdown.js')}}"></script>
           @include('web.frontend.includes.header')
           <div data-bs-spy="scroll" class="scrollspy-example">
            @yield('content')
           </div>
           @include('web.frontend.includes.footer')
  
  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="{{asset('assets/web/frontend/vendor/libs/popper/popper.js')}}"></script>
  <script src="{{asset('assets/web/frontend/vendor/js/bootstrap.js')}}"></script>
  
  <!-- endbuild -->

  <!-- Vendors JS -->
  <script src="{{asset('assets/web/frontend/vendor/libs/nouislider/nouislider.js')}}"></script>
  <script src="{{asset('assets/web/frontend/vendor/libs/swiper/swiper.js')}}"></script>

  <!-- Main JS -->
  <script src="{{asset('assets/web/frontend/js/front-main.js')}}"></script>
  

  <!-- Page JS -->
  <script src="{{asset('assets/web/frontend/js/front-page-landing.js')}}"></script>
    </body>
    </html>