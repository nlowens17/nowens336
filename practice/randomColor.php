<!DOCTYPE html>
<html>
    <head>
        <title> Random Color </title>
    </head>
    
    <style>
        
        
        body {
            <?php
            
            $red= rand(0,255);
            $green= rand(0,255);
            $blue= rand(0,255);
            $alpha= rand(0,10) / 10;
            echo "background-color: rgba($red, $green, $blue, $alpha);"
            
            ?>
            /*background-color: rgba(10,20,250,10);*/
        }
        
    </style>
    
    <body>
        
        <h1> Welcome!</h1>
        
        <h2> Random Background Color</h2>
        
    </body>
</html>