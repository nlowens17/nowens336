<?php

    include 'header.php';
    
    include 'dbConnection.php';
    
    
    function getTrainers() {
    $conn = getDatabaseConnection("final");
    $namedParameters = array();
    
    
    $sql = "SELECT * 
            FROM trainers
            WHERE 1"; 
            
    if (isset($_GET['reverse'])) {
        $sql .= " ORDER BY Name desc";
    }
    
    if (isset($_GET['alpha'])) {
        $sql .= " ORDER BY Name asc";
    }
    
    if (isset($_GET['type'])) {
        $sql .= " ORDER BY Type asc";
    }
    
    if (isset($_GET['desc'])) {
        $sql .= " ORDER BY Location asc";
    }
    
    if (isset($_GET['searchBtn'])) {
        $sql .= " AND Name LIKE :Name";
        $namedParameters[':Name'] = "%" . $_GET['search'] . "%";
    }
    
    $statement = $conn->prepare($sql);
    $statement->execute($namedParameters);
    $records = $statement->fetchAll(PDO::FETCH_ASSOC);
    
    foreach($records as $r) {
        echo "<summary>" . $r['Name'] . "</summary>";
        echo "<p> Type: " . $r['Type'] . "</p>";
        echo "<p> Location: ". $r['Location']."</p>"; 
        echo "<td><img src='" . $r['Image'] . "'width='150'></td>";
    }
}
    
?>

<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                background-color:#97D5E8;
            }
        </style>
    </head>
    <body>
        <form>
            <button type="submit" name="alpha" class="btn btn-primary"> Alphabetical Order </button>
            <button type="submit" name="reverse" class="btn btn-primary"> Reverse Order </button>
            <button type="submit" name="type" class="btn btn-primary"> By Type </button>
            <button type="submit" name="desc" class="btn btn-primary"> Location </button>
            <input type="text" name="search"> 
            <button type="submit" name="searchBtn" class="btn btn-primary"> Search </button>
        </form>
        <?=getTrainers()?>
    </body>
</html>