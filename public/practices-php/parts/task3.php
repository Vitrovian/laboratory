<?php

$arr = [];
$length = 12;
for ($i = 0; $i < $length; $i++) {
    $arr[$i] = mt_rand(-50, 50);
}

//row
foreach($arr as $element){
    echo  $element . " " ;
}

echo "<br>";
//column
foreach($arr as $element){
    echo "<br>". $element ;
}

echo "<br><br>";

//print_r
print_r($arr);

echo "<br>";

//sum
foreach($arr as $element){
    $sum += $element;
}
echo "Сума елементів: ". $sum;

//average
$countPositive = 0;
$sumPositive = 0;
foreach($arr as $element){
    if ($element > 0){
        $countPositive++;
        $sumPositive += $element;
    } 
}
$averagePositive = $sumPositive / $countPositive;
echo "<br>Сума додатніх елементів: ". $sumPositive;
echo "<br>Кількість додатніх елементів: ". $countPositive;
echo "<br>Середнє, суми додатніх елементів: ". $averagePositive;

// Підрахунок добутку чисел більших за середнє арифметичне
$product =1;
foreach($arr as $element){
    if($element > $averagePositive){
        $product *= $element;
    }
}
echo "<br>Cереднє арифметичне серед додатних чисел на добуток всіх чисел, більших за середнє арифметичне: ". $product; 