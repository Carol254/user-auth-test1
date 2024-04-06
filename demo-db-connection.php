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

    //creating a table

    // $sql = "CREATE TABLE myGuests(
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     firstname VARCHAR(30) NOT NULL,
    //     lastname VARCHAR(30) NOT NULL,
    //     email VARCHAR(50),
    //     reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    // )";

    //inserting data into a table
    $sql = "INSERT INTO myGuests (firstname, lastname, email)
    VALUES('John', 'Doe', 'john@example.com')";



    If($conn->query($sql) === TRUE){
        $last_id = $conn->insert_id;
        echo "New record created successfully.Last inserted ID is:" .$last_id;
    }else{
        echo "Error: ".$sql ."<br>".$conn->error;
    }

    $conn->close();
?>