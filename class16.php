<?php
$films = array(array('title'=>'Funny movie 3',
                        'genre'=>'comedy',
                          'stars'=>array('leading actress',
                                            'leading actor',
                                             'expendable dude',
                                               'somebody else')),
  array('title'=>'scary 3',
    'genre'=>'horror',
    'stars'=>array('actress',
        'action hero',
        'stunt man',
        'extra')));
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


            <table border="1" style="width:100%">
                <tr>
                    <th>Title</th>
                    <th>genre</th>
                    <th>stars</th>
                </tr>
                <?php
                foreach($films as $row){
                    ?>
                    <tr>
                        <td><?php echo $row['title']?></td>
                        <td><?php echo $row["genre"]?></td>
                        <td><?php foreach($row['stars']as $stars){?>
                                <ul class="list-group">
                                    <li><?php echo $stars ;?> </li>
                                </ul><?php }?>
                        </td>

                    </tr>


                <?php
                }
                ?>
             </table>


        </div>

    </div>
</div>