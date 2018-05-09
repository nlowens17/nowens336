<?php
    include 'header.php';
    
    session_start();
    
    if(!isset( $_SESSION['adminName'])) {
      header("Location:index.php");
    }

    include 'dbConnection.php';
    $conn = getDataBaseConnection("final");
    
    function displayLocations() {
        global $conn;
        $sql= "SELECT * FROM cities";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($records as $r) {
            echo "<summary>" . $r['Name'] . "</summary>";
            echo "<p> Gym Leader: " . $r['Leader'] . "</p>";
            echo "<p> Description: ". $r['Description']."</p>"; 
            echo "<img src='" . $r['Image'] . "'width='300'>";
            
            echo "</br>";
            
            //Remove
            echo "<form action='deleteLocation.php' onsubmit='return confirmDelete()'>";
            echo "<input type='hidden' name='ID' value=" .$r['ID'] . "/>";
            echo "<input type='submit' value='remove' class='btn btn-danger btn-lg active'>";
            echo "</form>";
        }
    }
    
    function displayTrainers() {
        global $conn;
        $sql= "SELECT * FROM trainers";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $records = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($records as $r) {
            echo "<summary>" . $r['Name'] . "</summary>";
            echo "<p> Type: " . $r['Type'] . "</p>";
            echo "<p> Description: ". $r['Location']."</p>"; 
            echo "<td><img src='" . $r['Image'] . "'width='150'></td>";
            
            echo "</br>";
            
            //Remove
            echo "<form action='deleteTrainer.php' onsubmit='return confirmDelete()'>";
            echo "<input type='hidden' name='ID' value=" .$r['ID'] . "/>";
            echo "<input type='submit' value='remove' class='btn btn-danger btn-lg active'>";
            echo "</form>";
        }
    }
    
    function displayPokemon() {
        global $conn;
        $sql= "SELECT * FROM pokemon";
        
        $statement = $conn->prepare($sql);
        $statement->execute($namedParameters);
        $records = $statement->fetchAll(PDO::FETCH_ASSOC);
        
        foreach($records as $r) {
            echo "<summary>" . $r['Name'] . "</summary>";
            echo "<p> Type: " . $r['Type'] . "</p>";
            echo "<p> Description: ". $r['Description']."</p>"; 
            echo "<td><img src='" . $r['Image'] . "'width='300'></td>";
            
            echo "</br>";
            
            //Edit
            echo "<a id='add' href='editPoke.php?ID=" . $r['ID'] . "' class='btn btn-primary' role='button' aria-pressed='true'> Edit </a>";
            
            //Remove
            echo "<form action='delete.php' onsubmit='return confirmDelete()'>";
            echo "<input type='hidden' name='ID' value=" .$r['ID'] . "/>";
            echo "<input type='submit' value='Remove' class='btn btn-danger'>";
            echo "</form>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style>
            form {
                display:inline;
            }
            
            #add {
                margin-right:10px;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script>
            function confirmDelete() {
                return confirm("Are you sure you want to delete it?");
            }
        </script>
        
        <script>
            $(document).ready(function(){
                $("#totalLocations").click(function(){
                    $.ajax({

                        type: "GET",
                        url: "api/getTotalLocations.php",
                        data: {},
                        success: function(data) {
                        //alert(data);
                            alert("Total Locations: " + JSON.parse(data).total);
                        },
                        complete: function(data,status) { //optional, used for debugging purposes
                        //alert(status);
                        }
                    
                    });//ajax
                }); //Locations
                
                $("#totalTrainers").click(function(){
                    $.ajax({

                        type: "GET",
                        url: "api/getTotalTrainers.php",
                        data: {},
                        success: function(data) {
                        //alert(data);
                            alert("Total Trainers: " + JSON.parse(data).total);
                        },
                        complete: function(data,status) { //optional, used for debugging purposes
                        //alert(status);
                        }
                    
                    });//ajax
                }); //Trainers
                
                $("#totalPokemon").click(function(){
                    $.ajax({

                        type: "GET",
                        url: "api/getTotalPokemon.php",
                        data: {},
                        success: function(data) {
                        //alert(data);
                            alert("Total Pokemon: " + JSON.parse(data).total);
                        },
                        complete: function(data,status) { //optional, used for debugging purposes
                        //alert(status);
                        }
                    
                    });//ajax
                }); //Locations
                
            });//Document Ready
        </script>
    </head>
    <body>
        </br>
        
        <a id="add" href="add.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Add Pokemon </a>
        <a id="logout" href="logout.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Logout </a>
        
        </br>
        
        <button id="totalLocations" class="btn btn-primary"> Total Locations </button>
        <button id="totalTrainers" class="btn btn-primary"> Total Trainers </button>
        <button id="totalPokemon" class="btn btn-primary"> Total Pokemon </button>
        
        
        
        </br>
        <?=displayLocations()?>;
        <?=displayTrainers()?>;
        <?=displayPokemon()?>;
    </body>
</html>