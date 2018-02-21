<!DOCTYPE html>
<html>
    <head>
        <title> Homework 2: Pokedex </title>
        <?php
        function poke($i) {
            switch($i) {
                case 0: $poke = "Squirtlesm";
                break;
                
                case 1: $poke = "Raichusm";
                break;
                
                case 2: $poke = "Poliwrathsm";
                break;
                
                case 3: $poke = "Hitmonchansm";
                break;
                
                case 4: $poke = "Charmeleonsm";
                break;
            }
            
            echo "<img src= 'images/Small/$poke.png' alt='$poke' title= '".ucfirst($poke)."'>";
        }
        
        
        
        function getPokemon($value){
            $pokemon = array("Squirtle", "Raichu", "Poliwrath", "Hitmonchan", "Charmeleon");
            $poke = $pokemon[$value];
            $moves = array();
            switch($poke) {
                case "Squirtle": $moves = "Water gun";
                $type= "water";
                break;
                
                case "Raichu": $moves = "Thunder";
                $type= "electric";
                break;
                
                case "Poliwrath": $moves = "Hydro Pump";
                $type= "water";
                break;
                
                case "Hitmonchan": $moves = "Focus Punch";
                $type= "fighting";
                break;
                
                case "Charmeleon": $moves = "Flamethrower";
                $type= "fire";
                break;
            }
            $nature = array("Bashful", "Naive", "Jolly", "Brave", "Careful");
            shuffle($nature);
            echo "<h1> $poke </h1>";
            echo "<img src= 'images/Pokemon/$poke.png' alt='$poke' title= '".ucfirst($poke)."'>";
            echo "<br>";
            echo "Type: <img src= 'images/types/$type.JPG' alt= '$type' title= '".ucfirst($type)."'>";
            echo "<br>";
            echo "Known Attacks: $moves";
            echo "<br>";
            if (end($nature) == "Jolly") {
                echo "Rare nature: ";
            }
            else {
                echo "Nature: ";
            }
            echo end($nature);
            echo "<br>";
            echo "1 of ";
            echo count($pokemon);
            echo " known pokemon";
            echo "<br>";
        }
        
        ?>
        <style>
            @import url("css/style.css");
        </style>
    </head>
    <body>
        <?php
        
            $value = rand(0,4);
            getPokemon($value);
            for($i; $i<5; $i++) {
                poke($i);
            }
        
        ?>
        
        <footer>
            <figure id="otter">
            <img src= "../../image/csumb_logo.jpg" alt= "California State University, Monterey Bay's school logo"/>
            </figure>
            <em><q>Impossible is Nothing</q></em> -Muhammad Ali
        </footer>
    </body>
</html>