<?php

$servername = "localhost";
$username = "sdnawwnnmu"; // Put the MySQL Username
$password = "BF9xUdGabh"; // Put the MySQL Password
$database = "sdnawwnnmu"; // Put the Database Name

// Create connection for integration
$conn_integration = mysqli_connect($servername, $username, $password, $database);

// Check connection for integration
if (!$conn_integration) {
    die("Connection failed: " . mysqli_connect_error());
}

