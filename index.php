<?php
// variables
$firstName = 'ÐarknovA';
$age = 32;
$bool = true;

// display or print
echo "Hello $firstName <br>";
echo 'Hello '.$firstName.'<br>';

var_dump(1.00);
// example
$var1 = 31;
$var2 = '31';
echo "<br>";
echo $var1.' '.$var2;
echo "<br>";
var_dump($var1);
var_dump($var2);

// Constant
define('GREETINGS', 'Hello Everyone!');
echo "<br>";
echo GREETINGS;
echo "<br>";
$firstName = 'Kenn';
echo $firstName;
echo "<br>";
// Operators
// +,-,*,/,%,**
echo 2**3;

// Array
$array = ['one', 'two', 'three'];
$array2 = array('four', 'five', 'six');
echo "<br>";
print_r($array);
echo "<br>";
print_r($array2);
echo "<br>";

// Functions
function displayMessage($message) {
    return "Message: $message";
}

echo displayMessage("This is a sample message");
echo "<br>";
// Conditions
$number = 5;
$condition = 100;

if($number === 5) {
    echo "True";
}else{
    echo "False";
}

echo $number ? 'True' : 'False';

echo "<br><br>";

switch($condition) {
    case 1;
        echo "One <br>";
        break;
    case 2;
        echo "Two <br>";
        break;
    default:
        echo "None <br>";
}

// Loops
//  While loop
$count =6;
// while($count <= 5) {
//     echo $count;
//     $count ++;
// }
echo "<br>";
// // Do while
// do {
//     echo $count;
//     $count ++;
// } while ($count <= 5);

// echo $count;

// for loop

// for($i = 1; $i <= 10; $i ++) {
//     echo $i;
// }

// ForEach
$array = ['One', 'Two', 'Three', 'Four', 'Five'];

foreach($array as $arr) {
    echo "Value: $arr <br>";
}
?>

