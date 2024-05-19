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
  <title>Paragon | About Us</title>
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

    .form-container {
      background-color: grey;
      padding: 20px;
      border-radius: 8px;
    }

    .container {
      width: 100%;
      /* Assuming the container has a specific width or is a block element */
    }

    .wide-button {
      width: 100%;
      background: #FFB6C1;
      color: #111111;
      border: none;
      border-radius: 5px;
      padding: 8px 20px;
      font-weight: bold;
    }

    .wide-button:hover {
      background: #FF9AA2;
      color: #111111;
      font-weight: bold;
    }

    .nav-item a {
      color: #ffffff;
      padding-left: 0;
    }

    .nav-item a:hover {
      color: #888888;
    }
  </style>

</head>

<body id="page-top" class="index" data-pinterest-extension-installed="cr1.3.4">
  <!-- HEADER SECTION -->
  <?php include('header.php') ?>


  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-lg-6">
        <h1>About Us</h1>
        <p>Whether you’re curious about our cinemas, in love with our service, or have feedback for us – we’d love to hear from you.</p>
        <br>
        <h3>Paragon Email Support:</h3>
        <h5>cs@paragon.com.my</h5><br>
        <h3>Paragon Customer Relations Hotline:</h3>
        <h5>+603-7713 7888</h5><br>
        <h3>Service Hours :</h3>
        <h5>Mon to Fri 9.00am to 6.00pm</h5>
      </div>
      <div class="col-lg-6">
        <h2>Contact Us</h2>
        <div class="form-container">
          <form>
            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" required>
            </div>
            <div class="mb-3">
              <label for="contact" class="form-label">Contact Number</label>
              <input type="text" class="form-control" id="contact" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" required>
            </div>
            <div class="mb-3">
              <label for="subject" class="form-label">Subject</label>
              <input type="text" class="form-control" id="subject" required>
            </div>
            <div class="mb-3">
              <label for="category" class="form-label">Category</label>
              <select class="form-control" id="category" required>
                <option value="">Select a category</option>
                <option value="General Inquiry">General Inquiry</option>
                <option value="Feedback">Feedback</option>
                <option value="Support">Support</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="location" class="form-label">Cinema Location</label>
              <input type="text" class="form-control" id="location" required>
            </div>
            <div class="mb-3">
              <label for="more" class="form-label">Tell us more</label>
              <textarea class="form-control" id="more" rows="3" required></textarea>
            </div>
            <div class="mb-3">
              <label for="attachment" class="form-label">Attachment</label>
              <input type="file" class="form-control" id="attachment">
            </div>
            <!-- <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" id="proceed" required>
                  <label class="form-check-label" for="proceed">Click to proceed</label>
                </div> -->
            <button type="submit" class="wide-button">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- FOOTER SECTION -->
  <?php include('footer.php') ?>
</body>

</html>