<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="News - Clean HTML5 and CSS3 responsive template">
<meta name="author" content="MyPassion">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>News - Responsive HTML5 and CSS3 template</title>

<link rel="shortcut icon" href="public/front/img/sms-4.ico" />

<!-- STYLES -->
<link rel="stylesheet" type="text/css" href="public/front/css/superfish.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="public/front/css/fontello/fontello.css" />
<link rel="stylesheet" type="text/css" href="public/front/css/flexslider.css" media="screen" />
<link rel="stylesheet" type="text/css" href="public/front/css/ui.css" />
<link rel="stylesheet" type="text/css" href="public/front/css/base.css" />
<link rel="stylesheet" type="text/css" href="public/front/css/style.css" />
<link rel="stylesheet" type="text/css" href="public/front/css/960.css" />
<link rel="stylesheet" type="text/css" href="public/front/css/devices/1000.css" media="only screen and (min-width: 768px) and (max-width: 1000px)" />
<link rel="stylesheet" type="text/css" href="public/front/css/devices/767.css" media="only screen and (min-width: 480px) and (max-width: 767px)" />
<link rel="stylesheet" type="text/css" href="public/front/css/devices/479.css" media="only screen and (min-width: 200px) and (max-width: 479px)" />
<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]> <script type="text/javascript" src="js/customM.js"></script> <![endif]-->


</head>

<body>

<!-- Body Wrapper -->
<div class="body-wrapper">
	<div class="controller">
        <div class="controller2">
            @include('layout.header')

            <!-- Page Content -->
            @yield('content')
            <!-- /#page-wrapper -->

            @include('layout.footer')
        
        </div>
	</div>
</div>
<!-- / Body Wrapper -->


<!-- SCRIPTS -->
<script type="text/javascript" src="public/front/js/jquery.js"></script>
<script type="text/javascript" src="public/front/js/easing.min.js"></script>
<script type="text/javascript" src="public/front/js/1.8.2.min.js"></script>
<script type="text/javascript" src="public/front/js/ui.js"></script>
<script type="text/javascript" src="public/front/js/carouFredSel.js"></script>
<script type="text/javascript" src="public/front/js/superfish.js"></script>
<script type="text/javascript" src="public/front/js/customM.js"></script>
<script type="text/javascript" src="public/front/js/flexslider-min.js"></script>
<script type="text/javascript" src="public/front/js/jtwt.min.js"></script>
<script type="text/javascript" src="public/front/js/jflickrfeed.min.js"></script>
<script type="text/javascript" src="public/front/js/mobilemenu.js"></script>

<!--[if lt IE 9]> <script type="text/javascript" src="js/html5.js"></script> <![endif]-->
<script type="text/javascript" src="public/front/js/mypassion.js"></script>

</body>
</html>
