<?php

    include 'header.php';
    
    include 'dbConnection.php';
    
    
    function getLocations() {
    $conn = getDatabaseConnection("final");
    $namedParameters = array();
    
    
    $sql = "SELECT * 
            FROM cities
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
        $sql .= " ORDER BY Description asc";
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
        echo "<p> Gym Leader: " . $r['Leader'] . "</p>";
        echo "<p> Description: ". $r['Description']."</p>"; 
        echo "<img src='" . $r['Image'] . "'width='300'>";
        //echo "<a class='nav-link' href='train.php'>Trainers</a>";
    }
}
    
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style>
            div.inline { 
                text-align:center;
                float:left; 
            }
            body{
                background-color:#E897AA;
            }
        </style>
    </head>
    <body>
        <div style="display: inline">
            <form>
                <button type="submit" name="alpha" class="btn btn-primary"> Alphabetical Order </button>
                <button type="submit" name="reverse" class="btn btn-primary"> Reverse Order </button>
                <button type="submit" name="desc" class="btn btn-primary"> Description </button>
                <input type="text" name="search"> 
                <button type="submit" name="searchBtn" class="btn btn-primary"> Search </button>
            </form>
            <?=getLocations()?>
        </div>
    </body>
</html>