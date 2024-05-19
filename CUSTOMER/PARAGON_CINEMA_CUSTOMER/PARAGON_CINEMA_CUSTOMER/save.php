<?php
// (A) LOAD LIBRARY
require "booking-lib.php";

// (B) SAVE
$_RSV->save($_POST["sessid"], $_POST["userid"], $_POST["hallno"],$_POST["seats"]);

// Redirect to booking details page
header("location: displayBookingDetails.php");
exit();
