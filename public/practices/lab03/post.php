<?php
    $questions = array("q1","q2","q3");
    $answers = array("kyiv","shevchenko","blue");

    $score = 0;
    for ($i = 0; $i < count($questions); $i++) {
        if($_POST[$questions[$i]] == $answers[$i]) {
            $score++;
        }
    }

    if ($score == 0) {
        echo "Ваш результат: ". $score ." всі відповіді неправильні";
    } elseif ($score == 1) {
        echo "Ваш результат: ". $score ." правильна відповідь";
    } elseif($score > 1) {
        echo "Ваш результат: ". $score ." правильні відповіді";
    }