<?php
function getLetter(){
    $alpha = array ("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
    $length = rand(5,10);
    $letters;
    $numbers = rand(1,3);
    $letter = $length - $numbers;
    for($i=0; $i<$letter; $i++){
        $letters = $letters.$alpha[rand(0,25)];
    }
    for($i = 0; $i < $numbers; $i++) {
        $letters = $letters.rand(1,9);
    }
    
    echo $letters;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Password Generator </title>
        
    </head>
    <body>
        
        <table>
                <?php
                
                for($i=0;$i<26;$i++){
                    echo "<tr> </tr>";
                    echo "<td>" . getLetter() ."</td>"; 
                    echo "</br>";
                }
                
                ?>
                
        </table>
        
    </body>
</html>