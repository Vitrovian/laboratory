<?php

// шлях для зберігання завантажених файлів
$target_dir = "uploads/";

// отримати інформацію про завантажений файл
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// перевірити, чи файл є зображенням
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if ($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
} else {
    echo "File is not an image.";
    $uploadOk = 0;
}

// перевірити розмір файлу 
if ($_FILES["fileToUpload"]["size"] > 200000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// якщо всі перевірки пройдено успішно, завантажити файл
if ($uploadOk == 1) {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars(basename($_FILES["fileToUpload"]["name"])) . " has been uploaded.";
        
        // відобразити завантажене зображення
        echo "<img src='$target_file' alt='Uploaded Image'>";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
