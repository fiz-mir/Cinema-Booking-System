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
?>

<!DOCTYPE html>
<html>
	<head>
		<title>CLERK | PARAGON</title>
        <link rel="shortcut icon" href="img/paragon_logo.png" type="image/png">
	</head>
	<body>
        <div class="container">
            <br><h1> Update Movie Details </h1><br>

            <form action="movie_process.php" method="POST">
                <?php
                    $movieId = $_GET["movieid"];

                    $movieQuery = "SELECT * FROM MOVIE WHERE movieid = $movieId";
                    $movieResult = mysqli_query($connect, $movieQuery);
                    $movieData = mysqli_fetch_assoc($movieResult);
                ?>
                <div class="form-group">
                    <label for="movieid">Movie Id:</label>
                    <input type="text" name="movieid" value="<?php echo $movieData["movieid"] ?>"readonly/>
                </div>

                <div class="form-group">
                    <label for="poster">Poster:</label>
                    <input type="text" name="poster" value="<?php echo $movieData["poster"] ?>"/>
                </div>

                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" value="<?php echo $movieData["title"] ?>"/>
                </div>

                <div class="form-group">
                    <label for="genre">Genre:</label>
                    <input type="text" name="genre" value="<?php echo $movieData["genre"] ?>"/>
                </div>

                <div class="form-group">
                    <label for="desc">Description:</label>
                    <input type="text" name="desc" value="<?php echo $movieData["description"] ?>"/>
                </div>

                <div class="form-group">
                    <label for="duration">Duration:</label>
                    <input type="text" name="duration" value="<?php echo $movieData["duration"] ?>"/>
                </div>

                <div class="form-group">
                    <label for="releaseDate">Release Date:</label>
                    <input type="date" name="releaseDate" value="<?php echo $movieData["releaseDate"] ?>"/>
                </div>

                <div class="form-group">
                    <label for="trailer">Trailer Link:</label>
                    <input type="text" name="trailer" value="<?php echo $movieData["trailer"] ?>"/>
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
        }

        .form-group label {
            width: 150px;
            text-align: right;
            margin-right: 10px;
        }

        .form-group input[type="text"],
        .form-group input[type="date"] {
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
