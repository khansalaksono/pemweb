<?php
$host = "localhost"; // atau "localhost"
$dbname = "pemweb"; // atau "mahasiswa"
$username = "web";
$password = "tes123";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    echo "Koneksi sukses";
} catch (PDOException $e) {
    die('Error : ' . $e->getMessage());
}
