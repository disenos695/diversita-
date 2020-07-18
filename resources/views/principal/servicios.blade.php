<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DIVERSITA | SERVICIOS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />


	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('css/flexslider.css') }}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css') }}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('css/style.css') }}">

	<!-- Modernizr JS -->
	<script src="{{ asset('js/modernizr-2.6.2.min.js') }}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

    <!-- Estilo de wpp -->
	<style>
		.btn-whatsapp {
		       display:block;
		       width:70px;
		       height:135px;
		       color:#fff;
		       position: fixed;
		       right:20px;
		       bottom:20px;
		       border-radius:50%;
		       line-height:80px;
		       text-align:center;
		       z-index:999;
		}
	</style>
		
    <div class="colorlib-loader"></div>

<div id="page">
    <nav class="colorlib-nav" role="navigation">
        <div class="top-menu">
            <div class="container">
                <div class="row">
                    <div class="col-xs-2">
                        <div id="colorlib-logo"><a href="{{ url('principal/index') }}">DIVERSITA</a></div>
                    </div>
                    <div class="col-xs-10 text-right menu-1">
                        <ul>
                            <li class="active"><a href="{{ url('principal/servicios') }}">NUESTROS SERVICIOS</a></li>
<!-- 								<li><a href="services.html">Services</a></li> -->
                            <li><a href="{{ url('principal/blog') }}">BLOG</a></li>
                            <li><a href="{{ url('principal/nosotros') }}">NOSOTROS</a></li>
                            <li><a class="nav-link" href="#" data-toggle="modal" data-target="#ModalWarning">CONTÁCTO INFORMACIÓN</a></li>
                            <li><a href="{{ route('login') }}">INICIAR SESSIÓN</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
		</nav>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url('{{ asset('images/img_bg_2.jpg') }} ');">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Que Hacemos?</h2>
				   					<h1>Nuestros Servicios</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>

		<div id="colorlib-services">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-engineer"></i>
							</span>
							<div class="desc">
								<h3>General Constructing</h3>
								<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-engineering"></i>
							</span>
							<div class="desc">
								<h3>Building Modeling</h3>
								<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
								</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-skyline"></i>
							</span>
							<div class="desc">
								<h3>Design Build</h3>
								<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
								</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-crane"></i>
							</span>
							<div class="desc">
								<h3>Construction Services</h3>
								<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
								</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-sketch"></i>
							</span>
							<div class="desc">
								<h3>Pre-Construction Design</h3>
								<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
								</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="services">
							<span class="icon">
								<i class="flaticon-conveyor"></i>
							</span>
							<div class="desc">
								<h3>Construction Management</h3>
								<p>Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies</p>
								</div>
						</div>
					</div>
				</div>
			</div>
		</div>

        		<!-- codigo de whapp -->
					<div class="btn-whatsapp">
						<a href="https://api.whatsapp.com/send?phone=573186978572" target="_blank">
						<img src="http://s2.accesoperu.com/logos/btn_whatsapp.png" alt="">
						</a>
					</div>


		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-12 text-center">
						<p>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
     					<small class="block">Copyright &copy; <script>document.write(new Date().getFullYear());</script><a href="{{ url('principal/index') }}" target="_blank"> DIVERSITA.</a>  <br> Todos los derechos reservados.</small>
    					<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up2"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ asset('js/jquery.stellar.min.js') }}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
	<!-- Owl carousel -->
	<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('js/magnific-popup-options.js') }}"></script>
	<!-- Counters -->
	<script src="{{ asset('js/jquery.countTo.js') }}"></script>
	<!-- Main -->
	<script src="{{ asset('js/main.js') }}"></script>

	</body>
</html>

