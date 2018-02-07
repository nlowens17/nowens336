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
            
            /*if ($randomValue == 0) {
                $symbol = "seven";
            }
            
            else if ($randomValue == 1) {
                $symbol = "orange";
            }
            
            else {
                $symbol = "cherry";
            }*/
            
            switch ($randomValue){
                case 0: $symbol = "seven";
                break;
                
                case 1: $symbol = "orange";
                break;
                
                case 2: $symbol = "cherry";
                break;
            }
            
            echo "<img src='img/$symbol.png' alt='$symbol' title=\"Symbol\"/>";
            }
            
            $randomValue1 = rand(0,2);
            displaySymbol($randomValue1);
            $randomValue2 = rand(0,2);
            displaySymbol($randomValue2);
            $randomValue3 = rand(0,2);
            displaySymbol($randomValue3);
            
            echo "<br /><hr> Value: $randomValue1 $randomValue2 $randomValue3 ";
            
            echo"<br /><hr>";
           
            
            if ($randomValue1 == 0 && $randomValue2 == 0 && $randomValue3 == 0) {
                echo "You scored 1000 points";
            }
            
            if ($randomValue1 == 1 && $randomValue2 == 1 && $randomValue3 == 1) {
                echo "You scored 500 points";
            }
            
            if ($randomValue1 == 2 && $randomValue2 == 2 && $randomValue3 == 2) {
                echo "You scored 250 points";
            }
            
            // displaySymbol();
            // displaySymbol();
            // displaySymbol();
            
        
            /*
            $randomValue = rand(0,3);
            echo  $randomValue;
            
            if ($randomValue == 0) {
                $symbol = "seven";
            }
            
            else if ($randomValue == 1) {
                $symbol = "orange";
            }
            
            else {
                $symbol = "cherry";
            }
            
            echo "<img src='img/$symbol.png' alt='$symbol' title=\"Symbol\"/>";
            */
            
/*
            $symbol = "seven";
            echo "<img src='img/$symbol.png' alt='Seven' title=\"Seven\"/>";
            
            $symbol = "lemon";
            echo "<img src='img/$symbol.png' alt='Lemon' title=\"Lemon\"/>";
            
            $symbol = "cherry";
            echo "<img src='img/$symbol.png' alt='Cherry' title=\"Cherry\"/>";
            */
        
        ?>


<!--
        <img src="../../image/csumb_logo.jpg" />
        <img src="img/grapes.png" alt="Grapes" title="Grapes"/>
        <img src="img/lemon.png" alt="Lemon" title="Lemon"/>
        <img src="img/cherry.png" alt="Cherry" title="Cherry"/>
-->        

    </body>
</html>