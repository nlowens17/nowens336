<?php
include 'header.php';

session_start();

if(!isset( $_SESSION['adminName'])) {
  header("Location:index.php");
}

include "dbConnection.php";
$conn = getDatabaseConnection("final");

if (isset($_GET['add'])) {
    $newName = $_GET['newName'];
    $newType = $_GET['newType'];
    $newAbility = $_GET['newAbility'];
    $newDescription = $_GET['newDescription'];
    $newImage = $_GET['newImage'];
    
    $sql = "INSERT INTO `pokemon` ( `Name`, `Type`, `Description`, `Ability`, `Image`) 
             VALUES (:newName, :newType, :newDescription, :newAbility, :newImage)";
    
    $namedParameters = array();
    $namedParameters[':newName'] = $newName;
    $namedParameters[':newType'] = $newType;
    $namedParameters[':newAbility'] = $newAbility;
    $namedParameters[':newDescription'] = $newDescription;
    $namedParameters[':newImage'] = $newImage;
    $statement = $conn->prepare($sql);
    $statement->execute($namedParameters);
    
    header("Location: admin.php");
}
?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <h1> Add a Pokemon</h1>
        <form>
            Pokemon Name: <input type="text" name="newName"></br>
            Type: <select name="newType">
                    <option value= ""> Select One </option>
                    <option value = "fire"> fire </option>
                    <option value = "water"> water </option>
                    <option value = "electric"> electric </option>
                    <option value = "poison"> poison </option>
                    <option value = "bug"> bug </option>
                    <option value = "flying"> flying </option>
                    <option value = "rock"> rock </option>
                    <option value = "ground"> ground </option>
                    <option value = "grass"> grass </option>
                    <option value = "fighting"> fighting </option>
                    <option value = "ghost"> ghost </option>
                </select> </br>
            Ability: <input type="text" name ="newAbility"></br>
            Description: <input type="text" name="newDescription"></br>
            Image: <input type="text" name="newImage"></br>
            <input type="submit" name="add" value="Finish Adding">
            
        </form>
    </body>
</html>