<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Lab 2 777 Slot Machine </title>
        <style>
            @import url("css/styles.css");
        </style>
    </head>
    <body>
        <div id= "main">
        <?php
        include 'inc/functions.php';
        //$randomValue = rand(0,2);
        
        $randomValue1 = rand(0,3);
        $randomValue2 = rand(0,3);
        $randomValue3 = rand(0,3);
        
        /*function displaySymbol($randomValue) {
            switch ($randomValue) {
                case 0: $symbol = "seven";
                break;
                
                case 1: $symbol = "orange";
                break;
                
                case 2: $symbol = "cherry";
                break;
                
                case 3: $symbol = "grapes";
                break;
            }
            echo "<img src= 'img/$symbol.png' alt='$symbol' title= '".ucfirst($symbol)."'>";
        }
        
        function displayPoints($randomValue1, $randomValue2, $randomValue3) {
            echo "<div id='output'>";
            if($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3) {
                switch ($randomValue1) {
                    case 0: $totalPoints = 1000;
                    echo "<h1>Jackpot!</h1>";
                    break;
                    case 1: $totalPoints = 500;
                    break;
                    case 2: $totalPoints = 250;
                    break;
                }
                echo "<h2>You won $totalPoints points!</h2>";
            }
            else {
                echo "<h3> Try Again!</h3>";
            }
            echo "</div>";
        }*/
        play();
        ?>
        
        <form>
            <input type= "submit" value= "Spin!"/>
        </form>
        </div>
    </body>
</html>