<?php
// error_reporting(E_ALL^E_WARNING);

// ob_start();
session_start();

$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "";
$DB_name = "restuarant";

// Create connection
$conn = new mysqli($DB_host,$DB_user, $DB_pass, $DB_name);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

