<?php

//task1
echo"<h2>Task1 </h2>";
$length=10;
$width=5;
$area= $length * $width;
$perimeter= 2* ($length + $width) ;
echo " length=$length , width=$width<br>";
echo"area=$area , perimeter= $perimeter<hr>";


//task2
echo "<h2>Task2 </h2>";
$amount=100;
$vat= $amount * 0.15;
echo"Amount = $amount<br>";
echo"Vat(15%)=$vat<hr>";


//task3
echo "<h2>Task3</h2>";
$number=5;
echo"Number=$number<br>";
if($number%2== 0){
    echo "$number is even";
} else{
    echo "$number is odd";
}
echo "<hr>";


//task4
echo "<h2>Task4</h2>";
$a=5;  $b=7;  $c=8;
if($a>=$b && $a>=$c){
    $largest=$a;
} elseif($b >=$a && $b>=$c ){
    $largest=$b;
}else{
    $largest=$c;
}

echo "Number= $a , $b , $c <br>";
echo "Largest=$largest<hr>";



//task5
echo "<h2>Task5</h2>";
for ($i = 11; $i < 100; $i += 2) {
    echo $i . " ";
}
echo "<hr>";


//task6
echo "<h2>Task6</h2>";
$arr = [2, 5, 7, 9, 12, 20];
$search = 9;
$found = false;
foreach ($arr as $value) {
    if ($value == $search) {
        $found = true;
        break;
    }
}
if ($found) {
    echo "$search found in array";
} else {
    echo "$search not found in array";
}
echo "<hr>";


//task7
echo "<h2>Task7</h2>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
echo "<br>";


echo "1 2 3<br>";
echo "1 2<br>";
echo "1<br><br>";


$letters = range('A', 'Z');
$index = 0;
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $letters[$index++] . " ";
    }
    echo "<br>";
}
echo "<hr>";



//task8

echo "<h2>Task8</h2>";
$matrix = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

foreach ($matrix as $row) {
    foreach ($row as $val) {
        echo $val . " ";
    }
    echo "<br>";
}

echo "<br>Reprint Shapes:<br>";
echo "1 2 3<br>";
echo "1 2<br>";
echo "1<br><br>";

$index = 0;
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $letters[$index++] . " ";
    }
    echo "<br>";
}
?>
