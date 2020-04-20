<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<!-- For IE -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- For Resposive Device -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Home |  @yield('title') </title>

	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="16x16" href="{{asset('images/front_img/home/footer-logo.png')}}">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="{{url('css/bootstrap/bootstrap.css')}}" media="screen">

	<!-- Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Alegreya:400,400italic,700,900,700italic,900italic' rel='stylesheet' type='text/css'>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{url('css/fonts/font-awesome/css/font-awesome.min.css')}}">

	<!-- Flat-icon -->
	<link rel="stylesheet" type="text/css" href="{{url('css/fonts/flat-icon/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/fonts/flat-icon-2/flaticon.css')}}">

	<!-- Vendor css -->
	<link rel="stylesheet" type="text/css" href="{{url('css/settings.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/layers.css')}}">
	<link rel="stylesheet" type="text/css" href="{{url('css/navigation.css')}}">

	<!-- Important Owl stylesheet -->
	<link rel="stylesheet" href="{{url('css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{url('css/owl.theme.css')}}">

	<!-- jQuery ui css -->
	<link rel="stylesheet" type="text/css" href="{{url('css/jquery-css/jquery-ui.css')}}">

	<!-- ================== Custom Css ==================== -->
	<!-- Main theme Style Sheet  -->
	<link rel="stylesheet" type="text/css" href="{{url('css/custom/style.css')}}">
    <link rel="stylesheet" href="{{url('css/jquery.gridder.min.css')}}">

	<!-- Color changer style sheet -->
	<!-- <link type="text/css" rel="stylesheet" id="jssDefault" href="css/custom/theme-2.css"/> -->

	<!-- Responsive file -->
	<link rel="stylesheet" type="text/css" href="{{url('css/responsive/responsive.css')}}">
    <style>
        .content{
            display: none;
        }
    </style>
</head>
<body class="home layout_changer">
<!-- =================================== Main body Wrapper =========================== -->

<div class="body_wrapper">

        <!-- pre loader  -->

	 	<div id="loader-wrapper">
			<div id="loader"></div>
		</div>

<!-- ====================== Header ===================== -->
        @include('layouts.frontend.header')
<!-- ====================== /Header ===================== -->

<!-- ======================= Menu ======================== -->
        @include('layouts.frontend.menu')
<!-- ======================= /Menu ======================== -->


 @yield('contents')


<!-- ==================== Banner ===================== -->

<!--  ============================ /Our partners =================== -->

    <!-- ========================= Footer ======================= -->
    @include('layouts.frontend.footer')
    <!-- ========================= /Footer ======================= -->
</div>
	<!-- ======================= Js File ====================== -->

	<!-- j Query -->
	<script type="text/javascript" src="{{url('js/jquery-2.1.4.js')}}"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<!-- Bootstrap JS -->
	<script type="text/javascript" src="{{url('js/bootstrap.min.js')}}"></script>

	<!-- ====================== Vendor js=================== -->

	<!-- revolution slider js -->
	<script src="{{url('js/jquery.themepunch.tools.min.js')}}"></script>
	<script src="{{url('js/jquery.themepunch.revolution.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/revolution.extension.slideanims.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/revolution.extension.layeranimation.min.js')}}"></script>
	<script type="text/javascript" src="{{url('js/revolution.extension.navigation.min.js')}}"></script>

	<!-- owl.carousel js -->
	<script src="{{url('js/owl.carousel.min.js')}}"></script>

    <!-- counterup js -->
	<script src="{{url('js/jquery.counterup.min.js')}}"></script>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

	<!-- appear js -->
	<script src="{{url('js/jquery.appear.js')}}"></script>
	<!-- jQuery ui js -->
	<script type="text/javascript" src="{{url('js/jquery-ui.min.js')}}"></script>
	<!-- count to -->
	<script src="{{url('js/jquery.countTo.js')}}"></script>
	<script src="{{url('js/validate.js')}}"></script>


	<script type="text/javascript" src="{{url('js/main.js')}}"></script>
	<script type="text/javascript" src="{{url('js/script.js')}}"></script>

    @yield('scripts')


</body>
</html>
	<!-- ====================== Vendor js=================== -->







