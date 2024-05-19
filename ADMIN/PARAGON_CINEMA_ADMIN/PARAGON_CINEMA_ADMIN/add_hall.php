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

    // Check if the form is submitted
    if (isset($_POST["add"])) {
        // Get the movie data from the form
        $hallNo = $_POST["hallNo"];
        $hallName = $_POST["hallName"];
        
        // Insert the movie data into the database
        $insertSql = "INSERT INTO hall (hallNo, hallName) VALUES ('$hallNo', '$hallName')";

        $result = mysqli_query($connect, $insertSql);

        if ($result) {
            // Automatically insert seat data for the new hall
            $insertSeatSql = "INSERT INTO seats (seatNo, hallNo) 
                                VALUES ('A1', '$hallNo'), ('A2', '$hallNo'), ('A3', '$hallNo'), ('A4', '$hallNo'), ('A5', '$hallNo'), ('A6', '$hallNo'), 
                                ('B1', '$hallNo'), ('B2', '$hallNo'), ('B3', '$hallNo'), ('B4', '$hallNo'), ('B5', '$hallNo'), ('B6', '$hallNo'), 
                                ('C1', '$hallNo'), ('C2', '$hallNo'), ('C3', '$hallNo'), ('C4', '$hallNo'), ('C5', '$hallNo'), ('C6', '$hallNo'), 
                                ('D1', '$hallNo'), ('D2', '$hallNo'), ('D3', '$hallNo'), ('D4', '$hallNo'), ('D5', '$hallNo'), ('D6', '$hallNo'), 
                                ('E1', '$hallNo'), ('E2', '$hallNo'), ('E3', '$hallNo'), ('E4', '$hallNo'), ('E5', '$hallNo'), ('E6', '$hallNo'), 
                                ('F1', '$hallNo'), ('F2', '$hallNo'), ('F3', '$hallNo'), ('F4', '$hallNo'), ('F5', '$hallNo'), ('F6', '$hallNo'), 
                                ('G1', '$hallNo'), ('G2', '$hallNo'), ('G3', '$hallNo'), ('G4', '$hallNo'), ('G5', '$hallNo'), ('G6', '$hallNo'),
                                ('H1', '$hallNo'), ('H2', '$hallNo'), ('H3', '$hallNo'), ('H4', '$hallNo'), ('H5', '$hallNo'), ('H6', '$hallNo')";
            $resultSeat = mysqli_query($connect, $insertSeatSql);
        
            if ($resultSeat) {
                ?><script>
                    alert("Data has been added");
                    window.location = "hall.php";
                </script><?php
                exit();
            } else {
                echo "Error inserting seat data: " . mysqli_error($connect);
            }
        } else {
            echo "Error adding new hall: " . mysqli_error($connect);
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
                <h1> Add New Hall </h1>

                <form action="" method="POST">
                    <input type="text" name="hallNo" placeholder="Hall Number" required/><br/>
                    <input type="text" name="hallName" placeholder="Hall Name" required/><br/>
                    
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

		input{
			width: 20%;
			border: 1px;
			border-radius: 5px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px grey;
		}
	</style>
</html>
