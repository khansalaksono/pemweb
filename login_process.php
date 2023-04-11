<?php
$username = $_POST["username"];
$password = $_POST["password"];

// $username = "admin";
// $password = "tes123";

if (empty($username) || empty($password)) {
    echo "Username dan password harus diisi";
} else {
    if ($username == "admin" && $password == "tes123") {
        echo "Login sukses";
    } else {
        echo "Login gagal";
    }
}
