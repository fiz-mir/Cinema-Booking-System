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
        <link rel="shortcut icon" href="img/paragon_logo.png" type="image/png">
	</head>
	
	<?php include "sidenav.php"; ?>
	<body>
		<div class="container">
			<h1>Hall Details</h1>
			
			<div class="add_button">
                <a href="add_hall.php" class="add"><i class="fa fa-plus"></i> New Hall</a>
		    </div><br>

			<?php
				$hostname = "localhost";
				$username = "root";
				$password = "";
				$dbname = "paragoncinemadb";

				$connect = mysqli_connect($hostname, $username, $password, $dbname) OR DIE ("Connection failed");

				$sql = "SELECT * FROM hall";
				$sendsql = mysqli_query($connect,$sql);

				if($sendsql){
					echo "<table>
					<tr>
                        <th>Hall Number</th>
						<th>Hall Name</th>
						<th>Action</th>
					</tr>";

				foreach($sendsql as $row)
				{
					echo "<tr>";
                        echo "<td>". $row["hallNo"] ."</td>";
						echo "<td>". $row["hallName"] ."</td>";
						echo "<td><a href='edit_hall.php?hallNo=". $row["hallNo"] ."'><i class='fa fa-edit'></i></a></td>";
					echo "</tr>";
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