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
        $title = $_POST["title"];
        $genre = $_POST["genre"];
        $desc = $_POST["desc"];
        $duration = $_POST["duration"];
        $releaseDate = $_POST["releaseDate"];
        $trailer = $_POST["trailer"];

        // Handle file upload
        $poster = $_FILES["poster"];
        $posterName = $poster["name"];
        $posterTmpName = $poster["tmp_name"];
        $posterError = $poster["error"];

        // Check if a file was selected
        if ($posterError === UPLOAD_ERR_OK) {
            $posterDestination = "assets/images/movie_poster/" . $posterName;
            move_uploaded_file($posterTmpName, $posterDestination);
        } else {
            echo "Error uploading poster: " . $posterError;
        }

        // Insert the movie data into the database
        $insertSql = "INSERT INTO MOVIE (title, poster, genre, description, duration, releaseDate, trailer) VALUES ('$title', '$posterName', '$genre', '$desc', '$duration', '$releaseDate', '$trailer')";

        $result = mysqli_query($connect, $insertSql);

        if ($result) {
            ?><script>
                alert("Data has been added");
                window.location = "movie.php";
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
                <h1> Add New Movie </h1>

                <form action="" method="POST" enctype="multipart/form-data">
                    <input type="text" name="title" placeholder="Movie Title" required/><br/>
                    <input type="file" name="poster" required/><br/>
                    <input type="text" name="genre" placeholder="Movie Genre" required/><br/>
                    <textarea name="desc" placeholder="Movie Desc" required></textarea><br/>
                    <input type="text" name="duration" placeholder="Movie Duration" required/><br/>
                    <input type="date" name="releaseDate" placeholder="Release Date" required/><br/>
                    <input type="text" name="trailer" placeholder="Trailer Link" required/><br/>
                    
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

		input, textarea{
			width: 20%;
			border: 1px;
			border-radius: 5px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px grey;
		}
	</style>
</html>
