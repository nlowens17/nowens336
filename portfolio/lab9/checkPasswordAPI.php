<?php

include 'dbConnection.php';

$conn = getDatabaseConnection("c9");

$username = $_GET['password'];

$sql = "SELECT * FROM lab9_user WHERE password = :password";


$stmt = $conn->prepare($sql);
$stmt->execute( array(":password"=>$password));
$record = $stmt->fetch(PDO::FETCH_ASSOC);

//print_r($record);
echo json_encode($record);


function addDB () {
    $sql = "INSERT INTO lab9_user (`firstName` , `lastName` , `zipCode`, `username`, `password`)
                VALUES (:firstName, :lastName, :zipCode, :username, :password)";
                
    $signupInfo = array();
    $signupInfo[':fistName'] = $firstName;
    $signupInfo[':lastName'] = $lastName;
    $signupInfo[':zipCode'] = $zipCode;
    $signupInfo[':username'] = $username;
    $signupInfo[':password'] = $password;
    $stmt = $conn->prepare($sql);
    $stmt->execute($signupInfo);
    
}


?>