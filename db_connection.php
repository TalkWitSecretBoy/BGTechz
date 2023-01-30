<?php
function connectMyDB(){
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "bgtechz";

// Create connection to the database
$conn = new mysqli($db_host, $db_user,$db_password,$db_name);
 
// Cheaking conneciton 
if($conn->connect_error){
     die("Sorry Connection Failed:");
}
else{
     echo "Connected Successfully to the database:";
}
}

connectMyDB();
?>