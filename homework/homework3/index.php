<?php

    if (isset($_GET['Name'])) {
        echo "<h1> Entered Name: " . $_GET['Name']."<h1/>";
        echo "<br/>";
    }
    
    if (isset($_GET['pokemon'])) {
        echo "<h2> Preferred Pokemon <h2/>";
        echo '<img src="pictures/'. $_GET['pokemon'] .'.png">';
        echo "<br/>";
    }
    
    if (isset($_GET['travel'])) {
        echo "<h2> Preferred Travel Destination <h2/>";
        echo '<img src="pictures/'. $_GET['travel'].'.jpg">';
        echo "<br/>";
    }
    
    if (isset($_GET['drink'])) {
        echo "<h2> Preferred Drink <h2/>";
        echo '<img src="pictures/'. $_GET['drink'] .'.jpg">'; 
        echo "<br/>";
    }
    
    if (isset($_GET['weather'])) {
        echo "<h2> Preferred Weather <h2/>";
        echo '<img src="pictures/'. $_GET['weather'] .'.jpg">'; 
        echo "<br/>";
    }
    
    if (isset($_GET['time'])) {
        echo "<h2> Preferred Study Time <h2/>";
        echo '<img src="pictures/'. $_GET['time'] .'.jpg">'; 
        echo "<br/>";
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Homework 3: </title>
    </head>
    <style>
        @import url("css/styles.css");
    </style>
    <body>
       
        <form method= "GET">
            <h3> Please insert your first name </h3>
            <input type= "text" size = "9" name= "Name" placeholder= "Insert Name" value= "<?=$_GET['Name']?>"/>
            
            <br/>
            
            <h3> Which of these if your favorite Pokemon? </h3>
            <select name= "pokemon">
                <option value= ""> Select One </option>
                <option value = "Raichu"> Raichu </option>
                <option value = "Hitmonchan"> Hitmonchan </option>
                <option value = "Squirtle"> Squirtle </option>
                <option value = "Charmeleon"> Charmeleon </option>
            </select>
            
            
            <h3> Preferred travel destination? </h3>
            <select name= "travel">
                <option value= ""> Select One </option>
                <option value= "beach"> Beach </option>
                <option value= "city"> City </option>
                <option value= "country"> Country-side </option>
            </select>
            
            
            <h3> What is your preferred drink? </h3>
            <input type= "radio" name= "drink" value= "water" id= "water" <?= ($_GET['drink'] == "water")?"checked":""?>>
            <label for= "Water"> Water </label> <br/>
            
            <input type= "radio" name= "drink" value= "coke" id= "coke" <?= ($_GET['drink'] == "coke")?"checked":""?>>
            <label for= "coke"> Coke </label> <br/>
            
            <input type= "radio" name= "drink" value= "lemonade" id= "lemonade" <?= ($_GET['drink'] == "lemonade")?"checked":""?>>
            <label for= "Lemonade"> Lemonade </label> <br/>
            
            
            <h3> What is your preferred weather? </h3>
            <input type= "radio" name= "weather" value= "sunny" id= "sunny" <?= ($_GET['weather'] == "sunny")?"checked":""?>>
            <label for= "sunny"> Sunny </label> <br/>
            
            <input type= "radio" name= "weather" value= "cloudy" id= "cloudy" <?= ($_GET['weather'] == "cloudy")?"checked":""?>>
            <label for= "cloudy"> Cloudy </label> <br/>
            
            <input type= "radio" name= "weather" value= "snowy" id= "snowy" <?= ($_GET['weather'] == "snowy")?"checked":""?>>
            <label for= "snowy"> Snowy </label> <br/>
            
            
            <h3> Preferred study time? </h3>
            <input type= "radio" name= "time" value= "morning" id= "morning" <?= ($_GET['time'] == "morning")?"checked":""?>>
            <label for= "morning"> Morning </label> <br/>
            
            <input type= "radio" name= "time" value= "afternoon" id= "afternoon" <?= ($_GET['time'] == "afternoon")?"checked":""?>>
            <label for= "afternoon"> Afternoon </label> <br/>
            
            <input type= "radio" name= "time" value= "night" id= "night" <?= ($_GET['time'] == "night")?"checked":""?>>
            <label for= "night"> Night </label> <br/>
            
            <br/>
            <br/>
            
            <input type= "submit" value= "Submit"/>

        </form>
    </body>
</html>