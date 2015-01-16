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

print_r($places);
echo $places;
echo $places[3];
print_r($places[3]);
print_r($places[3]['continenet']);
$places[3]['continenet']='europe';
print_r($places[3]['continenet']);

foreach($places as $bkict){
   // echo $bkict.'<br/>';
   // print_r($bkict) ;
   // echo $bkict ['city'].'<br />';
    echo $bkict['city'].'-'.$bkict['country'].'-'.$bkict['continenet'].'<br />';


}


?><p>


<?php
$oddnumber = array(1,3,5,7,9,11,13,15,17);

foreach($oddnumber as $bkict){
    echo $bkict;
    print_r($bkict) ;


}
?>
<?php
$name = array('Mim','Fahad','fahad1','Afriin','saima');

foreach($name as $bkict){
    echo $bkict.'<br/>';

}
?>

