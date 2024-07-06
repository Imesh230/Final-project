<?php
include '../includes/navbar.php';
include '../includes/profile_hotel.inc.php';
include '../backend/reservation.back.php';
$hotelUid = $_SESSION["hotelUid"];
$hotel = new Hotel();
$res = new Reservation();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hotel Profile</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<style>
		/* Custom styles */
		body {
			background-color: #f8f9fa;
			font-family: Arial, sans-serif;
		}

		.card {
			border: none;
			box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
		}

		.card-header {
			background-color: #007bff;
			color: #fff;
		}

		.card-body {
			padding: 20px;
		}

		.btn-primary {
			background-color: #007bff;
			border: none;
		}

		.btn-primary:hover {
			background-color: #0056b3;
		}

		.modal-body {
			max-height: 400px;
			overflow-y: auto;
		}
	</style>
</head>

<body>

	<div class="container my-5">
		<div class="row justify-content-center">
			<div class="col-md-6">
				<div class="card">
					<img class="card-img-top" src="<?= $hotel->showImage($hotelUid); ?>" alt="Hotel Image">
					<div class="card-body">
						<h5 class="card-title"><?= $hotel->showName($hotelUid); ?></h5>
						<p class="card-text"><?= $hotel->showAdd($hotelUid); ?></p>
					</div>
				</div>
			</div>
		</div>

		<div class="row justify-content-center mt-5">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">Update Profile</div>
					<div class="card-body">
						<p class="card-text">Update your hotel profile to be displayed</p>
						<a href="profile_hotel.front.php" class="btn btn-primary">Update Profile</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row justify-content-center mt-3">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">View Packages</div>
					<div class="card-body">
						<p class="card-text">Add new packages or edit existing packages</p>
						<a href="packages_hotel.front.php" class="btn btn-primary">Update Packages</a>
					</div>
				</div>
			</div>
		</div>

		<div class="row justify-content-center mt-3">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">View Reservations</div>
					<div class="card-body">
						<p class="card-text">Manage your reservations here</p>
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#reservation">View Reservations</button>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Reservation Modal -->
	<div class="modal fade" id="reservation" tabindex="-1" aria-labelledby="reservationTitle" aria-hidden="true">
		<div class="modal-dialog modal-xl modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="reservationTitle">Your Reservations</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php
					$res->showReservationHotel($hotelUid);
					?>
				</div>
			</div>
		</div>
	</div>

	<!-- Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>

</html>