<?php
$database_url = "mysql://root:kZIkldseEChlAnyLLgTlrLdFvhDBBdAq@mysql.railway.internal:3306/railway";

// Parse the URL
$db_url = parse_url($database_url);

$host = $db_url["host"];
$dbname = ltrim($db_url["path"], '/');
$username = $db_url["user"];
$password = $db_url["pass"];
$port = $db_url["port"];

// Establish a connection to the MySQL database
$conn = mysqli_connect($host, $username, $password, $dbname, $port);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
