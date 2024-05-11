<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word Counter</title>
    <link rel="stylesheet" href="./style2.css">
</head>
<body>
    <!-- Завдання 1 -->
    <h1>Word Counter</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
        <label for="inputText">Enter some text:</label>
        <input type="text" id="inputText" name="inputText" required>
        <input type="submit" value="Submit">
    </form>

    <?php
    // Завдання 2 та 3
    if (isset($_GET['inputText']) && !empty($_GET['inputText'])) {
        $inputText = $_GET['inputText'];
        $wordCounts = countWords($inputText);

        // масив за значеннями у спадному порядку
        arsort($wordCounts);

        // підрахунок слів в HTML-таблиці
        echo "<h2>Word Counts:</h2>";
        echo "<table>";
        echo "<tr><th>Word</th><th>Count</th></tr>";
        foreach ($wordCounts as $word => $count) {
            echo "<tr><td>$word</td><td>$count</td></tr>";
        }
        echo "</table>";
    } else {
        echo "Please enter some text.";
    }

    function countWords($str) {
        // щоб ігнорувати регістр
        $str = strtolower($str);

        // розбиття рядка на масив слів
        $words = explode(" ", $str);

        // зберігання підрахунку слів
        $wordCounts = array();

        // лічильник слів
        foreach ($words as $word) {
            if (isset($wordCounts[$word])) {
                $wordCounts[$word]++;
            } else {
                $wordCounts[$word] = 1;
            }
        }

        //  масив з підрахунком слів
        return $wordCounts;
    }
    ?>
</body>
</html>