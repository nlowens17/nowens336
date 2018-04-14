

<?php
    session_start();

    if(!isset($_SESSION['attempts'] )) {
        $_SESSION['attempts'] = 0; 
        $_SESSION['answer'] =  rand(1,10);
        $_SESSION['history'] = array();
    }
    
    if(isset($_GET['playAgain'])) {
        playAgain();
    }
    
    if(isset($_GET['giveUp'])) {
        echo "<h2>The Answer was: ". $_SESSION[answer] . "</h2>";
        playAgain();
    }
    
    function playAgain() {
        $_SESSION['attempts'] = 0; 
        $_SESSION['answer'] =  rand(1,10);
    }
    
    function resetHistory() {
        $_SESSION['history'] = array();
    }
    
    function play() {
        if(isset($_GET['guessNum'])) {
            if(empty($_GET['guess'])) {
                echo "<h1> Error you must fill in a number</h1>";
            } else {;
                $_SESSION['attempts']++;
                if ($_SESSION['answer'] > $_GET['guess']) {
                    echo "The number should be higher<br />";
                }
    
                else if ($_SESSION['answer'] < $_GET['guess']) {
                    echo "The number should be lower<br />";
                }
    
                else if ($_SESSION['answer'] == $_GET['guess']) {
                    echo "CORRECT!<br />";
                    addHistory();
                }
                
            }
        }
    }
    function addHistory() {
        array_push($_SESSION['history'], "<You guessed the number ". $_GET['guess']. " in " . $_SESSION['attempts'] . " attempts<br />");
    }
    
    function displayHistory() {
        echo "<h2>Guesses History:</h2>";
       /* foreach($_SESSION['history'] as $history){
            echo $history;
        }*/
        for ($i=0; $i < count($_SESSION['attempts']); $i++ ) {
            echo $_SESSION['history'];
        }
    }
?>
    

<!DOCTYPE html>
<html>
    <head>
        <title> Guess a Number </title>
    </head>
    <body>
        <h1>Guess a number between 1 and 10</h1>
        <br/>
        <form method = 'get'>
            Guess: <input type="text" name="guess"/><br/>
            <input type="submit" name= "guessNum" value= "Guess Number">
            <input type="submit" name= "playAgain" value= "Play Again">
            <br/><br/>
            <input type="submit" name= "giveUp" value= "Give Up">
        </form>
        <?php
            play();
            if ($_SESSION['attempts'] > 0) {
                echo "Number of Tries: " . $_SESSION['attempts'] ;
            }
        ?>
        <br/><br/>
        <?php if(!empty($_SESSION['history'])) displayHistory(); ?>
        

    </body>
</html>