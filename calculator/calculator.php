<?php
$number1=$_POST['number1'];
$number2=$_POST['number2'];
$op=$_POST['op'];

if ( $op == "add" ) {
    echo "$number1 + $number2 = ";
    echo $number1 + $number2;
}

if ( $op == "sub" ) {
    echo "$number1 - $number2 = ";
    echo $number1 - $number2;
}

if ( $op == "mul" ) {
    echo "$number1 * $number2 = ";
    echo $number1 * $number2;
}

if ( $op == "div" ) {
    echo "$number1 / $number2 = ";
    echo $number1 / $number2;
}

?>
