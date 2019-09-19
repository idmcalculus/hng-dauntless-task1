<?php
    $servername = "localhost";
    $username  =  "root";
    $password  =  "";


    //create connetion
    $conn = new mysqli($servername, $username, $password);

    //checke connetion
    if($conn->connect_error) {
        die("Connetion failed: ". $conn->connet_error);
    }

    //create database
    $sql = "CREATE DATABASE hngusers";
    if($conn->query($sql) === TRUE) {
        //echo "Database created sucessfully";
    }else{
        //echo "Error " . $conn->error;
    }


    

    $conn->close();
?>
<?php include('createusers.php')?>