<?php

function getDatabaseConnection() { //$dbname parameter

$host = "us-cdbr-iron-east-05.cleardb.net";
$dbname = "heroku_876ef2f60b62635"; //$dbname
$username = "b3d374bc5def80";     //root
$password = "6038e853";

//checks whether the URL contains "herokuapp" (using Heroku)
if(strpos($_SERVER['HTTP_HOST'], 'herokuapp') !== false) {
   $url = parse_url(getenv("CLEARDB_DATABASE_URL"));
   $host = $url["host"];
   $dbname = substr($url["path"], 1);
   $username = $url["user"];
   $password = $url["pass"];
}

$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

return $dbConn;

}

?>