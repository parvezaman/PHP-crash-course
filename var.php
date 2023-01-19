<?php
$y = 3;
function myTest()
{
    // global $y; //now you can use y variable
    $x = 5; // local scope
    $sum = $x + $GLOBALS['y'];
    echo "<p>Variable x inside function is: $sum</p>";
}
myTest();

// using x outside the function will generate an error
// echo "<p>Variable x outside function is: $x</p>";


// static variable used in a fucntion 
function sumUP(){
    static $num = 0;
    echo $num;
    $num++;
}

sumUP(); // 0
echo "<br>";
sumUP(); // 1
echo "<br>";
sumUP(); // 2