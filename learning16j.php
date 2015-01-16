<?php
$number = null;
$number = 12;
if (($number%2)==0){
    echo "even number";

}else{
    echo "odd number";

}
?>
<p>
<?php
$number=12;
    function identifyEvenOrOddNumber($number){
        if(($number%2)==0){
            echo "even";

        }else{
            echo "odd";
        }


    }
?>
<p>

<?php
function myTest(){
    $sum = 2+3;
    echo "hello";
    return'bkict';
}
//function call
var_dump(is_null(myTest()));
echo myTest();

//declaration of a function
function myTest2(){
    return "hello ";


}
myTest();
echo myTest();
?>