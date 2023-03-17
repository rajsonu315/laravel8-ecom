<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>admin</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('admincom/favicon.ico')}}">
    <link rel="icon" href="{{asset('admincom/favicon.ico')}}" type="image/x-icon">
    <!-- Morris Charts CSS -->
    <link href="{{asset('admincom/bower_components/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />
    	<!-- Bootstrap Wysihtml5 css -->
	<link rel="stylesheet"
    href="{{asset('admincom/bower_components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.css')}}" />


    <!-- Data table CSS -->
    <link href="{{asset('admincom/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('admincom/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('admincom/dist/css/style.css')}}" rel="stylesheet" type="text/css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader-it">
        <div class="la-anim-1"></div>
    </div>
    <!-- /Preloader -->
    <div class="wrapper theme-4-active pimary-color-red">
        <!-- Top Menu Items -->
    @include('admin.include.header')
        <!-- /Top Menu Items -->

        <!-- Left Sidebar Menu -->
   @include('admin.include.sidebar');
        <!-- /Left Sidebar Menu -->


    

        <!-- Right Sidebar Backdrop -->
        <div class="right-sidebar-backdrop"></div>
        <!-- /Right Sidebar Backdrop -->

        <!-- Main Content -->
    @yield('master')
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

    <!-- JavaScript -->

    <!-- jQuery -->
    <script src="{{asset('admincom/bower_components/jquery/dist/jquery.min.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('admincom/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>


    	<!-- wysuhtml5 Plugin JavaScript -->
	<script src="{{url('admincom/bower_components/wysihtml5x/dist/wysihtml5x.min.js')}}"></script>

	<script src="{{url('admincom/bower_components/bootstrap3-wysihtml5-bower/dist/bootstrap3-wysihtml5.all.js')}}"></script>

	<!-- Fancy Dropdown JS -->

	<!-- Bootstrap Wysuhtml5 Init JavaScript -->
	<script src="{{url('admincom/dist/js/bootstrap-wysuhtml5-data.js')}}"></script>

	<!-- Data table JavaScript -->
	<script src="{{url('admincom/dist/js/dataTables-data.js')}}"></script>


    <!-- Data table JavaScript -->
    <script src="{{asset('admincom/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>

    <!-- Slimscroll JavaScript -->
    <script src="{{asset('admincom/dist/js/jquery.slimscroll.js')}}"></script>

    <!-- simpleWeather JavaScript -->
    <script src="{{asset('admincom/bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('admincom/bower_components/simpleWeather/jquery.simpleWeather.min.js')}}"></script>
    <script src="{{asset('admincom/dist/js/simpleweather-data.js')}}"></script>

    <!-- Progressbar Animation JavaScript -->
    <script src="{{asset('admincom/bower_components/waypoints/lib/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('admincom/bower_components/jquery.counterup/jquery.counterup.min.js')}}"></script>

    <!-- Fancy Dropdown JS -->
    <script src="{{asset('admincom/dist/js/dropdown-bootstrap-extended.js')}}"></script>

    <!-- Sparkline JavaScript -->
    <script src="{{asset('admincom/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>

    <!-- Owl JavaScript -->
    <script src="{{asset('admincom/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>

    <!-- ChartJS JavaScript -->
    <script src="{{asset('admincom/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admincom/dist/js/productorders-data.js')}}"></script>
    <!-- Morris Charts JavaScript -->
    <script src="{{asset('admincom/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('admincom/bower_components/morris.js/morris.min.js')}}"></script>
    <script src="{{asset('admincom/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>

    <!-- Switchery JavaScript -->
    <script src="{{asset('admincom/bower_components/switchery/dist/switchery.min.js')}}"></script>

    <!-- Init JavaScript -->
    <script src="{{asset('admincom/dist/js/init.js')}}"></script>
    <script src="{{asset('admincom/dist/js/dashboard-data.js')}}"></script>






</body>



</html>
