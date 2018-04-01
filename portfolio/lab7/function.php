<?php?
    include "../../dbConnection()";

    function displayAllProducts() {
        getDataBaseConnection("ottermart");
        $global conn;
        
        $sql = "SELECT * 
                FROM omadmin
                WHERE username = 'username'
                AND password = 'password'";
    }
>