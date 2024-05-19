<?php
session_start();
include 'dbConnect.php';

if (!isset($_SESSION['USER_ID'])) {
    header("location:login.php");
    exit();
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Paragon | FAQs</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- ::::::::::::::Icon Tab::::::::::::::-->
   <link rel="shortcut icon" href="assets/images/logo/paragon_logo.png" type="image/png">
  <link rel="stylesheet" href="assets/_navbarStyles.css" />
  <link rel="stylesheet" href="assets/_footerStyles.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <style>
    body {
      background-color: #1D1D1D;
      color: #ffffff;
    }

    .faq-text {
      margin-top: 20px;
    }
  </style>

</head>

<body id="page-top" class="index" data-pinterest-extension-installed="cr1.3.4">

  <!-- HEADER SECTION -->
  <?php include('header.php') ?>

  <div class="container mt-4 mb-4">
    <div class="row">
      <div class="col-lg-12">
        <h1>FAQs</h1><br>
        <h4>How can I apply for a refund?</h4>
        <p>- Issues pertaining to the cinemas' facilities (e.g. air conditioning, seats, hall, lighting, electrical and/or plumbing).

          <br>- Issues pertaining to projection equipment (e.g. session breakdown, sound system and/or subpar visual quality).
        </p><br>
        <h4>What should I do if my transaction failed during payment/check out process?</h4>
        <p>Please email us at feedback@tgv.com.my with the following details:<br>

          Full name: <br>
          Email (used during purchase): <br>
          Contact number: <br>
          Cinema location: <br>
          Transaction ID: <br>

          Kindly DO NOT provide additional info which has not been requested as above.</p><br>
        <h4>I would like to bring my kid to the movies. Do I have to purchase a ticket for them?
        </h4>
        <p>- Kids with the height above 90cm will be required to purchase tickets.<br>
          - Kids who are below the height requirement may enter for free but will need to sit with the parents/guardians, preferably in their laps.<br>
          - A height measurement standee will be available at our tearing point and near the ticketing kiosk.<br>
          - TGV Cinemas has the right to revise the terms and condition without prior notice.</p><br>
        <h4>What should I do if my transaction failed before payment process?</h4>
        <p>Do not worry, as long as you have not insert the OTP / TAC code, the purchase is not complete.<br>

          Please re-select your booking preference and complete your purchase journey.</p><br>
        <h4>Can I bring in outside food into Paragon?</h4>
        <p>- Customers are required to purchase food and beverage from TGV Cinemas' snack bars. <br>

          - Food purchased outside of TGV Cinemas premises will not be allowed in the cinema/movie halls. <br>

          - Customers can place their outside food and beverage at the ticket tearing point before entering the cinema/movie halls.</p>

      </div>
    </div>
  </div>
  <!-- FOOTER SECTION -->
  <?php include('footer.php') ?>
</body>

</html>