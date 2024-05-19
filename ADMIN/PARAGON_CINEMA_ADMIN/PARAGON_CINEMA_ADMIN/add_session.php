<?php
    session_start();

    $hostname = "localhost";
    $username = "root";
    $dbname = "paragoncinemadb";

    $connect = mysqli_connect($hostname, $username) OR DIE ("Connection failed!");
    $selectdb = mysqli_select_db($connect, $dbname) OR DIE ("Database cannot be accessed");

    $username = $_SESSION["username"];

    $sql = "SELECT * FROM CLERK WHERE username = '$username' ";

    $sendsql = mysqli_query($connect, $sql) OR DIE("CONNECTION ERROR");

    $row = mysqli_fetch_assoc($sendsql);

    // Fetch available halls from the database
    $hallSql = "SELECT * FROM hall";
    $hallResult = mysqli_query($connect, $hallSql);

    // Fetch available movies from the database
    $movieSql = "SELECT * FROM movie";
    $movieResult = mysqli_query($connect, $movieSql);
    
    if (isset($_POST["add"])) {
        $hallNo = $_POST["hallNo"];
        $movieid = $_POST["movieid"];
        $showtime_start = $_POST["showtime_start"];
        $showtime_end = $_POST["showtime_end"];

        $insertSql = "INSERT INTO sessions (hallNo, movieid, showtime_start, showtime_end) VALUES ('$hallNo', '$movieid', '$showtime_start', '$showtime_end')";

        $result = mysqli_query($connect, $insertSql);

        if ($result) {
            ?><script>
                alert("Data has been added");
                window.location = "session.php";
            </script><?php
            exit();
        } else {
            echo "Error adding new movie: " . mysqli_error($connect);
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>CLERK | PARAGON</title>
        <link rel="shortcut icon" href="img/paragon_logo.png" type="image/png">
    </head>
    <body>
        <div class="container">
            <h1> Add New Session </h1>

            <form action="" method="POST">
                <div class="form-group">
                    <label for="hallNo"></label>
                    <select name="hallNo" required>
                        <option value="">Select Hall</option>
                        <?php while ($hallRow = mysqli_fetch_assoc($hallResult)) { ?>
                            <option value="<?php echo $hallRow['hallNo']; ?>"><?php echo $hallRow['hallNo']; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="movieid"></label>
                    <select name="movieid" required>
                        <option value="">Select Movie</option>
                        <?php while ($movieRow = mysqli_fetch_assoc($movieResult)) { ?>
                            <option value="<?php echo $movieRow['movieid']; ?>"><?php echo $movieRow['title']; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="showtime_start"></label>
                    <select name="showtime_start" required>
                        <option value="">Start Showtime</option>
                        <option value="2023-06-07 09:30:00">1) 2023-06-07 09:30:00</option>
                        <option value="2023-06-20 09:00:00">2) 2023-06-20 09:00:00</option>
                        <option value="2023-07-18 13:00:00">3) 2023-07-18 13:00:00</option>
                        <option value="2023-07-20 12:00:00">4) 2023-07-20 12:00:00</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="showtime_end"></label>
                    <select name="showtime_end" required>
                        <option value="">End Showtime</option>
                        <option value="2023-06-07 11:30:00">1) 2023-06-07 11:30:00</option>
                        <option value="2023-06-20 12:00:00">2) 2023-06-20 12:00:00</option>
                        <option value="2023-07-18 17:00:00">3) 2023-07-18 17:00:00</option>
                        <option value="2023-07-20 15:00:00">4) 2023-07-20 15:00:00</option>
                    </select>
                </div>

                <br>
                <input type="submit" name="add" value="ADD"/>
            </form>
        </div>
    </body>

    <style>
		body{
			background-color: #BF0885;
		}

		.container{
			background-color: pink;
            margin: 50px;
			text-align: center;
			color: black;
			border-radius: 50px;
        }

		h1{
            font-family: Poppins;
			text-align: center;
			color: black;
            margin: 30px;
            font-size: 50px;
		}

        .form-group {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-bottom: 10px;
            margin-left: 400px;
            text-align: center;
        }

        .form-group label {
            width: 150px;
            margin-right: 10px;
        }

        .form-group input{
            width: 270px;
        } 
        
        .form-group select{
            width: 300px;
        }
        
		input, select{
			width: 20%;
			border: 1px;
			border-radius: 5px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px grey;
		}
	</style>
</html>
