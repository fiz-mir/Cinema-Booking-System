<?php
session_start();
include 'dbConnect.php';

// Get the data from the AJAX request
$theater = $_POST['theater'];
$custid = $_SESSION['USER_ID'];
$hallNo = $_POST['hallNo'];
$date = $_POST['date'];
$showtime = $_POST['showtime'];
$seatsChosen = $_POST['seatsChosen'];
$amount = $_POST['amount'];

// Prepare the query using prepared statements to prevent SQL injection
$query = "INSERT INTO invoice (price, custid, theaterName, hallNo, date, showtime, chosenSeat) 
          VALUES (?, ?, ?, ?, ?, ?, ?)";

// Create a prepared statement
$stmt = mysqli_prepare($conn, $query);

// Bind the parameters to the prepared statement
mysqli_stmt_bind_param($stmt, "disssss", $amount, $custid, $theater, $hallNo, $date, $showtime, $seatsChosen);

// Execute the prepared statement
$result = mysqli_stmt_execute($stmt);

// Check if the insertion was successful
if ($result) {
    // The data was inserted successfully
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    // Redirect to the appropriate page
    header("Location: bookingSuccess.php");
    exit();
} else {
    // An error occurred during insertion
    echo "Error: " . mysqli_error($conn);
}

// Close the prepared statement and the database connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
?>
