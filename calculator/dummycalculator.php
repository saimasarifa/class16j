<!DOCTYPE html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css"href="../css/bootstrap.min.css" >

</head>
<body>
<div class="container">
    <div class="row"><br>

        <div class="col-md-6">
            <div class="well">

                <center><h3>calculator</h3></center>


                <form method="post" action="calculator.php">

                    Enter the 1st Number: <input type="text" name="number1"><p>

                        Enter the 2nd Number: <input type="text" name="number2"><p>

                        Choose the operation
                        <input type="radio" name="ck" value="add">Addition
                        <input type="radio" name="ck" value="sub">Subtraction
                        <input type="radio" name="ck" value="mul">Multiplication
                        <input type="radio" name="ck" value="div"> Division<p>
                    <center><input type="submit" name="Submit" value="Submit"></center>

                </form>
            </div>


        </div>
    </div>
</div>





</body>
</html>



<?php
session_start();

$number1=$_POST['number1'];
$number2=$_POST['number2'];
$ck=$_POST['ck'];


if ( $ck == "add" ) {
    echo "$number1 + $number2 = ";
    echo $number1 + $number2;
}
function substraction($number1,$number2,$ck)

{
    if ($ck == "sub" && $number1 > $number2) {
        echo "$number1 - $number2 = ";
        echo $number1 - $number2;

    }
    elseif ($number1 < $number2) {
        echo "Number1 should be larger than Number2";
    }
}
if ( $ck == "mul" ) {
    echo "$number1 * $number2 = ";
    echo $number1 * $number2;
}
if ( $ck == "div" ) {
    echo "$number1 / $number2 = ";
    echo $number1 / $number2;

}  elseif ( $number2==0) {

    echo "cant divid";

}




?>
<?php
session_unset();
?>