<?php

// WARNING: NEVER DO THIS IN PRODUCTION
$servername = "localhost";
$username = "Kalghamdi";
$password = "";
$database = "todo_db";

$conn = new mysqli($servername, $username, $password, $database);



// check the connection
if ($conn->connect_error) {

    echo "Failed to connect to database!";
    die("Connection failed: ");
    exit();
}
