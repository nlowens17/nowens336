<?php
    include 'header.php';
    
    include 'dbConnection.php';
    
    $conn = getDatabaseConnection("final");
    
    function getPokeInfo() {
        
        global $conn;
        
        $sql = "SELECT *
                FROM pokemon
                WHERE ID = " . $_GET['ID'] . "";
                
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $record = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $record;
    }
    
    if(isset($_GET['ID'])) {
        
        $poke = getPokeInfo();
    }
    
    if (isset($_GET['edit'])) {
        
        $sql = "UPDATE `pokemon`
                SET Name = :Name,
                    Type = :Type,
                    Ability = :Ability,
                    Description = :Description,
                    Image = :Image
                WHERE ID = :ID";
                
        $np = array();
        $np[":Name"] = $_GET['Name'];
        $np[":Type"] = $_GET['Type'];
        $np[":Ability"] = $_GET['Ability'];
        $np[":Description"] = $_GET['Description'];
        $np[":Image"] = $_GET['Image'];
        $np[":ID"] = $_GET['ID'];
                
        $statement = $conn->prepare($sql);
        $statement->execute($np);      
        
        header("Location:admin.php");
        
    }
?>

<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
    <h2> Edit a Pokemon </h2>
    <form>
        
        Pokemon Name: <input type="text" value="<?=$poke['Name']?>" name="Name"></br>
        Type: <select name="Type">
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
        Ability: <input type="text" value="<?=$poke['Ability']?>" name ="Ability"></br>
        Description: <input type="text" value="<?=$poke['Description']?>" name="Description"></br>
        Image: <input type="text" value="<?=$poke['Image']?>" name="Image"></br>
        <input type="submit" name="edit" value="Finish Editing">
        
    </form>
    </body>
</html>