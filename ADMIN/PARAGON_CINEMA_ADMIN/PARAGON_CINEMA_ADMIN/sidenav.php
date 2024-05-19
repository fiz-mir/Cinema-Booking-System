<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
		<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="shortcut icon" href="img/paragon_logo.png" type="image/png">
	</head>
	
	<body>
		<ul>
			<li><a href="home.php">Home</a></li>
			<li><a href="profile.php">Profile</a></li>
			<li><a href="movie.php">Movies</a></li>
			<li><a href="hall.php">Hall</a></li>
			<li><a href="session.php">Session</a></li>
		</ul>
		
		<a href="index.php" id="logout_btn" class="fa fa-sign-out"></a>
		
	</body>

	<style>
		ul{
			list-style-type: none;
			margin: 0;
			padding: 0;
			overflow: hidden;
			background-color: purple;
		}

		li{
			float: left;
		}

		li a{
			display: block;
			color: white;
			text-align: center;
			padding: 15px 30px;
			text-decoration: none;
			font-size: 15px;
		}

		li a:hover{
			background-color: #61016E;
			border-radius: 30px;
		}
				
		#logout_btn{
			padding: 5px;
			text-decoration: none;
			float: right;
			margin-top: -40px;
			margin-right: 10px;
			border-radius: 2px;
			font-size: 20px;
			color: #fff;
		}
	</style>
</html>