<?php
// Include your database connection script
include '../backend/connection.back.php';

// Function to fetch travel destinations from the database
function getTravelDestinationsFromDatabase()
{
    global $connection; // Assuming $connection is your database connection variable

    // Initialize an empty array to store destinations
    $destinations = array();

    // Perform database query to fetch destinations
    $query = "SELECT id, name, des, image FROM product";
    $result = mysqli_query($connection, $query);

    // Check if the query was successful
    if ($result) {
        // Fetch data row by row
        while ($row = mysqli_fetch_assoc($result)) {
            // Add each row to the destinations array
            $destinations[] = $row;
        }
        // Free result set
        mysqli_free_result($result);
    } else {
        // Handle query error
        echo "Error: " . mysqli_error($connection);
    }

    // Close database connection
    mysqli_close($connection);

    // Return the array of destinations
    return $destinations;
}
