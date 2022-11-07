<?php
    include_once("connection.php");

    #Database creation command: "CREATE database dtbBranch";

    $stmt = $conn->prepare("DROP TABLE IF EXISTS TblChats;
    CREATE TABLE TblChats 
    (Text VARCHAR(250) NOT NULL,
    UserID INT(10) NOT NULL)");
    $stmt->execute();
    $stmt->closeCursor();

    $stmt = $conn->prepare("DROP TABLE IF EXISTS TblUsers;
    CREATE TABLE TblUsers 
    (UserID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    Username VARCHAR(50) NOT NULL,
    Email VARCHAR(250) NOT NULL,
    FileName VARCHAR(250) NOT NULL,
    Location VARCHAR(250) NOT NULL,
    Password VARCHAR(500) NOT NULL)");
    $stmt->execute();
    $stmt->closeCursor();

?>