<?php
session_start();
include 'dbConnect.php';

if (!isset($_SESSION['USER_ID'])) {
    header("location:login.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragon | Movies</title>
    <!-- ::::::::::::::Icon Tab::::::::::::::-->
    <link rel="shortcut icon" href="assets/images/logo/paragon_logo.png" type="image/png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/_movieListStyles.css" />
    <link rel="stylesheet" href="assets/_navbarStyles.css" />
    <link rel="stylesheet" href="assets/_footerStyles.css" />
    <style>
        body {
            background-color: #111111;
            color: #FFFFFF;
        }
    </style>
</head>

<body>
    <!-- HEADER SECTION -->
    <?php include('header.php') ?>

    <div class="container mb-5">

        <h1 class="heading">List of Movies</h1>
        <div class="gallery">
            <?php
            $query = "SELECT * FROM movie ORDER BY movieid ASC";
            $result = mysqli_query($conn, $query);

            if ($result) {
                foreach ($result as $row) {

            ?>
                    <div class="gallery-item">
                        <a href="moviedetails.php?movieid=<?php echo $row["movieid"] ?>">
                            <img class="gallery-image" src="assets/images/movie_poster/<?php echo $row["poster"]; ?>" alt="Movie Poster">
                        </a>
                    </div>
            <?php
                }
            }

            ?>

        </div>
    </div>

    <!-- FOOTER SECTION -->
    <?php include('footer.php') ?>


</body>

</html>