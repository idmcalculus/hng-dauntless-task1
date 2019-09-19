<?php

    $servername = "localhost";
    $username  =  "root";
    $password  =  "";
    $dbname = "hngusers";

    //create connetion
    $conn = new mysqli($servername, $username, $password, $dbname);

    //checke connetion
    if($conn->connect_error) {
        die("Connetion failed: ". $conn->connet_error);
    }

    //sql to reate database
    $sql = "CREATE TABLE users(
        id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        email VARCHAR(30) NOT NULL,
        password VARCHAR(30) NOT NULL
        )";
        
       
    if($conn->query($sql) === TRUE) {
      //  echo "Table created sucessfully";
    }else{
       // echo "Error " . $conn->error;
    }

    $conn->close();
?>