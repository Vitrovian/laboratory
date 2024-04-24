<?php
// Перевірка, чи були надіслані дані форми
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Отримання даних з форми
    $name = $_GET["name"];
    $age = $_GET["age"];
    $gender = $_GET["gender"];
    $email = $_GET["email"];
    $bio = $_GET["bio"];

    // Виведення даних на сторінці
    echo "<!DOCTYPE html>";
    echo "<html>";
    echo "<head><title>User Bio</title></head>";
    echo "<body>";
    echo "<h1>User Bio</h1>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Age:</strong> $age</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Bio:</strong> $bio</p>";
    echo "</body>";
    echo "</html>";
} else {
    echo "No data submitted.";
}
