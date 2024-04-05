<?php
    $servername = 'localhost';
    $username = '';
    $password = '';
    $dbname = 'myDB';

    //create connection
    $conn = new mysqli($servername,$username,$password,$dbname);
    //check connection
    if($conn->connect_error){
        die("Connection failed: " .$conn->connect_error);
    }

    echo "Connected successfully";

    //create a database
    // $sql = "CREATE DATABASE myDB";
    // If($conn->query($sql)=== TRUE){
    //     echo "Database create successfully";
    // }else{
    //     echo "Error creating database: " .$conn->error;
    // }

    $sql = "CREATE TABLE myGuests(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    If($conn->query($sql) === TRUE){
        echo "Table create successfully";
    }else{
        echo "Error creating table: " .$conn->error;
    }

    $conn->close();
?>