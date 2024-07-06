<?php
if (session_status() === PHP_SESSION_NONE) {
	session_start();
}
?>
<html>

<head>
	<link rel="stylesheet" href="../style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta charset="utf-8">

	<title>CTO | Travel Organizer</title>
</head>
<?php
if (session_status() == PHP_SESSION_ACTIVE && empty($_SESSION["accountType"])) {
?>
	<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light px-2">
		<a class="navbar-brand" href="../index.php">
			<img src="../images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
			CTO
		</a>
		<div class="navbar">
			<div class="navbar-nav">
				<a class="nav-item nav-link" href="../index.php">Home</a>
				<a class="nav-item nav-link" href="../about.php">About</a>
				<a class="nav-item nav-link" href="../destination.php">Destination</a>
				<a class="nav-item nav-link" href="../Places.php">Places</a>
				<a class="nav-item nav-link" href="../blog.php">Blog</a>
				<a class="nav-item nav-link" href="../contact.php">Contact</a>
				<a class="nav-item nav-link" href="../frontend/login.front.php">Login</a>
			</div>
		</div>
	</nav>

<?php
} else if (session_status() == PHP_SESSION_ACTIVE && ($_SESSION["accountType"] === "customer")) {
?>
	<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light px-2">
		<a class="navbar-brand" href="../index.php">
			<img src="../images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
			CTO
		</a>
		<div class="navbar">
			<div class="navbar-nav">
				<a class="nav-item nav-link" href="../index.php">Home</a>
				<a class="nav-item nav-link" href="../about.php">About</a>
				<a class="nav-item nav-link" href="../destination.php">Destination</a>
				<a class="nav-item nav-link" href="../Places.php">Places</a>
				<a class="nav-item nav-link" href="../blog.php">Blog</a>
				<a class="nav-item nav-link" href="../contact.php">Contact</a>
				<a class="nav-item nav-link" href="../frontend/show_reservation.front.php">Reservations</a>
				<a class="nav-item nav-link" href="../frontend/profile_customer.front.php">Profile</a>
				<a class="nav-item nav-link" href="../includes/logout.inc.php">Logout</a>
			</div>
		</div>
	</nav>

<?php
} else if (session_status() == PHP_SESSION_ACTIVE && ($_SESSION["accountType"] === "hotel")) {
?>
	<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light px-2">
		<a class="navbar-brand" href="../index.php">
			<img src="../images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
			CTO
		</a>
		<div class="navbar">
			<div class="navbar-nav">
				<a class="nav-item nav-link" href="../index.php">Home</a>
				<a class="nav-item nav-link" href="../about.php">About</a>
				<a class="nav-item nav-link" href="../destination.php">Destination</a>
				<a class="nav-item nav-link" href="../Places.php">Places</a>
				<a class="nav-item nav-link" href="../blog.php">Blog</a>
				<a class="nav-item nav-link" href="../contact.php">Contact</a>
				<a class="nav-item nav-link" href="../frontend/dashboard_hotel.front.php">Dashboard</a>
				<a class="nav-item nav-link" href="../includes/logout.inc.php">Logout</a>
			</div>
		</div>
	</nav>
<?php
}
?>
<style>
	/* Navbar Styles */
	.navbar-brand {
		color: #000000;
		font-size: 26px;
		font-weight: bold;
	}

	.navbar-nav .nav-link {
		color: #000000;
		font-size: 16px;
		font-weight: bold;
		padding: 10px 15px;
		transition: 0.3s;
	}

	.navbar-toggler-icon {
		background-color: #fff;
	}

	/* Dropdown Menu Styles */
	.dropdown-menu {
		background-color: #0567ab;
	}

	.dropdown-menu a.dropdown-item {
		color: #fff;
	}

	.dropdown-menu a.dropdown-item:hover {
		background-color: #03406c;
	}

	/* Gradient Line */
	.navbar::after {
		content: '';
		display: block;
		position: absolute;
		bottom: 0;
		left: 0;
		width: 100%;
		height: 3px;

		background: linear-gradient(to right,
				#ff7e5f,
				/* Start color */
				#feb47b,
				/* Middle color */
				#00bcd4,
				/* End color */
				#0567ab);
	}
</style>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>

</html>