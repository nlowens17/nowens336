<?php
    include 'dbConnection.php';
    $conn = getDatabaseConnection("final");
    
    $sql = "DELETE FROM `trainers` WHERE `ID` = '" . $_GET['ID'] ."'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    header("Location: admin.php");
?>