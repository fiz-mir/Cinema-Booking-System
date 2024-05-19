<?php
session_start();
include 'dbConnect.php';

if (!isset($_SESSION['USER_ID'])) {
    header("location:login.php");
    exit();
}

$userid = $_SESSION['USER_ID'];

$query = "SELECT * FROM invoice where custid = '$userid'";
$result = mysqli_query($conn, $query);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragon | View Booking</title>
    <!-- ::::::::::::::Icon Tab::::::::::::::-->
    <link rel="shortcut icon" href="assets/images/logo/paragon_logo.png" type="image/png">
    <link rel="stylesheet" href="assets/_navbarStyles.css" />
    <link rel="stylesheet" href="assets/_footerStyles.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
       .sign-in-btn {
    background: #FFB6C1;
    color: #111111;
    font-weight: bold;
    border-radius: 5px;
    padding: 8px 20px;
  }

  .sign-in-btn:hover {
    background: #FF9AA2;
    color: #ffffff;
    font-weight: bold;
  }
    </style>
</head>

<body>

<!-- HEADER SECTION -->
<?php include('header.php') ?>

    <section class="overflow-hidden py-5 my-3">
        <div class="container overflow-hidden text-center">
            <div class="row">
            <h1 style="color:#ffffff;" class="mb-3">Booking Details</h1>
                <?php if ($result) {
                    foreach ($result as $row) { ?>

                        <div class="table-responsive-sm container overflow-hidden text-center">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td scope="row">Theater</td>
                                        <td>Paragon Cinema - KTCC Mall</td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Hall No.</td>
                                        <td><?php echo $row["hallNo"]; ?></td>
                                    </tr>
                                    <tr>
                                        <td scope="row">Date</td>
                                        <td><?php echo $row["date"]; ?></td>


                                    </tr>
                                    <tr>
                                        <td scope="row">Showtime</td>
                                        <td><?php echo $row["showtime"]; ?></td>
                                        
                                    </tr>
                                    <tr>
                                        <td scope="row">Seats Chosen</td>
                                        <td><?php echo $row["chosenSeat"]; ?></td>                                                                                 
                                    </tr>
                                    <tr>
                                        <td scope="row">Amount</td>
                                        <td>RM <?php echo $row["price"]; ?></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        
            </div>
        </div>
<?php }
                } ?>
    </section>


  <!-- FOOTER SECTION -->
  <?php include('footer.php') ?>



</body>

</html>