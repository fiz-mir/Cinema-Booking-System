<?php
session_start();

$hostname = "localhost";
$username = "root";
$dbname = "paragoncinemadb";
			
$connect = mysqli_connect($hostname, $username) OR DIE ("Connection failed!");
$selectdb = mysqli_select_db($connect, $dbname) OR DIE ("Database cannot be accessed");
			
$username = $_SESSION["username"];
			
$sql = "SELECT * FROM manager WHERE username = '$username' ";  
	
$sendsql = mysqli_query($connect, $sql) OR DIE("CONNECTION ERROR");	
			
$row = mysqli_fetch_assoc($sendsql)		

?>
<!DOCTYPE html>
<html>
	<head>
		<title>MANAGER | PARAGON</title>
		<link rel="shortcut icon" href="img/paragon_logo.png" type="image/png">
	</head>
	
	<?php include "manager_sidenav.php"; ?>
	<body>
		<div class="container">
			<h1>Booking Details</h1>

			<?php
				$hostname = "localhost";
				$username = "root";
				$password = "";
				$dbname = "paragoncinemadb";

				$connect = mysqli_connect($hostname, $username, $password, $dbname) OR DIE ("Connection failed");

				$sql = "SELECT c.name, i.chosenSeat FROM invoice i
						JOIN customer c ON i.custid = c.custid";
				$sendsql = mysqli_query($connect,$sql);

				

				if($sendsql){
					$count = 1;
					echo "<table>
					<tr>
						<th>No.</th>
                        <th>Customer Name</th>
						<th>Seat No</th>

					</tr>";

				foreach($sendsql as $row)
				{
					echo "<tr>";
						echo "<td>". $count ."</td>";
						echo "<td>". $row["name"] ."</td>";
						echo "<td>". $row["chosenSeat"] ."</td>";
					echo "</tr>";
					$count++;
				}

				echo "</table>";
				
				}else{
					echo "<p>Failed.</p>";
				}
			?>
		</div>
    </body>

	<style>
		body{
			background-color: #BF0885;
		}

		.container{
            margin: 50px;
			text-align: center;
			color: black;
			border-radius: 50px;
        }

		h1{
			font-size: 50px;
			background-color: pink;
			border-radius: 50px;
		}

		.add{
			padding: 5px;
			background: purple;
			text-decoration: none;
			float: right;
			margin-top: -20px;
			border-radius: 2px;
			font-size: 20px;
			font-weight: 500;
			color: #fff;
			border-radius: 30px;
		}
		
		.container h1{
			text-align: center;
		}
		
		table, th{
			background-color: #84056B;
			font-size: 20px;
			border: 3px solid black;
			text-align: center;
			height:50px;
			color: white;
			border-radius: 30px;
		}

		table, td{
			font-size: 20px;
			border: 3px solid black;
			text-align: center;
			width:1400px;
			height:50px;
			background-color: pink;
			color: black;
			border-radius: 30px;
		}
	</style>
</html>