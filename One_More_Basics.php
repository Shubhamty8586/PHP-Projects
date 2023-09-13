<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<style>
    * {
        margin:0px;
        padding:0px;
        box-sizing:border-box;
    }
    .container {
        max-width:80%;
        background-color:grey;
        margin:auto;
        padding:23px;
    }
</style>
<body>
<div class="container">
<h1>Let's Learn About PHP</h1>
This is a Container
</div>
<?php 

$age = 15;
if($age > 18){
    echo "You Can go to the Party";
}
else{
    echo "You Cannot go to the Party";
}

$age = 6;
if($age > 18){
    echo "You Can go to the Party";
}
else if($age == 7){
    echo "You are 7 years old";
}
else if($age == 6){
    echo "You are 6 years old";
}
else{
    echo "You Cannot go to the Party";
}

// Arraays in PHP
$languages = array("Python", "C++", "PHP", "NodeJs");
echo $languages[0];
echo count($languages);
echo "<br>";

// Loops in PHP
$a = 0;
while ($a <= 10) {
    # code...
    echo "The Value of a is:";
    echo $a;
    echo "<br>";
    $a++;
}

// Iterating Arrays in PHP using While Loop
$a = 0;
while ($a < count($languages)) {
    # code...
    echo "The Value of laungage is:";
    echo $languages[$a];
    echo "<br>";
    $a++;
}

// Do While Loops in PHP
$a = 0;
do {
    # code...
    echo "<br>The Value of a is:";
    echo $a;
    $a++;
} while ($a <= 10);

$a = 100;
do {
    # code...
    echo "<br>The Value of a is:";
    echo $a;
    $a++;
} while ($a <= 10);

// For Loops in PHP
for ($a=0; $a < 10; $a++) { 
    echo "<br>The Value of a from the for loop is: ";
    echo $a;
}

for ($a=20; $a < 10; $a++) { 
    echo "<br>The Value of a from the for loop is: ";
    echo $a;
}

// Functions in PHP
function print5(){
    echo "FIVE";
}
print5();
print5();
print5();
print5();

function print_number($number){
    echo "<br>Your Number is ";
    echo $number;
}
print_number(45);
print_number(355);
print_number(755);

// Strings
$str = "This This This";
echo $str;
$lenn = strlen($str);
echo "<br>The length of the string is " .$lenn . " Thank You";
//  $lenn = str_word_count($str);
echo "<br>The Number of Words in this string is " .str_word_count($str) . " Thank You.";
echo "<br>The Reversed string is " .strrev($str) . " Thank You.";
echo "<br>The Search for is in this string is " .strpos($str, "is") . " Thank You.";
echo "<br>The Replaced string is " .str_replace("is", "at", $str) . " Thank You.";
?>
</body>
</html>