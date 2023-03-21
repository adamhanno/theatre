<?php


$hn = "localhost";
$un = "admin";
$pw = "i__WLE90-JLv9z8A";
$db = "theatre";

// Create database connection
$conn = new mysqli($hn, $un, $pw, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


?>