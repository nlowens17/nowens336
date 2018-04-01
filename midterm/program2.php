<?php
    include '../dbConnection.php';
    
    $conn = getDatabaseConnection("midterm");
    
    $sql = "SELECT * 
            FROM celebrity
            WHERE country_of_birth != 'USA'";
            
    $stmt = $dbConn->query($sql);	
    $results = $stmt->fetchAll();
    foreach ($results as $record) {
    echo $record['firstName']  . $record['firstName'] . $record['country_of_birth'] . "<br />";
}
?>