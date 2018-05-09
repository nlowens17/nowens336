<?php

    include 'header.php';
    //https://cdn.bulbagarden.net/upload/7/78/150Mewtwo.png
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8" />
        <title>The Kanto Region</title>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>   
        <style>
            div.inline { 
                text-align:center;
                float:left; 
            }
            
            #loc {
                margin-right:270px;
            }
            
            #poke {
                margin-left:230px;
            }
            body{
                background-color:#E8E397;
            }
        </style>
    </head>
    <body>
        <Header>
            <h1>Welcome to the Region of Kanto</h1>
        </Header>
        
        <div style="display: inline">
            <img src="images/loc.png"></img>
        </div>
        
        <div style="display: inline">
            <img src="images/trainer.png"></img>
        </div>
        
        
        <div style="display: inline">
            <img src="images/pika.png"></img>
        </div>
        
        </br>
        
        <a id="loc" href="loc.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Locations </a>
        
        <a id="train" href="train.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Trainers </a>
        
        <a id="poke" href="poke.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true"> Pokemon </a>
        
        
            <!--<nav class="inline">-->
            <!--<hr width = "50%"/>-->
            <!--<a href= "cities.php">Locations</a>-->
            <!--</nav>-->
            <!--<div class="inline">-->
            <!--    <img src="images/loc.png"></img>-->
            <!--</div>-->
            
            <!--<nav class="inline">-->
            <!--<a href = "trainers.php">Trainers</a>-->
            <!--</nav>-->
            
            <!--<div class="inline">-->
            <!--    <img src="images/trainer.png"></img>-->
            <!--</div>-->
            
            <!--<nav class="inline">-->
            <!--<a href = "pokemon.php">Pokemon</a>-->
            <!--</nav>-->
            
            <!--<div class="inline">-->
            <!--    <img src="images/pika.png"></img>-->
            <!--</div>-->
            
            <!--<br /> <br />-->
            
            <!--<main>-->
                
                </div>
            </main>
        </header>
    </body>
</html>