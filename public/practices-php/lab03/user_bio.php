<?php
// перевірка, чи були надіслані дані форми
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // отримання даних з форми
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $bio = $_POST["bio"];

    // виведення даних на сторінці
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
