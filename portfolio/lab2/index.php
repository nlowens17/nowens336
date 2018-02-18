<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title> Lab 2 777 Slot Machine </title>
    </head>
    <body>
        
        <?php
        
            function displaySymbol($randomValue) {
            //$randomValue = rand(0,3);
            echo $randomValue;
            
            switch ($randomValue){
                case 0: $symbol = "seven";
                break;
                
                case 1: $symbol = "orange";
                break;
                
                case 2: $symbol = "cherry";
                break;
                
                case 3: $symbol = "grapes";
                break;
            }
            
            echo "<img src='img/$symbol.png' alt='$symbol' title=\"$symbol\"/>";
            }
            
            function displayPoints ($randomValue1, $randomValue2, $randomValue3) {
                if ($randomValue1 == $randomValue2 && $randomValue2 == $randomValue3) {
                switch($randomValue1) {
                    
                        case 0: echo "Jackpot!";
                        $totalpoints = 1000;
                        break;
                    
                        case 1: $totalpoints = 500;
                        break;
                    
                        case 2: $totalpoints = 250;
                        break;
                    }
                    echo "<h2> You won $totalpoints points!</h2>";
                }
                else {
                    echo "Try Again";
                }
                echo "</div>";
            }
            for ($i = 1; $i <4 ; $i++) {
                ${"randomValue1" . $i } = rand(0,3 );
            displaySymbol(${"randomValue" . $i});
            }
            displayPoints($randomValue1, $randomValue2, $randomValue3) ;
            
            echo "<br /><hr> Value: $randomValue1 $randomValue2 $randomValue3 ";
            
            echo"<br /><hr>";
           
            ?>

    </body>
</html>