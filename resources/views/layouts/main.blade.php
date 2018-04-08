<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Team Chant</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/metismenu.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

        <script src="{{ asset('assets/js/modernizr.min.js') }}" defer></script>

    </head>


    <body>

      <!-- Begin page -->
      <div id="wrapper">

          <!-- Top Bar Start -->
          @include( 'layouts.topbar' );
          <!-- Top Bar End -->


          <!-- ========== Left Sidebar Start ========== -->
          @include( 'layouts.leftnav' );
          <!-- Left Sidebar End -->


          <!-- ============================================================== -->
          <!-- Start right Content here -->
          <!-- ============================================================== -->
          <div class="content-page">
              <!-- Start content -->
              <div class="content">
                  <div class="container-fluid" style="margin-top: -22px;">
                      @yield('content')
                  </div>
              </div> <!-- content -->

              <footer class="footer text-right">
                  2018 © Team Chant
              </footer>

          </div>


          <!-- ============================================================== -->
          <!-- End Right content here -->
          <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="{{ asset('assets/js/jquery.min.js') }}" defer></script>
        <script src="{{ asset('assets/js/popper.min.js') }}" defer></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}" defer></script>
        <script src="{{ asset('assets/js/metisMenu.min.js') }}" defer></script>
        <script src="{{ asset('assets/js/waves.js') }}" defer></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}" defer></script>
        <script src="{{ asset('plugins/waypoints/lib/jquery.waypoints.min.js') }}" defer></script>
        <script src="{{ asset('plugins/counterup/jquery.counterup.min.js') }}" defer></script>

        <!-- Chart JS -->
        <script src="{{ asset('plugins/chart.js/chart.bundle.js') }}" defer></script>

        <!-- init dashboard -->
        <script src="{{ asset('assets/pages/jquery.dashboard.init.js') }}" defer></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/jquery.core.js') }}" defer></script>
        <script src="{{ asset('assets/js/jquery.app.js') }}" defer></script>

    </body>
</html>
