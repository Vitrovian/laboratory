<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Request</title>
    <link rel="stylesheet" href="./style03.css">
</head>
<body>
    <div class="form1">
        <h1>Personal Information Form</h1>
        <form action="user_bio.php" method="get" target="_blank">

            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required><br><br>

            <label for="age">Age:</label>
            <input type="number" id="age" name="age" min="1" required><br><br>

            <label for="gender">Gender:</label>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female" required>
            <label for="female">Female</label>
            <input type="radio" id="other entity" name="gender" value="other entity" required>
            <label for="other entity">Other entity</label><br><br>

            <label for="email">Email:</label>   
            <input type="email" id="email" name="email" required><br><br>

            <label for="bio">Bio:</label>
            <textarea id="bio" name="bio" rows="5" cols="30" required></textarea><br><br>

            <input type="submit" value="Submit">
        </form>
    </div>
    


    <div class="form2">
        <h2>Quiz</h2>
        <form action="post.php" method="POST" target="_blank">
            <h3>Столиця України?</h3>
            <input type="radio" name="q1" id="paris" value="paris">
            <label for="paris">Париж</label><br>
            <input type="radio" name="q1" id="kyiv" value="kyiv">
            <label for="kyiv">Київ</label><br>

            <h3>Хто написав "Кобзар"?</h3>
            <input type="radio" name="q2" id="shevchenko" value="shevchenko">
            <label for="shevchenko">Шевченко Т. Г.</label><br>
            <input type="radio" name="q2" id="franko" value="franko">
            <label for="franko">Іван Франко</label><br>

            <h3>Колір верхньої частини прапору України?</h3>
            <input type="radio" name="q3" id="blue" value="blue">
            <label for="blue">Синій</label><br>
            <input type="radio" name="q3" id="yellow" value="yellow">
            <label for="yellow">Жовтий</label><br><br>

            <input type="submit" value="Завершити тест">
        </form>
    </div>
   

    <div class="form3">
        <h2>Upload Image</h2>
        <form action="upload_image.php" method="POST" enctype="multipart/form-data" target="_blank">
        <input type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <br>
        <input type="submit" value="Upload Image" name="submit">
        </form>
    </div>
    

    

    
</body>
</html>