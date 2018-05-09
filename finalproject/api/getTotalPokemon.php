<?php
    include '../dbConnection.php';
    $conn = getDatabaseConnection('final');
    
    $ID = $_GET['id'];
    
    $sql = "SELECT COUNT(Name) as total
            FROM pokemon";
            
    $stmt = $conn->prepare($sql);
    $stmt->execute(array(":ID" => $ID));
    $record = $stmt->fetch(PDO::FETCH_ASSOC);
    
    echo json_encode($record);
?>