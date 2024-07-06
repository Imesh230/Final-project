<?php
include '../includes/navbar.php';
include '../backend/connection.back.php';
include '../backend/reservation.back.php';

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

$_SESSION["location"] = $_GET["location"];

$_SESSION["checkInDate"] = $_GET["checkInDate"];
$_SESSION["checkOutDate"] = $_GET["checkOutDate"];

// Retrieve available hotels
$reservation = new Reservation();
$reservation->setSearchDetails($_SESSION["location"], $_SESSION["checkInDate"], $_SESSION["checkOutDate"]);
$reservation->getHotelDetails();

// Retrieve available travel destinations from the database
$destinations = getTravelDestinations($_SESSION['location']);

// Display available hotels and destinations
?>
<div class="card-container">
    <!-- Display available hotels -->
    <?php foreach ($hotels as $hotel) : ?>
        <div class="card">
            <img src="<?php echo $hotel['image']; ?>" alt="<?php echo $hotel['name']; ?>">
            <div class="card-body">
                <h3><?php echo $hotel['name']; ?></h3>
                <p><?php echo $hotel['description']; ?></p>
                <p>Price: <?php echo $hotel['price']; ?></p>
                <!-- Additional hotel details as needed -->
            </div>
        </div>
    <?php endforeach; ?>

    <!-- Display available travel destinations -->
    <?php foreach ($destinations as $destination) : ?>
        <div class="card">
            <img src="<?php echo $destination['image']; ?>" alt="<?php echo $destination['name']; ?>">
            <div class="card-body">
                <h3><?php echo $destination['name']; ?></h3>
                <p><?php echo $destination['description']; ?></p>
                <p>Rating: <?php echo $destination['rating']; ?></p>
                <!-- Additional destination details as needed -->
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- card view -->
<style>
    .card-container {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin-top: 20px;
    }

    .card {
        width: 300px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
    }

    .card-body {
        padding: 20px;
    }
</style>
?>

<?php
// Function to retrieve available travel destinations from the database
function getTravelDestinations($location)
{
    global $conn;
    $sql = "SELECT id, name, description, photo FROM destinations WHERE area LIKE '%$location%'";
    $result = $conn->query($sql);
    $destinations = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $destinations[] = $row;
        }
    }

    return $destinations;
}
?>