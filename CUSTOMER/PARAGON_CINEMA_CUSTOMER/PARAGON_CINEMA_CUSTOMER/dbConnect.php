<?php 
        $servername = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'paragoncinemadb';

        $conn= mysqli_connect($servername, $username, $password, $database)or 
        die("Could not connect to mysql".mysqli_error($conn));
?>