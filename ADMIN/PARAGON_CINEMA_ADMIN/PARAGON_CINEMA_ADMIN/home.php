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
			
$row = mysqli_fetch_assoc($sendsql)		

?>
<!DOCTYPE html>
<html>
	<head>
		<title>CLERK | PARAGON</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="shortcut icon" href="img/paragon_logo.png" type="image/png">
	</head>
	
	<?php include "sidenav.php"; ?>
    <body>
        <div class="container">
			<h1>Welcome</h1>
			<?php
				echo "<h2>". $row["name"] . "</h2>";
			?>
			<h2>To the Paragon Clerk Management</h2>
			<br>
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
			font-size: 50px;
		}
	</style>
</html>