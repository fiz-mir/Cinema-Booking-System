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
    <title>Paragon | House Rules</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <!-- ::::::::::::::Icon Tab::::::::::::::-->
    <link rel="shortcut icon" href="assets/images/logo/paragon_logo.png" type="image/png">
    <link rel="stylesheet" href="assets/_navbarStyles.css" />
    <link rel="stylesheet" href="assets/_footerStyles.css" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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

        /* Added CSS for image positioning */
        .image-with-text {
            display: flex;
            align-items: center;
        }

        .image-with-text img {
            margin-right: 10px;
        }
    </style>

</head>

<body id="page-top" class="index" data-pinterest-extension-installed="cr1.3.4">

    <!-- HEADER SECTION -->
    <?php include('header.php') ?>

        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-12">
                    <h1>House Rules</h1><br>
                    <p>DI PARAGON, KAMI SENTIASA MEMASTIKAN SEMUA PENONTON KAMI MENIKMATI PENGALAMAN MENONTON YANG MENYERONOKKAN KERJASAMA ANDA AMAT DIPERLUKAN UNTUK MEMATUHI PERATURAN YANG BERIKIUT:</p>
                    <p>At PARAGON, we always work to provide an enjoyable cinematic experience for all our customers. We seek your cooperation to abide by our house rules as follows:</p><br>
                    <hr>

                    <!-- First image-text combination -->
                    <div class="image-with-text">
                        <img src="assets/images/icons/nosmoking.png" alt="Image 1">
                        <p>1. DILARANG MEROKOK DI DALAM KAWASAN PAWAGAM </p>
                    </div><br>
                    <!-- Second image-text combination -->
                    <div class="image-with-text">
                        <img src="assets/images/icons/nooutsidefood.png" alt="Image 2">
                        <p>2. MAKANAN DAN MINUMAN LUAR TIDAK DIBENARKAN </p>
                    </div><br>
                    <div class="image-with-text">
                        <img src="assets/images/icons/norecording.png" alt="Image 3">
                        <p>3. SEBARANG BENTUK RAKAMAN VIDEO ATAU BUNYI DILARANG SAMA SEKALI </p>
                    </div> <br>
                    <div class="image-with-text">
                        <img src="assets/images/icons/eighteenplus.png" alt="Image 4">
                        <p>4. FILEM 18+ ADALAH TERHAD KEPADA PENONTON BERUMUR 18 TAHUN DAN KE ATAS SAHAJA </p>
                    </div> <br>
                    <div class="image-with-text">
                        <img src="assets/images/icons/cctv.png" alt="Image 5">
                        <p>5. KAWASAN INI DI BAWAH PENGAWASAN KAMERA LITAR TERTUTUP</p>
                    </div> <br>
                    <div class="image-with-text">
                        <img src="assets/images/icons/child.png" alt="Image 6">
                        <p>6. KANAK KANAK BERUMUR 3 TAHUN DAN KE ATAS MEMERLUKAN TIKET UNTUK MEMASUKI PAWAGAM </p>
                    </div> <br>
                    <div class="image-with-text">
                        <img src="assets/images/icons/silence.png" alt="Image 7">
                        <p>7. SILA SENYAPKAN TELEFON ANDA KETIKA TAYANGAN BERLANGSUNG</p>
                    </div> <br>
                </div>
            </div>
        </div>



    <!-- FOOTER SECTION -->
    <?php include('footer.php') ?>

</body>

</html>