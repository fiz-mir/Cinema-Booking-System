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
			<h1>Profile</h1>
                <div class="button">
                    <a href="edit_clerk.php" class="edit"><i class="fa fa-edit"></i> EDIT</a>
                </div><br>
                <?php
                    echo "<table>
                    <tr>
                        <th>Username: </th>
                        <td>$row[username]</td>
                    </tr>";
                    echo "<tr>
                        <th>Password: </th>
                        <td>$row[password]</td>
                    </tr>";
                    echo "<tr>
                        <th>Name: </th>
                        <td>$row[name]</td>
                    </tr>";
                    echo "<tr>
                        <th>IC Number: </th>
                        <td>$row[icNum]</td>
                    </tr>";
                    echo "<tr>
                        <th>Gender: </th>
                        <td>$row[gender]</td>
                    </tr>";
                    
                    echo "<tr>
                        <th>Role: </th>
                        <td>$row[role]</td>
                    </tr>";

                    echo "</table>";       
                ?>
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
			text-align: center;
            margin: 30px;
            font-size: 50px;
		}
        
        table, th{
			background-color: #84056B;
			font-size: 20px;
			border: 3px solid black;
			text-align: center;
			height:50px;
            width:300px;
            color: white;
            font-weight: bold;
            margin-left: 10px;
            border-radius: 30px;
		}

		table, td{
			font-size: 20px;
			border: 3px solid black;
			text-align: center;
			width:1400px;
			height:50px;
			background-color: purple;
            color: white;
            border-radius: 30px;
		}
        
        .edit{
            padding: 3px;
			background: purple;
			text-decoration: none;
			float: right;
            margin-right: 20px;
			margin-top: -20px;
			border-radius: 5px;
			font-size: 20px;
			font-weight: 300;
			color: #fff;
            border-radius: 15px;
        }
	</style>
</html>