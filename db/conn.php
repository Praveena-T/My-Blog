<?php
$SERVER_NAME = "localhost";
$USER_NAME =  "root";
$PASSWORD = "host@123";
$DATABASE = "my_bolg";

$con =  new mysqli($SERVER_NAME, $USER_NAME, $PASSWORD, $DATABASE);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} else {
    // echo "Connection succeeded";
}
