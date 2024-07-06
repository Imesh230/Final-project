<?php
include '../includes/navbar.php';
include '../includes/profile_customer.inc.php';

if (session_status() == PHP_SESSION_NONE) {
	session_start();
}

$custId = $_SESSION["custUid"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>User Profile</title>
	<!-- Link Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- Link Font Awesome for icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<style>
		/* Custom CSS styles */
		body {
			background-color: #f8f9fa;
		}

		.profile-card {
			width: 700px;
			margin: 20px auto;
			box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
			border: none;
		}

		.profile-card .card-body {
			background-color: #fff;
		}

		.update-profile-btn {
			background-color: #007bff;
			border-color: #007bff;
		}

		.update-profile-btn:hover {
			background-color: #0056b3;
			border-color: #0056b3;
		}
	</style>
</head>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card profile-card">
					<div class="card-body">
						<h5 class="card-title">Welcome back, <?= $cust->showName($custId); ?></h5>
						<p class="card-text"><small class="text-muted">Name: <?= $cust->showName($custId); ?></small></p>
						<p class="card-text"><small class="text-muted">Email: <?= $cust->showEmail($custId); ?></small></p>
						<p class="card-text"><small class="text-muted">Password: ********</small></p>
						<p class="card-text"><small class="text-muted">Age: <?= $cust->showAge($custId); ?></small></p>
						<p class="card-text"><small class="text-muted">Gender: <?= $cust->showGender($custId); ?></small></p>
						<p class="card-text"><small class="text-muted">Place of origin: <?= $cust->showOrigin($custId); ?></small></p>
					</div>
				</div>
			</div>
		</div>

		<div class="row justify-content-center mt-4">
			<div class="col-md-7">
				<div class="card text-center">
					<div class="card-header">Update Profile</div>
					<div class="card-body">
						<p class="card-text">Update or make changes to your profile</p>
						<a href="#updateProfile" data-toggle="modal" data-target="#updateProfile" class="btn btn-primary update-profile-btn">Update Profile</a>
					</div>
				</div>
			</div>
		</div>

		<!-- Update Profile Modal -->
		<div class="modal fade" id="updateProfile" tabindex="-1" role="dialog" aria-labelledby="profileTitle" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="profileTitle">Update Profile</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<!-- Update Profile Form -->
						<form id="updateProfileForm" method="POST" action="../includes/profile_customer.inc.php">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" id="name" name="name" value="<?= $cust->showName($custId) ?>" required>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" value="<?= $cust->showEmail($custId) ?>" required>
							</div>
							<div class="form-group">
								<label for="pwd">Password</label>
								<input type="password" class="form-control" id="pwd" name="pwd" placeholder="New Password">
							</div>
							<div class="form-group">
								<label for="age">Age</label>
								<input type="number" class="form-control" id="age" name="age" value="<?= $cust->showAge($custId) ?>" required>
							</div>
							<div class="form-group">
								<label>Gender</label><br>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="male" value="M" <?= ($cust->showGender($custId) == "Male") ? "checked" : "" ?>>
									<label class="form-check-label" for="male">Male</label>
								</div>
								<div class="form-check form-check-inline">
									<input class="form-check-input" type="radio" name="gender" id="female" value="F" <?= ($cust->showGender($custId) == "Female") ? "checked" : "" ?>>
									<label class="form-check-label" for="female">Female</label>
								</div>
							</div>
							<div class="form-group">
								<label for="origin">Place of Origin</label>
								<input type="text" class="form-control" id="origin" name="origin" value="<?= $cust->showOrigin($custId) ?>" required>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary" name="submit" form="updateProfileForm">Save Changes</button>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Link Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>