<?php
    session_start();

    $hostname = "localhost";
    $username = "root";
    $dbname = "paragoncinemadb";

    $connect = mysqli_connect($hostname, $username) OR DIE("Connection failed!");
    $selectdb = mysqli_select_db($connect, $dbname) OR DIE("Database cannot be accessed");

    $username = $_SESSION["username"];

    $sql = "SELECT * FROM CLERK WHERE username = '$username' ";

    $sendsql = mysqli_query($connect, $sql) OR DIE("CONNECTION ERROR");

    $row = mysqli_fetch_assoc($sendsql);

    if (isset($_GET["hallNo"])) {
        $hallNo = $_GET["hallNo"];

        $hallQuery = "SELECT * FROM hall WHERE hallNo = '$hallNo'";
        $hallResult = mysqli_query($connect, $hallQuery);
        $hallData = mysqli_fetch_assoc($hallResult);

        if (!$hallData) {
            echo "Hall not found.";
            exit();
        }
    } else {
        echo "Invalid hall number.";
        exit();
    }

    if (isset($_POST["update"])) {
        $newHallName = $_POST["hallName"];

        $updateSql = "UPDATE hall SET hallName = '$newHallName' WHERE hallNo = '$hallNo'";

        $result = mysqli_query($connect, $updateSql);

        if ($result) {
            header("Location: hall.php");
            exit();
        } else {
            echo "Error updating hall data: " . mysqli_error($connect);
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
            <h1>Edit Hall</h1>

            <form action="" method="POST">
                <div class="form-group">
                    <label for="hallNo">Hall Number:</label>
                    <input type="text" name="hallNo" value="<?php echo $hallData["hallNo"]; ?>" readonly/>
                </div>

                <div class="form-group">
                    <label for="hallName">Hall Name:</label>
                    <input type="text" name="hallName" value="<?php echo $hallData["hallName"]; ?>" required/>
                </div>

                <br>
                <input type="submit" name="update" value="UPDATE"/>
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
			text-align: center;
			color: black;
            margin: 30px;
            font-size: 50px;
            font-family: Poppins;
		}

        .form-group {
            display: flex;
            flex-direction: row;
            align-items: center;
            margin-bottom: 10px;
            margin-left: 400px;
        }

        .form-group label {
            width: 150px;
            text-align: right;
            margin-right: 10px;
        }

        .form-group input[type="text"] {
            width: 280px;
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
