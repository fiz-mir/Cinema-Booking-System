<?php
session_start();
include 'dbConnect.php';

if (!isset($_SESSION['USER_ID'])) {
    header("location:login.php");
    exit();
}

$movieID = $_GET["movieid"];
$query = "SELECT * FROM movie where movieid = '$movieID'"; // display specific movie based on movieid
$result = mysqli_query($conn, $query);

$query02 = "SELECT * FROM sessions  where movieid = '$movieID' ORDER BY showtime_start ASC";
$result02 = mysqli_query($conn, $query02);

$query03 = "SELECT * FROM sessions LEFT JOIN seat USING (hallNo)  where movieid = '$movieID' ORDER BY showtime_start ASC";
$result03 = mysqli_query($conn, $query02);

function getTrailerLinkFromDatabase($conn, $movieID)
{
    $query = "SELECT trailer FROM movie WHERE movieid = '$movieID'";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $trailerLink = $row["trailer"];

        // Extract the video ID from the YouTube URL
        $videoID = '';
        parse_str(parse_url($trailerLink, PHP_URL_QUERY), $videoID);
        $videoID = $videoID['v'] ?? '';

        if (!empty($videoID)) {
            // Construct the embed URL
            $embedURL = "https://www.youtube.com/embed/" . $videoID;
            return $embedURL;
        }
    }

    return "https://www.example.com/default-trailer";
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/movie-detail.css" />
    <link rel="stylesheet" href="assets/_navbarStyles.css" />
    <link rel="stylesheet" href="assets/_footerStyles.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            background-color: #111111;
            color: #FFFFFF;
        }

        .cust-button {
            background-color: #FFB6C1;
            color: #111111;
        }

        .cust-button:hover {
            background: #FF9AA2;
            color: #ffffff;
        }
    </style>
</head>

<body>
    <!-- HEADER SECTION -->
    <?php include('header.php') ?>

    <?php


    if ($result) {
        foreach ($result as $row) {

    ?>
            <section id="first-section" class="overflow-hidden py-5 mb-3">
                <div class="container overflow-hidden text-center">
                    <div class="row">
                        <div class="col-12 col-lg-3 px-4 text-center">
                            <img style="width:200px;height:300px;" class="gallery-image" src="assets/images/movie_poster/<?php echo $row["poster"]; ?>" alt="Movie Poster">
                        </div>
                        <div class="col-12 col-lg-9">
                            <h1 class="fw-bold font-xxl mb-0"><?php echo $row["title"] ?></h1>
                            <ul class="row px-0">
                                <li class="col-12 col-sm-6 twi twi-xs twi-date mt-0">
                                    <?php
                                    $oldDate = $row["releaseDate"];
                                    $newDate = DateTime::createFromFormat('Y-d-m', $oldDate);
                                    $formattedDate = $newDate->format('d M Y');
                                    ?>
                                    <strong>Release Date</strong>: <?php echo $formattedDate ?>
                                </li>
                                <li class="col-12 col-sm-6 twi twi-xs twi-date mt-0">
                                    <strong>Language</strong>: ENG
                                </li>
                                <li class="col-12 col-sm-6 twi twi-xs twi-date mt-0">
                                    <strong>Running Time</strong>: <?php echo  $row["duration"] ?>
                                </li>
                                <li class="col-12 col-sm-6 twi twi-xs twi-date mt-0">
                                    <strong>Subtitles</strong>: BM
                                </li>
                                <li class="col-12 col-sm-6 twi twi-xs twi-date mt-0">
                                    <strong>Genre</strong>: <?php echo  $row["genre"] ?>
                                </li>
                            </ul>
                            <div class="mt-3">
                                <div class="row">
                                    <div class="col-sm-9">
                                        <div align="left"><strong>Synopsis</strong></div>
                                        <p><?php echo $row["description"]; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="d-flex align-items-center">
                                        <i class="bi bi-play-circle-fill" style="font-size: 2rem;"></i>
                                        <span class="watch-trailer ml-2" style="padding: 5px 2px; margin-left: 10px; cursor: pointer;">WATCH TRAILER</span>
                                    </div>
                                </div>
                            </div>
                            <div id="trailer-modal">
                                <div id="trailer-content">
                                    <iframe id="trailer-iframe" src="" frameborder="0" allowfullscreen></iframe>
                                </div>
                                <div id="close-trailer">&#x2715;</div>
                            </div>
                            <div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

    <?php
        }
    }

    ?>

    <div id="second-section" class="overflow-hidden bg-grey py-4">
        <div class="container overflow-hidden text-center">
            <div class="row">
                <h1 class="fw-bold font-xxl mb-0 text-center">Showtimes</h1>
                <?php
                if (mysqli_num_rows($result02) > 0) {
                    foreach ($result02 as $row) {
                        $showtimeStart = $row["showtime_start"];
                        $dateTime = new DateTime($showtimeStart);
                        $formattedDateTime = $dateTime->format('d M Y, H:i');
                ?>
                        <div class="col-12 col-lg-3 px-4 text-center mt-4">
                            <a href="booking_seat.php?SESS_ID=<?php echo $row['session_id']; ?>&HALL_ID=<?php echo $row['hallNo']; ?>" class="btn showtime-btn"><?php echo $formattedDateTime; ?></a>
                        </div>
                <?php
                    }
                } else {
                    echo '<h4 class="text-center my-3">No showtimes available.</h4>';
                }
                ?>
            </div>
        </div>
    </div>




    <!-- FOOTER SECTION -->
    <?php include('footer.php') ?>
    
    <script>
        $(document).ready(function() {
            $(".watch-trailer").click(function() {
                var trailerLink = "<?php echo getTrailerLinkFromDatabase($conn, $movieID); ?>";
                $("#trailer-iframe").attr("src", trailerLink);
                $("#trailer-modal").show();
            });

            $("#trailer-modal").click(function() {
                $("#trailer-modal").hide();
                $("#trailer-iframe").attr("src", "");
            });
        });
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
    <?php
    // Close the database connection
    mysqli_close($conn);
    ?>
</body>

</html>