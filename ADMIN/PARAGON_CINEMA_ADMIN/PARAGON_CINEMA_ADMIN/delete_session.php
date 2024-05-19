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
    <?php
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $dbname = "paragoncinemadb";

        $connect = mysqli_connect($hostname, $username, $password, $dbname) OR DIE ("Connection failed");

        $session_id = $_GET["session_id"];

        $sql = "DELETE FROM sessions WHERE session_id = '$session_id'";
        $sendsql = mysqli_query($connect,$sql);

        if($sendsql){
            ?><script>
                alert("Data has been deleted");
                window.location = "session.php";
            </script><?php
            exit();
        }else{
            echo "Error deleting session data: " . mysqli_error($connect);
        }
        ?>

    </body>

</html>