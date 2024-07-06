<?php
include '../includes/navbar.php';
include '../connection.php';

// Check if neither custUid nor hotelUid is set in the session
if (!isset($_SESSION['custUid']) && !isset($_SESSION['hotelUid'])) {
    // Redirect the user to the login page
    header("Location: ../frontend/login.front.php");
    exit(); // Make sure to exit after redirecting
}
?>
<html>

<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body>
    <!-- Search Form -->
    <div class="container mt-4">
        <form method="GET">
            <div class="form-row align-items-center">
                <div class="col-auto">
                    <label class="sr-only" for="destinationSearch">Destination</label>
                    <input type="text" class="form-control mb-2" id="destinationSearch" name="search" placeholder="Search Destination">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Search</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Destination Cards -->
    <section class="ftco-section">
        <div class="container">
            <div class="row">
                <?php
                // Check if the database connection is established
                if ($conn) {
                    // Fetch destinations from the database
                    if(isset($_GET['search']) && !empty(trim($_GET['search']))) {
                        // If search query is provided, filter destinations based on the search input
                        $search = mysqli_real_escape_string($conn, $_GET['search']);
                        $select_destination = mysqli_query($conn, "SELECT * FROM destination WHERE name LIKE '%$search%' OR description LIKE '%$search%' LIMIT 6");
                    } else {
                        // Otherwise, fetch all destinations
                        $select_destination = mysqli_query($conn, "SELECT * FROM destination LIMIT 6");
                    }

                    // Check if destinations are fetched successfully
                    if ($select_destination && mysqli_num_rows($select_destination) > 0) {
                        // Loop through the fetched destinations
                        while ($fetch_destination = mysqli_fetch_assoc($select_destination)) {
                            $description = $fetch_destination['description'];
                            $short_description = strlen($description) > 100 ? substr($description, 0, 100) . '...' : $description;
                ?>
                            <div class="col-md-4 ftco-animate">
                                <div class="card mb-4">
                                    <img class="card-img-top" src="../Admin/<?php echo $fetch_destination['image']; ?>" alt="Destination Image" style="width: 100%; height: 200px; object-fit: cover;">
                                    <div class="card-body">
                                        <div class="card-header text-center">
                                            <h6 class="card-title"><?php echo $fetch_destination['name']; ?></h6>
                                        </div>

                                        <p class="card-text"><?php echo $short_description; ?></p>
                                        <?php if (strlen($description) > 100) { ?>
                                            <a href="#" class="btn btn-link read-more" data-full="<?php echo $description; ?>">Read more</a>
                                        <?php } ?>
                                        <!-- Hidden div to store full description -->
                                        <div class="full-description" style="display: none;"><?php echo $description; ?></div>
                                        <button type="button" class="btn btn-success btn-lg btn-block">Location</button>
                                    </div>
                                </div>
                            </div>
                <?php
                        }
                    } else {
                        // Display a message if no destinations are found
                        echo '<p class="empty">No destinations found!</p>';
                    }
                } else {
                    // Display an error message if the database connection fails
                    echo '<p class="error">Database connection failed!</p>';
                }
                ?>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Add event listener to all "Read more" links
            var readMoreLinks = document.querySelectorAll('.read-more');
            readMoreLinks.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    var fullDescription = this.getAttribute('data-full');
                    var cardBody = this.parentElement;
                    var fullDescriptionElement = cardBody.querySelector('.full-description');
                    cardBody.querySelector('.card-text').textContent = fullDescription;
                    this.style.display = 'none';
                    fullDescriptionElement.style.display = 'block';
                });
            });
        });
    </script>


    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
