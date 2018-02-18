<?php

$cards = array("ace", "one", 2);
//print_r($cards); //for debugging purposes

//echo $cards[1];

$cards[] = "jack"; //adds new element at the end of the array

array_push($cards, "queen");

//print_r($cards);

$cards[2] = "ten";

print_r($cards);
echo "<hr>";
$lastCard = array_pop($cards);
displayCard($lastCard);
print_r($cards);

unset($cards[1]);
echo "<hr>";
print_r($cards);

$cards = array_values($cards); //re-indexes array
echo "<hr>";
print_r($cards);

shuffle($cards);
echo "<hr>";
print_r($cards);

$randomIndex = rand(0,4);
displayCard($cards[$randomIndex]);

function displayCard($card){
    //global $cards;
    //echo "<img src = '../image/randomCard/img/cards/clubs/$cards[0].png'/>";
    
    echo "<img src = '../image/randomCard/img/cards/clubs/$card.png'/>";
}

?>


<!DOCTYPE html>
<html>
    <head>
        <title> </title>
    </head>
    <body>
        
    </body>
</html>