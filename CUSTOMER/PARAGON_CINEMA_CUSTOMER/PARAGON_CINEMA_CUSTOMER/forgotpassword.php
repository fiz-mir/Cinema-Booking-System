<?php
include 'dbConnect.php';

if (isset($_POST['submit'])) {
    $Username = $_POST['Username'];
    $OldPassword = $_POST['OldPassword'];
    $NewPassword = $_POST['NewPassword'];

    $chkpass_sql = "SELECT * FROM customer WHERE username = '$Username'";
    $chkpass_result = mysqli_query($conn, $chkpass_sql);

    if ($chkpass_result) {
        if (mysqli_num_rows($chkpass_result) == 0) {
            ?>
            <script>		
                alert("Username not found in record");
                window.location = "forgotpassword.php";
            </script>
            <?php
        } else {
            $updatepass_result = mysqli_query($conn, "UPDATE customer SET password = '$NewPassword' WHERE username = '$Username'");
            ?>
            <script>		
                alert("Password successfully updated.");
                window.location = "login.php";
            </script>
            <?php
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/_forgotPasswordStyles.css" />
    <script src="https://use.fontawesome.com/6a4ab084c1.js"></script>
  
    <!-- ::::::::::::::Icon Tab::::::::::::::-->
    <link rel="shortcut icon" href="assets/images/logo/paragon_logo.png" type="image/png">
    
    <title>Paragon | Reset Password</title>
</head>
<body>
<div class="testbox">
        <h1>Reset Password</h1>

        <form action="" method="post">
            <hr>
            <label id="icon" for="username"><i class="icon-user"></i></label>
            <input type="text" name="Username" id="username" placeholder="Username" required/>
            
            <label id="icon" for="password"><i class="icon-shield"></i></label>
            <input type="password" name="OldPassword" id="password" placeholder="Old Password" 
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
            required/>

            <label id="icon" for="password"><i class="icon-shield"></i></label>
            <input type="password" name="NewPassword" id="password" placeholder="New Password" 
            pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
            title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
            required/>
            
            <button class="button" name="submit" value="submit">Submit</button>
        </form>
    </div>
</body>
</html>