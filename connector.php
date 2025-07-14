<?php
$host = "localhost";
$port = "5432";
$dbname = "first";
$user = "postgres";
$password = "blessing";

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

if(!$conn){
    echo "Error: Unable to connect to the database";
}else{
    echo "Connection successful";
}
?>