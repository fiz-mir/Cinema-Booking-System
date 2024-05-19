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
	    <body>
            <div class="container">
                <br><h1> Update Clerk Data </h1>

                <form action="clerk_process.php" method="POST">
                    <div class="form-group">
                        <label for="id">ID:</label>
                        <input type="number" name="id" value="<?php echo $row["id"] ?>"readonly/><br/>
                    </div>

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" value="<?php echo $row["name"] ?>"readonly/><br/>
                    </div>

                    <div class="form-group">
                        <label for="icNum">IC Number:</label>
                        <input type="text" name="icNum" value="<?php echo $row["icNum"] ?>"readonly/><br/>
                    </div>

                    <div class="form-group">
                        <label for="gender">Gender:</label>
                        <input type="text" name="gender" value="<?php echo $row["gender"] ?>"readonly/><br/>
                    </div>

                    <div class="form-group">
                        <label for="role">Role:</label>
                        <input type="text" name="role" value="<?php echo $row["role"] ?>"readonly/><br/>
                    </div>

                    <div class="form-group">
                        <label for="username">Username:</label>
                        <input type="text" name="username" value="<?php echo $row["username"] ?>"required/><br/>
                    </div>
                    
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="text" name="password" value="<?php echo $row["password"] ?>"required/><br/>
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

        .form-group input[type="text"],
        .form-group input[type="number"] {
            width: 250px;
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