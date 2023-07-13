</div>

<!-- BEGIN PAGA BACKDROPS-->
<div class="sidenav-backdrop backdrop"></div>
<div class="preloader-backdrop">
    <div class="page-preloader">Loading</div>
</div>
<!-- END PAGA BACKDROPS-->
<!-- CORE PLUGINS-->
<script src="{{ asset('assets/cms/vendors/jquery/dist/jquery.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/cms/vendors/popper.js/dist/umd/popper.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/cms/vendors/bootstrap/dist/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/cms/vendors/metisMenu/dist/metisMenu.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/cms/vendors/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<!-- PAGE LEVEL PLUGINS-->
<script src="{{ asset('assets/cms/vendors/chart.js/dist/Chart.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/cms/vendors/jvectormap/jquery-jvectormap-2.0.3.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/cms/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/cms/vendors/jvectormap/jquery-jvectormap-us-aea-en.js')}}" type="text/javascript"></script>
<!-- CORE SCRIPTS-->
<script src="{{ asset('assets/cms/js/app.min.js')}}" type="text/javascript"></script>
<!-- PAGE LEVEL SCRIPTS-->
<script src="{{ asset('assets/cms/js/scripts/dashboard_1_demo.js')}}" type="text/javascript"></script>


<script src="{{ asset('assets/cms/test/jquery-migrate-1.2.1.min.js') }}"></script>
@show
<script>
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
</script>
<!-- jquery notify -->
<script src="{{ asset('assets/cms/plugin/jquery-notify/notify.min.js')}}"></script>

<script src="{{ asset('assets/cms/dm_js/app.js') }}"></script>

<script src="{{ asset('assets/cms/plugin/toastr-master/toastr.js') }}"></script>

<!-- Nepali unicode cdn -->
<script src="https://unpkg.com/nepalify"></script>

<script type="text/javascript">

   

    toastr.options = {
        "closeButton": true,
        "debug": false,
        "progressBar": false,
        "positionClass": "toast-bottom-right",
        "onclick": null,
        "showDuration": "300",
        "hideDuration": "1000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
</script>
@yield('scripts')</body>
@include('admin.section.flash-message')
</html>