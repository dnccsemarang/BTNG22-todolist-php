<?php
$db_host = "localhost:3308";
$db_username = "root";
$db_password = "";
$db_name = "dncc_tugas_akhir";

$conn = new mysqli($db_host, $db_username, $db_password, $db_name);

if ($conn->connect_error) {
    die("Connection failed" . $conn->connect_error);
}
