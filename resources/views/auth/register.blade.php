
</div><!DOCTYPE html>
<html lang="en">
<head>
	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />
	
	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- FAVICONS ICON ============================================= -->
	<link rel="icon" href="{{asset('frontend/assets/{{asset('frontend/assets/images/FAANAMILKAAINA.png.jpg')}}" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('frontend/assets/{{asset('frontend/assets/images/FAANAMILKAAINA.png.jpg')}}" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>EduChamp : Education HTML Template </title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<!-- <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/assets.css.jpg')}}"> -->
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/typography.css.jpg')}}">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/shortcodes/shortcodes.css.jpg')}}">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/style.css.jpg')}}">
	<link class="skin" rel="stylesheet" type="text/css" href="{{asset('frontend/assets/css/color/color-1.css.jpg')}}">
	
</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head" style="background-image:url(assets/{{asset('frontend/assets/images/background/bg2.jpg);">
			<a href="index.html"><img src="{{asset('frontend/assets/{{asset('frontend/assets/images/logo-white-2.png.jpg')}}" alt=""></a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Sign Up <span>Now</span></h2>
					<p>Login Your Account <a href="login.html">Click here</a></p>
				</div>	
				<form method="POST" class="contact-bx" action="{{ route('register') }}">
					@csrf
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Name</label>
									<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

									@error('name')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Email Address</label>
									
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

									@error('email')
										<span class="invalid-feedback" role="alert">
											<strong>{{ $message }}</strong>
										</span>
									@enderror
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Your Password</label>

									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
									@enderror
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Your Password</label>

									<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
									@enderror
								</div>
							</div>
						</div>
						<div class="col-lg-12 m-b30">
							<button name="submit" type="submit" value="Submit" class="btn button-md">Sign Up</button>
						</div>
						<div class="col-lg-12">
							<h6>Sign Up with Social media</h6>
							<div class="d-flex">
								<a class="btn flex-fill m-r5 facebook" href="#"><i class="fa fa-facebook"></i>Facebook</a>
								<a class="btn flex-fill m-l5 google-plus" href="#"><i class="fa fa-google-plus"></i>Google Plus</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- External JavaScripts -->
<script src="{{asset('frontend/assets/js/jquery.min.js.jpg')}}"></script>
<script src="{{asset('frontend/assets/vendors/bootstrap/js/popper.min.js.jpg')}}"></script>
<script src="{{asset('frontend/assets/vendors/bootstrap/js/bootstrap.min.js.jpg')}}"></script>
<script src="{{asset('frontend/assets/vendors/bootstrap-select/bootstrap-select.min.js.jpg')}}"></script>
<script src="{{asset('frontend/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js.jpg')}}"></script>
<script src="{{asset('frontend/assets/vendors/magnific-popup/magnific-popup.js.jpg')}}"></script>
<script src="{{asset('frontend/assets/vendors/counter/waypoints-min.js.jpg')}}"></script>
<script src="{{asset('frontend/assets/vendors/counter/counterup.min.js.jpg')}}"></script>
<script src="{{asset('frontend/assets/vendors/imagesloaded/imagesloaded.js.jpg')}}"></script>
<script src="{{asset('frontend/assets/vendors/masonry/masonry.js.jpg')}}"></script>
<script src="{{asset('frontend/assets/vendors/masonry/filter.js.jpg')}}"></script>
<script src="{{asset('frontend/assets/vendors/owl-carousel/owl.carousel.js.jpg')}}"></script>
<script src="{{asset('frontend/assets/js/functions.js.jpg')}}"></script>
<script src="{{asset('frontend/assets/js/contact.js.jpg')}}"></script>
<script src="{{asset('frontend/assets/vendors/switcher/switcher.js.jpg')}}"></script>
</body>

</html>
