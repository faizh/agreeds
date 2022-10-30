<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Agreeds</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="<?= base_url() ?>assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/responsive.css">

</head>
<body>

	<!-- header -->
	<div class="top-header-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
						<!-- logo -->
						<div class="site-logo">
							<a href="<?= base_url() ?>">
								<img src="<?= base_url() ?>assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

	<!-- hero area -->
	<div class="hero-area hero-bg">
		<div class="row">
			<div class="col-8">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="hero-text">
								<div class="hero-text-tablecell">							
									<p class="subtitle">Welcome to Agreeds</p>
									<h1>Your Agricultural Needs</h1>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-4 login-section" style="background: #23503d; opacity: 0.85;">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<div class="login-text">
								<h1>Signup</h1>
								<div class="form-login">
									<form action="<?= base_url() ?>index.php/auth/act_signup">
										<input type="text" name="fullname" class="form-control" placeholder="Enter your Fullname">
										<input type="email" name="email" class="form-control" placeholder="Enter your Email">
										<input type="password" name="password" class="form-control" placeholder="Enter your Password">

										<div class="hero-btns">
											<button type="submit" class="boxed-btn">Sign Up</button>
										</div>
									</form>	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end hero area -->

	<!-- jquery -->
	<script src="<?= base_url() ?>assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="<?= base_url() ?>assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="<?= base_url() ?>assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="<?= base_url() ?>assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="<?= base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="<?= base_url() ?>assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="<?= base_url() ?>assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="<?= base_url() ?>assets/js/main.js"></script>

</body>
</html>