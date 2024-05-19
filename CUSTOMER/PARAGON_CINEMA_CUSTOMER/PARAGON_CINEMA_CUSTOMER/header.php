<nav class="navbar sticky-top navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <div class="image-container">
            <a href="index.php"><img class="img-fluid" src="assets/images/logo/paragon_logo.png" alt=""></a>
        </div>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'index.php') echo 'active'; ?>" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'movieListings.php' || basename($_SERVER['PHP_SELF']) == 'moviedetails.php') echo 'active'; ?>" href="movieListings.php">Movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'aboutus.php') echo 'active'; ?>" href="aboutus.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'faq.php') echo 'active'; ?>" href="faq.php">FAQ</a>
                </li>
                <?php
                $userid = $_SESSION['USER_ID'];
                $query04 = "SELECT bookid FROM bookings WHERE custid = '$userid'";
                $result04 = mysqli_query($conn, $query04);
                $rowCount = mysqli_num_rows($result04);

                if ($rowCount > 0) {
                ?>
                    <li class="nav-item">
                        <a style="color:#FF9AA2;" class="nav-link <?php if (basename($_SERVER['PHP_SELF']) == 'viewbooking.php') echo 'active'; ?>" href="viewbooking.php">View Booking</a>
                    </li>
                <?php
                }
                ?>

                <?php if (isset($_SESSION['USER_ID'])) { ?>
                    <li class="nav-item ml-2">
                        <a style="color:#111111" class="nav-link sign-in-btn" href="logout.php">Sign Out</a>
                    </li>
                <?php } else { ?>
                    <li class="nav-item ml-2">
                        <a style="color:#111111" class="nav-link sign-in-btn <?php if (basename($_SERVER['PHP_SELF']) == 'login.php') echo 'active'; ?>" href="login.php">Sign In</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>