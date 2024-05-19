<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
      <title>Clerk Paragon</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
        <link href="css/index.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="img/paragon_logo.png" type="image/png">
	</head>
  
  <body>
    <div class="login">

      <h1>CLERK</h1>
      <form action="" method="post">

        <label for="username">
          <i class="fas fa-user"></i>
        </label>
        <input type="text" name="username" placeholder="Username" id="username" required>

        <label for="password">
          <i class="fas fa-lock"></i>
        </label>
        <input type="password" name="password" placeholder="Password" id="password" required>

        <div class="checkbox">
          <input type="checkbox" id="password" onclick="myFunction()">   Show password
        </div>

        <div>
          <a href="manager_login.php" class="button">Manager  <i class='fas fa-arrow-circle-right'></i></a>
        </div>
        
        <input type="submit" value="Login" name="login">
      
      </form>
    </div>

    <?php
      if(isset($_POST["login"])){
        
        $hostname = "localhost";
				$user = "root";
				$password = "";
				$dbname = "paragoncinemadb";
		
				$connect = mysqli_connect($hostname, $user, $password, $dbname) OR DIE ("Connection failed");
					
				$username = $_POST["username"];
				$password = $_POST["password"];

				$sqlcheck = "SELECT * FROM clerk WHERE username = '$username' AND password = '$password'";
					
				$result = mysqli_query($connect,$sqlcheck);	
					
				if ($result){
          if (mysqli_num_rows($result) > 0){
            $_SESSION["username"] = $username;
            ?><script>
            alert("You have successfuly logged in. Please press OK to proceed.");
            window.location = "home.php";
            </script><?php
          }
          else{
            ?><script>
            alert("Username or password invalid. Please try again");
            window.location = "index.php";
            </script><?php
          }
				}
        
        session_start();
        $_SESSION["username"] = $username;
			}
				
		?>

    <script>
      function myFunction(){
        var x = document.getElementById("password");
        if (x.type === "password") {
        x.type = "text";
        } else {
        x.type = "password";
        }
      }
		</script>

  </body>
  
</html>