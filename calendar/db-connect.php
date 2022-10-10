<?php
    $host     = 'localhost:3306';
    $username = 'root';
    $password = '';
    $dbname   ='cool_finland';

    $conn = new mysqli($host, $username, $password, $dbname);
    
    if(!$conn){
        die("Cannot connect to the database.". $conn->error);
    }
?>    