<?php
require("register.php");
if (isset($_POST["username"])) {
    $username = $_POST["username"];
}
if (isset($_POST["email"])) {
    $email = $_POST["email"];
}
if (isset($_POST["password"])) {
    $password = $_POST["password"];
}
if (isset($_POST["reapet_password"])) {
    $reapet_password = $_POST["reapet_password"];
}

if (empty($username) or empty($email)) {
    exit("Заполнте все поля");
} else if (
    empty($password) or
    empty($reapet_password)
) {
    exit("Заролнте все поля");
}

if ($password == $reapet_password) {
    $query = "INSERT INTO users
    (username, email, password, reapet_password) VALUES 
    ('$username', '$email', '$password', '$reapet_password')";
    $request = $connect->query($query);

    if ($request) {
        echo "Регистрация прошла успешно!";
    } else {
        exit("Произошла ошибка");
    }
}
