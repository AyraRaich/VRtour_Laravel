<!DOCTYPE html>
<html>
<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="/img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Adventure</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{url('assets/css/linearicons.css')}}">
			<link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{url('assets/css/magnific-popup.css')}}">
			<link rel="stylesheet" href="{{url('assets/css/animate.min.css')}}">
			<link rel="stylesheet" href="{{url('assets/css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{url('assets/css/main.css')}}">
		</head>
		<body>
			<!-- start banner Area -->
			<section class="banner-area" id="home">
			  <!-- Start Header Area -->
			  <header class="default-header">
			    <nav class="navbar navbar-expand-lg  navbar-light">
			      <div class="container">
			          <a class="navbar-brand" href="#home">
			            <img src="/img/logo.png" alt="" width='79' height='33'>
			          </a>
			          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			            <span class="text-white lnr lnr-menu"></span>
			          </button>

			          <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
			            <ul class="navbar-nav">
			            <li><a href="/#home">Home</a></li>
			            <li><a href="/#about">About</a></li>
			            <li><a href="/#gallery">Gallery</a></li>
			            <li><a href="/#contact">Contact</a></li>
			            <li><a href="{{ url('/login') }}" >Login</a></li>
			            </ul>
			          </div>
			      </div>
			    </nav>
				</header>
				<!-- End Header Area -->
				<section class="default-banner active-blog">
						<div class="item relative" style="background:url(/img/slider1.jpg);background-size: cover;">
							<div class="overlay" style="background: rgba(0,0,0,.3)"></div>
							<div class="container">
								<div class="row fullscreen justify-content-center align-items-center">
									<div class="col-md-10 col-12">
										<div class="banner-content text-center">
											<h4 class="text-white mb-20 text-uppercase">Discover the Colorful World</h4>
											<h1 class="text-uppercase text-white">New Adventure Awaits</h1>
											<a href="/#project" class="text-uppercase header-btn">Discover Now</a>
										</div>
									</div>

								</div>
							</div>
						</div>
					</section>

					<div class="container mt-3">
							@yield('about')
					</div>

					<div class="container mt-3">
							@yield('content')
					</div>

					<div class="container mt-3">
							@yield('project')
					</div>

					<div class="container mt-3">
							@yield('gallery')
					</div>

                <!-- start footer Area -->
                <footer class="footer-area section-gap" id="contact">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-5 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                          <h6>About Us</h6>
                          <p>
                            Website ini merupakan program penelitian untuk tugas akhir di universitas dian nuswantoro semarang.
                          </p>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                          <p class="footer-text">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://udinus.com" target="_blank">Mahasiswa TA UDINUS</a></p>
                          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                      </div>
                                  <div class="col-lg-3 col-md-3 col-sm-3">

                                  </div>

                      <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                        <div class="single-footer-widget">
                          <h6>Follow Us</h6>
                          <p>Let us be social</p>
                          <div class="footer-social d-flex align-items-center">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                            <a href="#"><i class="fa fa-behance"></i></a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </footer>

                <!-- End footer Area -->

          			<script src="{{url('assets/js/vendor/jquery-2.2.4.min.js')}}"></script>
          			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
          			<script src="{{url('assets/js/vendor/bootstrap.min.js')}}"></script>
          			<script src="{{url('assets/js/jquery.ajaxchimp.min.js')}}"></script>
          			<script src="{{url('assets/js/jquery.magnific-popup.min.js')}}"></script>
          			<script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
          			<script src="{{url('assets/js/jquery.sticky.js')}}"></script>
          			<script src="{{url('assets/js/slick.js')}}"></script>
          			<script src="{{url('assets/js/jquery.counterup.min.js')}}"></script>
          			<script src="{{url('assets/js/waypoints.min.js')}}"></script>
          			<script src="{{url('assets/js/main.js')}}"></script>
              </body>
              </html>
