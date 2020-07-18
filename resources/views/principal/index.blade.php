<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DIVERSITA</title>
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
	
	 <!-- Ionicons -->
	 <link rel="stylesheet"  href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{asset('css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{asset('css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{asset('css/flexslider.css')}}">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
	
	<!-- Flaticons  -->
	<link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{asset('css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('js/modernizr-2.6.2.min.js')}}"></script>
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

	<!-- Notificacion de enviado -->
@if(Session::has('Mensaje'))
	<div class="alert alert-success" role="alert">
		{{ Session::get('Mensaje')}}
	</div>
@endif

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
								<li><a href="{{ url('principal/servicios') }}">NUESTROS SERVICIOS</a></li>
<!-- 								<li><a href="services.html">Services</a></li> -->
								<li><a href="{{ url('principal/blog') }}">BLOG</a></li>
								<li><a href="{{ url('principal/nosotros') }}">NOSOTROS</a></li>
								<li><a class="nav-link" href="" data-toggle="modal" data-target="#ModalWarning">CONTÁCTO INFORMACIÓN</a></li>
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
			   	<li style=" background-image: url('{{asset('images/img_bg_1.jpg')}}');">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Providing all Kinds of Construction Services</h2>
				   					<h1>Constructing Spaces For You</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url('{{asset('images/img_bg_2.jpg')}}');">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>Building Your Solid</h2>
				   					<h1>High Class Building</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url('{{asset('images/img_bg_3.jpg')}}');">
			   		<div class="overlay"></div>
			   		<div class="container-fluids">
			   			<div class="row">
				   			<div class="col-md-8 col-sm-12 col-md-offset-2 slider-text">
				   				<div class="slider-text-inner text-center">
				   					<h2>We Design All Kinds of Buildings</h2>
				   					<h1>We Build Buildings Professionally</h1>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   		
			  	</ul>
		  	</div>
		</aside>

<!-- Central Modal Warning Demo-->
    <div class="modal fade left" id="ModalWarning" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-notify modal-warning modal-side modal-bottom-left" role="document" >
            <div class="card justify-content-mx-center" style="width: 50rem; background-color: rgba(0,0,0,0.25); ">
                <div style="text-align: center;">
                  <img src="{{asset('images/tt.png')}}" width="250" class="my-6" style=" border-radius:50%; ; border-style: solid; border-color: #00C853; border-width: 5px; text-align: center ">
                </div>
            </div>
              <div class="card" style="width: 50rem; background-color: rgba(0,0,0,0.25);">
                <br>
                <div class="form-group input-group">
                    <!-- <i class="fa fa-user-circle-o mx-2" style="font-size:20px;color:#00C853"></i> -->
                    <a class="card-text font-weight-bold" style="color:hsl(192,15%,99%);">INGID ALEXANDRA SUAREZ</a>
                </div> <!-- form-group// -->
                <div class="form-group input-group">
				<!-- <i class="icon-envelope" style="font-size:20px;color:#00C853"></i> -->
                    <a  class="card-text font-weight-bold" style="color:hsl(192,15%,99%);">IASUAREZ@GMAIL.com</a>
                </div> <!-- form-group// -->
                <div class="form-group input-group">
					<!-- <i class="icon-phone"  style="font-size:20px;color:#00C853"></i> -->
                    <a class="card-text font-weight-bold" style="color:hsl(192,15%,99%);">301-7974232</a>
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <!-- <i class="fa fa-graduation-cap mx-2" style="font-size:20px;color:#00C853"></i> -->
                    <a class="card-text font-weight-bold" style="color:hsl(192,15%,99%);">Lider de sst</a>
                </div> <!-- form-group end.// -->
                <div class="form-group input-group">
                    <!-- <i class="fa fa-graduation-cap  mx-2" style="font-size:20px;color:#00C853"></i> -->
                    <a class="card-text font-weight-bold" style="color:hsl(192,15%,99%);">Esp. HSEQ</a>
                </div> <!-- form-group end.// -->

            </div>            
        </div>
    </div>

<!-- primer contenido -->
<div id="colorlib-project">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-push-1">
						<div class="row">
							<div class="col-md-10 animate-box">
								<div class="owl-carousel owl-carousel2 project-wrap">
									<div class="item">
										<a href="{{asset('images/building-1.jpg')}}" class="project image-popup-link" style="background-image: url('{{asset('images/building-1.jpg')}}');">
											<div class="desc-t">
												<div class="desc-tc">
													<div class="desc">
														<h3><span><small>1</small></span> California Mega Mall</h3>
														<p>Even the all-powerful Pointing has no control</p>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="item">
										<a href="{{asset('images/building-2.jpg')}}" class="project image-popup-link" style="background-image: url('{{asset('images/building-2.jpg')}}');">
											<div class="desc-t">
												<div class="desc-tc">
													<div class="desc">
														<h3><span><small>2</small></span> Commercial Building</h3>
														<p>Even the all-powerful Pointing has no control</p>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="item">
										<a href="{{asset('images/building-3.jpg')}}'" class="project image-popup-link" style="background-image: url('{{asset('images/building-3.jpg')}}');">
											<div class="desc-t">
												<div class="desc-tc">
													<div class="desc">
														<h3><span><small>3</small></span> Miami Private Apartment</h3>
														<p>Even the all-powerful Pointing has no control</p>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 animate-box colorlib-heading animate-box">
						<span class="sm">SST</span>
						<h2><span class="thin">SISTEMAS INTEGRADOS</span> <span class="thick">DE GESTIÓN SST</span></h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
						<p><a href="#">View All Projects <i class="icon-arrow-right3"></i></a></p>
					</div>
				</div>
			</div>
		</div>

<!-- segundo contenido -->
		<div id="colorlib-project">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box colorlib-heading animate-box">
						<span class="sm">SST</span>
						<h2><span class="thin">PREVENCIÓN</span> <span class="thick">DEL RIESGO</span></h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
						<p><a href="#">View All Projects <i class="icon-arrow-right3"></i></a></p>
					</div>
					<div class="col-md-7 col-md-push-1">
						<div class="row">
							<div class="col-md-10 animate-box">
								<div class="owl-carousel owl-carousel2 project-wrap">
									<div class="item">
										<a href="{{asset('images/building-1.jpg')}}" class="project image-popup-link" style="background-image: url('{{asset('images/building-1.jpg')}}');">
											<div class="desc-t">
												<div class="desc-tc">
													<div class="desc">
														<h3><span><small>1</small></span> California Mega Mall</h3>
														<p>Even the all-powerful Pointing has no control</p>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="item">
										<a href="{{asset('images/building-2.jpg')}}" class="project image-popup-link" style="background-image: url('{{asset('images/building-2.jpg')}}');">
											<div class="desc-t">
												<div class="desc-tc">
													<div class="desc">
														<h3><span><small>2</small></span> Commercial Building</h3>
														<p>Even the all-powerful Pointing has no control</p>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="item">
										<a href="{{asset('images/building-3.jpg')}}" class="project image-popup-link" style="background-image: url('{{asset('images/building-3.jpg')}}');">
											<div class="desc-t">
												<div class="desc-tc">
													<div class="desc">
														<h3><span><small>3</small></span> Miami Private Apartment</h3>
														<p>Even the all-powerful Pointing has no control</p>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<!-- tercer contenido -->
		<div id="colorlib-project">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-push-1">
						<div class="row">
							<div class="col-md-10 animate-box">
								<div class="owl-carousel owl-carousel2 project-wrap">
									<div class="item">
										<a href="{{asset('images/building-1.jpg')}}" class="project image-popup-link" style="background-image: url('{{asset('images/building-1.jpg')}}');">
											<div class="desc-t">
												<div class="desc-tc">
													<div class="desc">
														<h3><span><small>1</small></span> California Mega Mall</h3>
														<p>Even the all-powerful Pointing has no control</p>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="item">
										<a href="{{asset('images/building-2.jpg')}}" class="project image-popup-link" style="background-image: url('{{asset('images/building-2.jpg')}}');">
											<div class="desc-t">
												<div class="desc-tc">
													<div class="desc">
														<h3><span><small>2</small></span> Commercial Building</h3>
														<p>Even the all-powerful Pointing has no control</p>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="item">
										<a href="{{asset('images/building-3.jpg')}}" class="project image-popup-link" style="background-image: url('{{asset('images/building-3.jpg')}}');">
											<div class="desc-t">
												<div class="desc-tc">
													<div class="desc">
														<h3><span><small>3</small></span> Miami Private Apartment</h3>
														<p>Even the all-powerful Pointing has no control</p>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4 animate-box colorlib-heading animate-box">
						<span class="sm">SST</span>
						<h2><span class="thin">NUTRICIÓN Y ESTILO</span> <span class="thick">DE VIDA SALUDABLE</span></h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
						<p><a href="#">View All Projects <i class="icon-arrow-right3"></i></a></p>
					</div>
				</div>
			</div>
		</div>		

<!-- cuarto contenido -->
		<div id="colorlib-project">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box colorlib-heading animate-box">
						<span class="sm">SST</span>
						<h2><span class="thin">GESTIÓN</span> <span class="thick">DE EMERGENCIAS</span></h2>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
						<p><a href="#">View All Projects <i class="icon-arrow-right3"></i></a></p>
					</div>
					<div class="col-md-7 col-md-push-1">
						<div class="row">
							<div class="col-md-10 animate-box">
								<div class="owl-carousel owl-carousel2 project-wrap">
									<div class="item">
										<a href="{{asset('images/building-1.jpg')}}" class="project image-popup-link" style="background-image: url('{{asset('images/building-1.jpg')}}');">
											<div class="desc-t">
												<div class="desc-tc">
													<div class="desc">
														<h3><span><small>1</small></span> California Mega Mall</h3>
														<p>Even the all-powerful Pointing has no control</p>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="item">
										<a href="{{asset('images/building-2.jpg')}}" class="project image-popup-link" style="background-image: url('{{asset('images/building-2.jpg')}}');">
											<div class="desc-t">
												<div class="desc-tc">
													<div class="desc">
														<h3><span><small>2</small></span> Commercial Building</h3>
														<p>Even the all-powerful Pointing has no control</p>
													</div>
												</div>
											</div>
										</a>
									</div>
									<div class="item">
										<a href="{{asset('images/building-3.jpg')}}'" class="project image-popup-link" style="background-image: url('{{asset('images/building-3.jpg')}}');">
											<div class="desc-t">
												<div class="desc-tc">
													<div class="desc">
														<h3><span><small>3</small></span> Miami Private Apartment</h3>
														<p>Even the all-powerful Pointing has no control</p>
													</div>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>	

<!-- form contactar -->
<form class="was-validated" method="POST" action="{{ url('respuestainv') }}" enctype="multipart/form-data"> 
{{ csrf_field() }}

		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 animate-box">
						<h2>PONERSE EN CONTACTO</h2>
							<div class="row form-group">
								<div class="col-md-6">
									<label for="fname">Nombre completo</label>
									<input type="text" id="Nombre_completo" name="Nombre_cliente" class="form-control" placeholder="Su nombre completo">
								</div>
								<div class="col-md-6">
									<label for="lname">Numero de celular</label>
									<input type="text" id="lname" name="Numero_celular_cliente"  class="form-control" placeholder="Su numero de celular">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="email">Correo</label>
									<input type="text" id="email" class="form-control" name="Correo_cliente" placeholder="Tu correo electronico">
								</div>
							</div>

							<div class="row form-group">
								<div class="col-md-12">
									<label for="message">Mensage</label>
									<textarea  name="Mensage_cliente" id="message" cols="30" rows="10" class="form-control" placeholder="Mensaje"></textarea>
								</div>
							</div>
							<div class="form-group">
							<button class="btn btn-outline-primary" type="submit">Enviar Correo</button>

							</div>	
					</div>
				</div>
			</div>
		</div>
</form>

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
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('js/jquery.flexslider-min.js')}}"></script>
	<!-- Owl carousel -->
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/magnific-popup-options.js')}}"></script>
	<!-- Counters -->
	<script src="{{asset('js/jquery.countTo.js')}}"></script>
	<!-- Main -->
	<script src="{{asset('js/main.js')}}"></script>

	</body>
</html>

