<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "twitter";

$con = new mysqli('localhost', 'root', '', 'twitter');

if(!$con){
    die(mysqli_error($con));
}





?>