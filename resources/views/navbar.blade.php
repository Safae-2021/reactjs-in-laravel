<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}">
     <link href="{{asset('assets/vendor/fonts/circular-std/style.css" rel="stylesheet')}}">
     <link rel="stylesheet" href="{{asset('assets/libs/css/style.css')}}">
     <link rel="stylesheet" href="{{asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
     <link rel="stylesheet" href="{{asset('assets/vendor/charts/morris-bundle/morris.css')}}">
     <link rel="stylesheet" href="{{asset('assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <title>Navbar</title>
    @viteReactRefresh
    @vite(['resources/css/app.css','resources/js/app.jsx'])
</head>
<body>
    
    <div id="navbar">

    </div>

      <!-- Optional JavaScript -->
	                    <!-- jquery 3.3.1 -->
	                    <script src="{{asset('assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
	                    <!-- bootstap bundle js -->
	                    <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
	                    <!-- slimscroll js -->
	                    <script src="{{asset('assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
	                    <!-- main js -->
	                    <script src="{{asset('assets/libs/js/main-js.js')}}"></script>
	                    <!-- morris-chart js -->
	                    <script src="{{asset('assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
	                    <script src="{{asset('assets/vendor/charts/morris-bundle/morris.js')}}"></script>
	                    <script src="{{asset('assets/vendor/charts/morris-bundle/morrisjs.html')}}"></script>
	                    <!-- chart js -->
	                    <script src="{{asset('assets/vendor/charts/charts-bundle/Chart.bundle.js')}}"></script>
	                    <script src="{{asset('assets/vendor/charts/charts-bundle/chartjs.js')}}"></script>
	                    <!-- dashboard js -->
	                    <script src="{{asset('assets/libs/js/dashboard-influencer.js')}}"></script>
</body>
</html>