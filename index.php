<?php
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>CTO - Travel Organizer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Arizonia&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="css/animate.css">

	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/magnific-popup.css">

	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<link rel="stylesheet" href="css/jquery.timepicker.css">


	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>

	<?php
	if (session_status() == PHP_SESSION_ACTIVE && empty($_SESSION["accountType"])) {
	?>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="index.php">CTO<span>Travel Organizer</span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span> Menu
				</button>

				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
						<li class="nav-item "><a href="destination.php" class="nav-link">Palses</a></li>
						<li class="nav-item"><a href="sales.php" class="nav-link">Sales</a></li>
						<li class="nav-item"><a href="./index/searchde.php" class="nav-link">Destination</a></li>
						<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
						<li class="nav-item"><a href="./frontend/login.front.php" class="nav-link">Login</a></li>
					</ul>
				</div>
			</div>
		</nav>

	<?php
	} else if (session_status() == PHP_SESSION_ACTIVE && ($_SESSION["accountType"] === "customer")) {
	?>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="index.php">CTO<span>Travel Organizer</span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span> Menu
				</button>

				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
						<li class="nav-item "><a href="destination.php" class="nav-link">Plases</a></li>
						<li class="nav-item"><a href="sales.php" class="nav-link">Sales</a></li>
						<li class="nav-item"><a href="./index/searchde.php" class="nav-link">Destination</a></li>
						<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
						<li class="nav-item"><a href="./frontend/profile_customer.front.php" class="nav-link">Profile</a></li>
						<li class="nav-item"><a href="./includes/logout.inc.php" class="nav-link">Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>

	<?php
	} else if (session_status() == PHP_SESSION_ACTIVE && ($_SESSION["accountType"] === "hotel")) {
	?>
		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
			<div class="container">
				<a class="navbar-brand" href="index.php">CTO<span>Travel Organizer</span></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="oi oi-menu"></span> Menu
				</button>

				<div class="collapse navbar-collapse" id="ftco-nav">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
						<li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
						<li class="nav-item "><a href="destination.php" class="nav-link">Palses</a></li>
						<li class="nav-item"><a href="sales.php" class="nav-link">Sales</a></li>
						<li class="nav-item"><a href="./index/searchde.php" class="nav-link">Destination</a></li>
						<li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
						<li class="nav-item"><a href="../frontend/dashboard_hotel.front.php" class="nav-link">Dashboard</a></li>
						<li class="nav-item"><a href="../includes/logout.inc.php" class="nav-link">Logout</a></li>
					</ul>
				</div>
			</div>
		</nav>
	<?php
	}
	?>
	<!-- END nav -->

	<div class="hero-wrap js-fullheight" style="background-image: url('images/visit2.jpg');">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
				<div class="col-md-7 ftco-animate">
					<span class="subheading">Welcome to CTO</span>
					<h1 class="mb-4">Discover Your Favorite Place with Us</h1>
					<p class="caps">Travel to the any corner of the world, without going around in circles</p>
				</div>
				<a href="https://www.youtube.com/watch?v=Ngx0znqkbXo" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
					<span class="fa fa-play"></span>
				</a>
			</div>
		</div>
	</div>

	<div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
		<form action="#" class="search-property-1">
			<div class="row no-gutters">
				<div class="col-lg d-flex">
					<div class="form-group p-4 border-0">
						<label for="#">Destination</label>
						<div class="form-field">
							<div class="icon"><span class="fa fa-search"></span></div>
							<input type="text" class="form-control" placeholder="Search place">
						</div>
					</div>
				</div>
				<div class="col-lg d-flex">
					<div class="form-group p-4">
						<label for="#">Check-in date</label>
						<div class="form-field">
							<div class="icon"><span class="fa fa-calendar"></span></div>
							<input type="text" class="form-control checkin_date" placeholder="Check In Date">
						</div>
					</div>
				</div>
				<div class="col-lg d-flex">
					<div class="form-group p-4">
						<label for="#">Check-out date</label>
						<div class="form-field">
							<div class="icon"><span class="fa fa-calendar"></span></div>
							<input type="text" class="form-control checkout_date" placeholder="Check Out Date">
						</div>
					</div>
				</div>
				<div class="col-lg d-flex">
					<div class="form-group p-4">
						<label for="#">Price Limit</label>
						<div class="form-field">
							<div class="select-wrap">
								<div class="icon"><span class="fa fa-chevron-down"></span></div>
								<select name="" id="" class="form-control">
									<option value="">100</option>
									<option value="">10,000</option>
									<option value="">50,000</option>
									<option value="">100,000</option>
									<option value="">200,000</option>
									<option value="">300,000</option>
									<option value="">400,000</option>
									<option value="">500,000</option>
									<option value="">600,000</option>
									<option value="">700,000</option>
									<option value="">800,000</option>
									<option value="">900,000</option>
									<option value="">1,000,000</option>
									<option value="">2,000,000</option>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg d-flex">
					<div class="form-group d-flex w-100 border-0">
						<div class="form-field w-100 align-items-center d-flex">
							<input type="submit" value="Search" class="align-self-stretch form-control btn btn-primary p-0">
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</div>
	</section>

	<section class="ftco-section services-section">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate d-flex align-items-center">
					<div class="w-100">
						<span class="subheading">Welcome to CTO</span>
						<h2 class="mb-4">It's time to start your adventure</h2>
						<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
						<p>Do you love exploring new places and trying new things? Or do you need a bit of a nudge to step outside your comfort zone? Either way, creative sayings about adventure can help you express yourself. Whether you're looking to share your passion for adventure or you're searching for sayings to remind you that wonderful things can happen when you try something new, the following adventure quotes will help you soar..</p>
						<p><a href="./index/index.php" class="btn btn-primary py-3 px-4">Search Destination</a></p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
							<div class="services services-1 color-1 d-block img" style="background-image: url(images/services-1.jpg);">
								<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-paragliding"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Activities</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
							<div class="services services-1 color-2 d-block img" style="background-image: url(images/services-2.jpg);">
								<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-route"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Travel Arrangements</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
							<div class="services services-1 color-3 d-block img" style="background-image: url(images/services-3.jpg);">
								<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-tour-guide"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Private Guide</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary</p>
								</div>
							</div>
						</div>
						<div class="col-md-12 col-lg-6 d-flex align-self-stretch ftco-animate">
							<div class="services services-1 color-4 d-block img" style="background-image: url(images/services-4.jpg);">
								<div class="icon d-flex align-items-center justify-content-center"><span class="flaticon-map"></span></div>
								<div class="media-body">
									<h3 class="heading mb-3">Location Manager</h3>
									<p>A small river named Duden flows by their place and supplies it with the necessary</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section img ftco-select-destination" style="background-image: url(images/bg_3.jpg);">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">CTO organizers</span>
					<h2 class="mb-4">Select Your Destination</h2>
				</div>
			</div>
		</div>
		<div class="container container-2">
			<div class="row">
				<div class="col-md-12">
					<div class="carousel-destination owl-carousel ftco-animate">
						<div class="item">
							<div class="project-destination">
								<a href="#" class="img" style="background-image: url(images/Ella.jpg);">
									<div class="text">
										<h3>ELLA</h3>
										<span>8 Tours</span>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="project-destination">
								<a href="#" class="img" style="background-image: url(images/kandy.jpeg);">
									<div class="text">
										<h3>KANDY</h3>
										<span>2 Tours</span>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="project-destination">
								<a href="#" class="img" style="background-image: url(images/Anuradhapura.jpeg);">
									<div class="text">
										<h3>ANURADHAPURA</h3>
										<span>5 Tours</span>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="project-destination">
								<a href="#" class="img" style="background-image: url(images/polonnaruwa.jpeg);">
									<div class="text">
										<h3>POLONNARUWA</h3>
										<span>5 Tours</span>
									</div>
								</a>
							</div>
						</div>
						<div class="item">
							<div class="project-destination">
								<a href="#" class="img" style="background-image: url(images/hambanthota.jpg);">
									<div class="text">
										<h3>UNAWATUNA</h3>
										<span>7 Tours</span>
									</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Destination</span>
					<h2 class="mb-4">Tour Destination</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url(images/hambanthota.jpg);">
							<span class="price">550/person</span>
						</a>
						<div class="text p-4">
							<span class="days">8 Days Tour</span>
							<h3><a href="#">HAMBANTHOTA</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> SRI LANKA</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-mountains"></span>Near BEACH</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="anuradhapura.html" class="img" style="background-image: url(images/Anuradhapura.jpeg);">
							<span class="price">550/person</span>
						</a>
						<div class="text p-4">
							<span class="days">10 Days Tour</span>
							<h3><a href="Untitled-1.html">ANURADHAPURA</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> SRI LANKA</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-sun-umbrella"></span>BUDDHIST AREA</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url(images/DIKWELLA.jpg);">
							<span class="price">550/person</span>
						</a>
						<div class="text p-4">
							<span class="days">7 Days Tour</span>
							<h3><a href="#">DIKWELLA</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> SRI LANKA</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url(images/Trincomalee.jpeg);">
							<span class="price">550/person</span>
						</a>
						<div class="text p-4">
							<span class="days">8 Days Tour</span>
							<h3><a href="#">Trincomalee</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> SRI LANKA</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url(images/Baticlo.jpeg);">
							<span class="price">550/person</span>
						</a>
						<div class="text p-4">
							<span class="days">10 Days Tour</span>
							<h3><a href="#">BATICLO</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> SRI LANKA</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-4 ftco-animate">
					<div class="project-wrap">
						<a href="#" class="img" style="background-image: url(images/Jaffna.jpeg);">
							<span class="price">550/person</span>
						</a>
						<div class="text p-4">
							<span class="days">7 Days Tour</span>
							<h3><a href="#">JAFFANA</a></h3>
							<p class="location"><span class="fa fa-map-marker"></span> SRI LANKA</p>
							<ul>
								<li><span class="flaticon-shower"></span>2</li>
								<li><span class="flaticon-king-size"></span>3</li>
								<li><span class="flaticon-sun-umbrella"></span>Near Beach</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-about img" style="background-image: url(images/des.jpg);">
		<div class="overlay"></div>
		<div class="container py-md-5">
			<div class="row py-md-5">
				<div class="col-md d-flex align-items-center justify-content-center">
					<a href="https://www.youtube.com/watch?v=buns7DpTL_I" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
						<span class="fa fa-play"></span>
					</a>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section ftco-about ftco-no-pt img">
		<div class="container">
			<div class="row d-flex">
				<div class="col-md-12 about-intro">
					<div class="row">
						<div class="col-md-6 d-flex align-items-stretch">
							<div class="img d-flex w-100 align-items-center justify-content-center" style="background-image:url(images/about-1.jpg);">
							</div>
						</div>
						<div class="col-md-6 pl-md-5 py-5">
							<div class="row justify-content-start pb-3">
								<div class="col-md-12 heading-section ftco-animate">
									<span class="subheading">About Us</span>
									<h2 class="mb-4">Make Your Tour Memorable and Safe With Us</h2>
									<p>Do you love exploring new places and trying new things? Or do you need a bit of a nudge to step outside your comfort zone? Either way, creative sayings about adventure can help you express yourself. Whether you're looking to share your passion for adventure or you're searching for sayings to remind you that wonderful things can happen when you try something new, the following adventure quotes will help you soar..</p>
									<p><a href="#" class="btn btn-primary">Book Your Destination</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-section testimony-section bg-bottom" style="background-image: url(images/elephant.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
					<span class="subheading">Testimonial</span>
					<h2 class="mb-4">Tourist Feedback</h2>
				</div>
			</div>
			<div class="row ftco-animate">
				<div class="col-md-12">
					<div class="carousel-testimony owl-carousel">
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<p class="star">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</p>
									<p class="mb-4">Do you love exploring new places and trying new things? Or do you need a bit of a nudge to step outside your comfort zone? Either way, creative sayings about adventure can help you express yourself. Whether you're looking to share your passion for adventure or you're searching for sayings to remind you that wonderful things can happen when you try something new, the following adventure quotes will help you soar..</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person.jpg)"></div>
										<div class="pl-3">
											<p class="name">Imesh Ekanayaka</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<p class="star">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</p>
									<p class="mb-4">Do you love exploring new places and trying new things? Or do you need a bit of a nudge to step outside your comfort zone? Either way, creative sayings about adventure can help you express yourself. Whether you're looking to share your passion for adventure or you're searching for sayings to remind you that wonderful things can happen when you try something new, the following adventure quotes will help you soar..</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person.jpg)"></div>
										<div class="pl-3">
											<p class="name">Imesh Ekanayaka</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<p class="star">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</p>
									<p class="mb-4">Do you love exploring new places and trying new things? Or do you need a bit of a nudge to step outside your comfort zone? Either way, creative sayings about adventure can help you express yourself. Whether you're looking to share your passion for adventure or you're searching for sayings to remind you that wonderful things can happen when you try something new, the following adventure quotes will help you soar..</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person.jpg)"></div>
										<div class="pl-3">
											<p class="name">Imesh Ekanayaka</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<p class="star">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</p>
									<p class="mb-4">Do you love exploring new places and trying new things? Or do you need a bit of a nudge to step outside your comfort zone? Either way, creative sayings about adventure can help you express yourself. Whether you're looking to share your passion for adventure or you're searching for sayings to remind you that wonderful things can happen when you try something new, the following adventure quotes will help you soar..</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person.jpg)"></div>
										<div class="pl-3">
											<p class="name">Imesh Ekanayaka</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimony-wrap py-4">
								<div class="text">
									<p class="star">
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
										<span class="fa fa-star"></span>
									</p>
									<p class="mb-4">Do you love exploring new places and trying new things? Or do you need a bit of a nudge to step outside your comfort zone? Either way, creative sayings about adventure can help you express yourself. Whether you're looking to share your passion for adventure or you're searching for sayings to remind you that wonderful things can happen when you try something new, the following adventure quotes will help you soar..</p>
									<div class="d-flex align-items-center">
										<div class="user-img" style="background-image: url(images/person.jpg)"></div>
										<div class="pl-3">
											<p class="name">Imesh Ekanyaka</p>
											<span class="position">Marketing Manager</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center pb-4">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<span class="subheading">Our Blog</span>
					<h2 class="mb-4">Recent Post</h2>
				</div>
			</div>
			<div class="row d-flex">
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
						</a>
						<div class="text">
							<div class="d-flex align-items-center mb-4 topp">
								<div class="one">
									<span class="day">11</span>
								</div>
								<div class="two">
									<span class="yr">2020</span>
									<span class="mos">September</span>
								</div>
							</div>
							<h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
							<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry justify-content-end">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
						</a>
						<div class="text">
							<div class="d-flex align-items-center mb-4 topp">
								<div class="one">
									<span class="day">11</span>
								</div>
								<div class="two">
									<span class="yr">2020</span>
									<span class="mos">September</span>
								</div>
							</div>
							<h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
							<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 d-flex ftco-animate">
					<div class="blog-entry">
						<a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
						</a>
						<div class="text">
							<div class="d-flex align-items-center mb-4 topp">
								<div class="one">
									<span class="day">11</span>
								</div>
								<div class="two">
									<span class="yr">2020</span>
									<span class="mos">September</span>
								</div>
							</div>
							<h3 class="heading"><a href="#">Most Popular Place In This World</a></h3>
							<!-- <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p> -->
							<p><a href="#" class="btn btn-primary">Read more</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-intro ftco-section ftco-no-pt">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 text-center">
					<div class="img" style="background-image: url(images/bg_2.jpg);">
						<div class="overlay"></div>
						<h2>We Are CTO Travel Organizer</h2>
						<p>We can manage your dream building A small river named Duden flows by their place</p>
						<p class="mb-0"><a href="#" class="btn btn-primary px-4 py-3">Ask For A Quote</a></p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="ftco-footer bg-bottom ftco-no-pt" style="background-image: url(images/bg_3.jpg);">
		<div class="container">
			<div class="row mb-5">
				<div class="col-md pt-5">
					<div class="ftco-footer-widget pt-md-5 mb-4">
						<h2 class="ftco-heading-2">About</h2>
						<p>Do you love exploring new places and trying new things? Or do you need a bit of a nudge to step outside your comfort zone? Either way, creative sayings about adventure can help you express yourself. Whether you're looking to share your passion for adventure or you're searching for sayings to remind you that wonderful things can happen when you try something new, the following adventure quotes will help you soar..</p>
						<ul class="ftco-footer-social list-unstyled float-md-left float-lft">
							<li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
							<li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md pt-5 border-left">
					<div class="ftco-footer-widget pt-md-5 mb-4 ml-md-5">
						<h2 class="ftco-heading-2">Infromation</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Online Enquiry</a></li>
							<li><a href="#" class="py-2 d-block">General Enquiries</a></li>
							<li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
							<li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
							<li><a href="#" class="py-2 d-block">Refund Policy</a></li>
							<li><a href="#" class="py-2 d-block">Call Us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md pt-5 border-left">
					<div class="ftco-footer-widget pt-md-5 mb-4">
						<h2 class="ftco-heading-2">Experience</h2>
						<ul class="list-unstyled">
							<li><a href="#" class="py-2 d-block">Adventure</a></li>
							<li><a href="#" class="py-2 d-block">Hotel and Restaurant</a></li>
							<li><a href="#" class="py-2 d-block">Beach</a></li>
							<li><a href="#" class="py-2 d-block">Nature</a></li>
							<li><a href="#" class="py-2 d-block">Camping</a></li>
							<li><a href="#" class="py-2 d-block">Party</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md pt-5 border-left">
					<div class="ftco-footer-widget pt-md-5 mb-4">
						<h2 class="ftco-heading-2">Have a Questions?</h2>
						<div class="block-23 mb-3">
							<ul>
								<li><span class="icon fa fa-map-marker"></span><span class="text">colombo 6 </span></li>
								<li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
								<li><a href="#"><span class="icon fa fa-paper-plane"></span><span class="text">info@travelorganizer.lk</span></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">


				</div>
			</div>
		</div>
	</footer>



	<!-- loader -->
	<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
			<circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
			<circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
		</svg>
	</div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery-migrate-3.0.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.animateNumber.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/scrollax.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
	<script src="js/google-map.js"></script>
	<script src="js/main.js"></script>

</body>

</html>