<?php
/* Database credentials for MySQL*/
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'id17908684_dbianc203');
define('DB_PASSWORD', '7#i%VzgOFTd0E!UQ');
define('DB_NAME', 'id17908684_loginsystem');
 
/* Attempt to connect to MySQL database */
/* referenced CIS4520 connect.php file, I remember having some issues with the original php file, so i decided to define
the names and connect with $link rather than $conn to avoid naming issues like last time */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection displays if connection is made
//before i would just have "echo "databsed conn failed" " but wanted to use "die" over an echo to exit the script
if(!$link){
    die("ERROR: Could not connect.");
}
?>
