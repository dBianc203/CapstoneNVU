<?php
/* Database credentials for MySQL*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id17908684_dbianc203');
define('DB_PASSWORD', '7#i%VzgOFTd0E!UQ');
define('DB_NAME', 'id17908684_loginsystem');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection displays if connection is made
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
