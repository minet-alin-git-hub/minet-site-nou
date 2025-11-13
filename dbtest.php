<?php
$mysqli = new mysqli("localhost", "root", "", "minet-site-now_db");

if ($mysqli->connect_errno) {
    echo "❌ Failed to connect to MySQL: " . $mysqli->connect_error;
} else {
    echo "✅ Connected successfully to MySQL database!";
}
?>
