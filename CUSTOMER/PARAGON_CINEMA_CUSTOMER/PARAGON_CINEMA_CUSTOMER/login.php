<?php
session_start();
include 'dbConnect.php';

$msg = "";

if (isset($_POST['login'])) {
    $Username = mysqli_real_escape_string($conn, $_POST['Username']);
    $Password = mysqli_real_escape_string($conn, $_POST['Password']);

    $sql = mysqli_query($conn, "SELECT * FROM customer WHERE (username='$Username' OR email='$Username') && password='$Password'");
    $num = mysqli_num_rows($sql);

    if ($num > 0) {
        $row = mysqli_fetch_assoc($sql);

        $_SESSION['USER_ID'] = $row['custid'];
        $_SESSION['USER_NAME'] = $row['username'];

        ?>
        <script>
            alert("You have successfully logged in. Please press OK to proceed.");
            window.location = "index.php";
        </script>
        <?php
    } else {
        $msg = "Please enter valid details!";
    }
}
?>



<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Paragon | Login</title>
     <!-- ::::::::::::::Icon Tab::::::::::::::-->
     <link rel="shortcut icon" href="assets/images/logo/paragon_logo.png" type="image/png">
    <link rel="stylesheet" href="assets/_loginStyles.css" />
  </head>
  <body>
    <div class="content">
      <div class="flex-div">
        <div class="name-content">
          <h1 class="logo">Paragon</h1>
          <h4 class="logo-2nd">Cinema</h4>
          <p>
            Where dreams ignite, and stories unfold,
            Book your seat, let the magic enfold.</p>
        </div>
          <form action="" method="post">
            <input type="text" id="username" name="Username" placeholder="Email or Username" required>
            <input type="password" id="password" name="Password" placeholder="Password"
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
            <button style="font-family:'Poppins';" name="login" class="login" value="login">Log In</button>
              <div class="error">  
                <?php echo $msg ?>  
              </div>  
            <a id="forgotpassword" name="forgotpassword" href="forgotpassword.php">Forgot Password ?</a>
            <hr>
            <a href="register.php" class="create-account">Create New Account</a>
          </form>
          
      </div>
      
    </div>
  </body>
</html>
