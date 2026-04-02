<?php

$link = mysqli_connect("localhost", "root", "root");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $phonenumber = $_POST['phonenumber'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    
    $sql = "INSERT INTO users (username, phonenumber, email, password) VALUES (?, ?, ?, ?)";
   
}
?>