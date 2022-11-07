<?php
    include_once("connection.php");
    print_r($_POST);
    $hashed_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $stmt = $conn->prepare("INSERT INTO TblUsers (UserID,Username,Password)VALUES (null,:Username,:Password)");
    $stmt->bindParam(':Username', $_POST["username"]);
    $stmt->bindParam(':Password', $hashed_password);
    $stmt->execute();
    $conn=null;
?>