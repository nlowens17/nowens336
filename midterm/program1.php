<?php

$USAPlaces = array("chicago", "hollywood", "las_vegas", "ny", "washington_dc", "yosemite");
$MexicoPlaces = array("acapulco", "cabos", "cancun", "chichenitza", "huatulco", "mexico_city");
$FrancePlaces = array("bordeaux", "le_havre", "lyon", "montpellier", "paris", "strasbourg");

function displayCalendar() {
	if (isset($_GET['submit'])) {
		$month = $_GET['month'];
		$place = $_GET['place'];
		$country = $_GET['country'];
		$alpha = $_GET['alpha'];

        if ($month == "") {
			echo "<br /><br /><strong>Error: Must Select Month</strong>";
			return;
        }
        
        if ($place == "") {
            echo "<br /><br /><strong>Error: Must Select Nunmber of Places</strong>";
			return;
        }
		
		echo $month . " Itinerary";
		"</br>";
		echo "Visiting " . $place . " places in " . $country;
		"</br>";
		
		if ($month == "november") {
		    $days = 30;
		}
		
		else if ($month == "december" || $month == "january") {
		    $days = 31;
		}
		
		else {
		    $days = 28;
		}
		
		if ($country == "USA") {
		    $city = $USAPlaces;
		}
		
		else if ($country == "France") {
		    $city = $FrancePlaces;
		}
		
		else {
		    $city = $MexicoPlaces;
		}
		
		if ($place == "three") {
		    $amount = 3;
		}
		
		else if ($place == "four") {
		    $amount = 4;
		}
		
		else {
		    $amount = 5;
		}
		

 		echo "<table border='1' style='margin:0 auto' cellpadding=60>";
 	 	$index = 1;
 	 	echo "<tr>";
 	 	
 	 	for ($day = 1; $day <= $days; $day++) {
 	 	    echo "<td>" .  $day;
 	 	    $randomDay = rand(1,$days);
 	 	    $pics = 0;
 	 	    if ($day == $randomDay && $pics != $amount) {
 	 	        if ($alpha == "true") {
                    echo '<img src="img/'. $country . '/' . $city[$city] . '.png">';
 	 	        }
 	 	        else {
 	 	            echo '<img src="img/'. $country . '/' . array_pop($city) . '.png">';
 	 	        }
 	 	        $pics++;
 	 	    }
 	 	    if ($day == 7 || $day == 14 || $day == 21 || $day == 28) {
 	 	        echo "</tr>";
 	 	    }
 	 	    echo "</td>";
 	 	}
 	 	echo "</table>";
 	 	
	}//endIf (submit)	
}//endFunction

?>

<!DOCTYPE html>
<html>
    <head>
        <title> Program 1: Winter Vacation </title>
        <strong><h1> Winter Vacation Planner! </h1></strong>
        <style>
            div {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div>
            
            <form methor="get">
            Select Month: 
            <select name= "month">
                <option value= ""> Select One </option>
                <option value = "november"> November </option>
                <option value = "december"> December </option>
                <option value = "january"> January </option>
                <option value = "february"> February </option>
            </select>
            
            </br> </br>
            
            Select Number of Places: 
            <input type= "radio" name= "place" value= "three" id= "three" <?= ($_GET['place'] == "three")?"checked":""?>>
            <label for= "Three"> Three </label>
            
            <input type= "radio" name= "place" value= "four" id= "four" <?= ($_GET['place'] == "four")?"checked":""?>>
            <label for= "Four"> Four </label>
            
            <input type= "radio" name= "place" value= "five" id= "five" <?= ($_GET['place'] == "five")?"checked":""?>>
            <label for= "Five"> Five </label>
            
            </br> </br>
            
            Select Country: 
            <select name= "country">
                <option value = "USA"> USA </option>
                <option value = "Mexico"> Mexico </option>
                <option value = "France"> France </option>
            </select>
            
            </br> </br>
            
            Select Number of Places: 
            <input type= "radio" name= "alpha" value= "true" id= "true" <?= ($_GET['alpha'] == "alpha")?"checked":""?>>
            <label for= "A-Z"> A-Z </label>
            
            <input type= "radio" name= "alpha" value= "false" id= "false" <?= ($_GET['alpha'] == "false")?"checked":""?>>
            <label for= "Z-A"> Z-A </label>
            
            </br> </br>
            
            <input type="submit" value="Create Itinerary" name="submit" />
            </form>
             
             </br> 
             
            <?=displayCalendar(); ?>
            
            </br> </br>
            
              
    <table border="1" width="600">
    <tbody><tr><th>#</th><th>Task Description</th><th>Points</th></tr>
    <tr style="background-color:#99E999">
      <td>1</td>
      <td>The page includes the form elements as the Program Sample: dropdown menu, radio buttons, etc.</td>
      <td width="20" align="center">5</td>
    </tr>
    <tr style="background-color:#99E999">
      <td>2</td>
      <td>Errors are displayed if month or number of locations are not submitted.</td>
      <td width="20" align="center">5</td>
    </tr> 
    <tr style="background-color:#99E999">
      <td>3</td>
      <td>Header and Subheader are displayed with info submitted. </td>
      <td align="center">5</td>
    </tr>    
	<tr style="background-color:#99E999">
      <td>4</td>
      <td>A table with days and weeks is displayed when submitting the form</td>
      <td align="center">5</td>
    </tr> 
    <tr style="background-color:#99E999">
      <td>5</td>
      <td>The number of days in the table correspond to the month selected</td>
      <td align="center">10</td>
    </tr>
    <tr style="background-color:#FFC0C0">
      <td>6</td>
      <td>Random images are displayed in random days</td>
      <td align="center">5</td>
    </tr>       
    <tr style="background-color:#FFC0C0">
      <td>7</td>
      <td>The number of random images correspond to the number of locations and country submitted</td>
      <td align="center">10</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>8</td>
      <td>The proper name of the location is displayed below the image 
      		(e.g. "New York", "Las Vegas")</td>
      <td align="center">10</td>
    </tr>  
    <tr style="background-color:#FFC0C0">
      <td>9</td>
      <td>The list of months submitted along with the country and number of locations is displayed below the table (using Sessions)</td>
      <td align="center">15</td>
    </tr>    
    <tr style="background-color:#FFC0C0">
      <td>10</td>
      <td>Random locations should be ordered alphabetically, if user checks corresponding radio button (A-Z or Z-A). </td>
      <td align="center">15</td>
    </tr>        
    <tr style="background-color:#FFC0C0">
      <td>11</td>
      <td>The web page uses Bootstrap and has a nice look. </td>
      <td align="center">5</td>
    </tr>        
    <tr style="background-color:#99E999">
      <td>12</td>
      <td>This rubric is properly included AND UPDATED (BONUS)</td>
      <td width="20" align="center">2</td>
    </tr>     
     <tr>
      <td></td>
      <td>T O T A L </td>
      <td width="20" align="center"><b></b></td>
    </tr> 
  </tbody></table>

        </div>
    </body>
</html>