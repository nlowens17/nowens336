<?php
    include 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Admin Login </title>
        <style>
            
        </style>
    </head>
    <body>

        <h1> Kanto - Admin Access </h1>
        
        <form method="POST" action="loginProcess.php">
            
            Username: <input type="text" name="username"/> <br />
            Password: <input type="password" name="password"/> <br />
            
            <input type="submit" name="submitForm" value="Login" />
            
        </form>

    </body>
</html>