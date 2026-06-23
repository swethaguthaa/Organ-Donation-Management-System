<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "organbank";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
 die('Could not Connect MySql:' .mysql_error());
}
?>