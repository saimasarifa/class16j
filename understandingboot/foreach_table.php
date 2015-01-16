<?php
$place1=array('city'=>'tokyo',
    'country'=>'japan',
    'continenet'=>'asia');

$place2=array('city'=>'Mexico city',
    'country'=>'Mexico',
    'continenet'=>'north america');

$place3=array('city'=>'New york',
    'country'=>'USA',
    'continenet'=>'north america');

$place4=array('city'=>'Mumbai',
    'country'=>'India',
    'continenet'=>'asia');

$place5=array('city'=>'Seoul',
    'country'=>'Koria',
    'continenet'=>'Asia');

$place5=array('city'=>'Seoul',
    'country'=>'Koria',
    'continenet'=>'Asia');

$place6=array('city'=>'Shanghi',
    'country'=>'China',
    'continenet'=>'Asia');

$place7=array('city'=>'Lagos',
    'country'=>'Nigeria',
    'continenet'=>'Africa');

$place8=array('city'=>'Buence Aires',
    'country'=>'Argintina',
    'continenet'=>'South america');

$place9=array('city'=>'Cairo',
    'country'=>'Egypt',
    'continenet'=>'Africa');

$place10=array('city'=>'London',
    'country'=>'UK',
    'continenet'=>'europe');



$places= array(

    0=>array('city'=>'tokyo',
        'country'=>'japan',
        'continenet'=>'asia'),

    1=>array('city'=>'Mexico city',
        'country'=>'Mexico',
        'continenet'=>'north america'),

    2=>array('city'=>'New york',
        'country'=>'USA',
        'continenet'=>'north america'),

    3=>array('city'=>'Mumbai',
        'country'=>'India',
        'continenet'=>'asia'),

    4=>array('city'=>'Seoul',
        'country'=>'Koria',
        'continenet'=>'Asia'),
    5=>array('city'=>'Seoul',
        'country'=>'Koria',
        'continenet'=>'Asia'),

    6=>array('city'=>'Shanghi',
        'country'=>'China',
        'continenet'=>'Asia'),

    7=>array('city'=>'Lagos',
        'country'=>'Nigeria',
        'continenet'=>'Africa'),

    8=>array('city'=>'Buence Aires',
        'country'=>'Argintina',
        'continenet'=>'South america'),

    9=>array('city'=>'Cairo',
        'country'=>'Egypt',
        'continenet'=>'Africa'),

    10=>array('city'=>'London',
        'country'=>'UK',
        'continenet'=>'europe')
);
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css"href="../css/bootstrap.min.css" >

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <center><h3 style="color: maroon"><u>table</u></h3></center>


            <table class="table table-bordered">
                <tr>
                    <td>city</td>
                    <td>country</td>
                    <td>continenet</td>
                </tr>
                <?php
                foreach($places as $row){
                ?>
            <tr>
                <td><?php echo $row['city']?></td>
                <td><?php echo $row["country"]?></td>
                <td><?php echo $row["continenet"]?></td>
            </tr>


                <?php
                }
                ?>
            </table>


        </div>

        </div>
    </div>













    <!-- /.modal -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>
</html>