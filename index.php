<?php
    require('src/config/Database.php');
    require('src/models/User.php');

    $db = new Database('feladat');
    $conn = $db->sqlConnection();

    //      Checking connection
    if ($conn->connect_error){
        die("connection failed: ".$conn->connect_error);
    }

    $usr = new User('test','test','testmail.com','tst','f','test',$conn);

    $usr->insertUser($conn);
    
?>