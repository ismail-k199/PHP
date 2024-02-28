
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <STYLE>
    
   table {
    border-collapse: collapse;
   }
   table,td,th,tr{
    border:2px solid black;
   }
</STYLE>
</head>
<body>

<table>
<tr><th>Nom</th><th>Moyenne</th></tr>
<?php
$tab5 = array('ismail' => 12,
'khadija' => 14,
"jessem" => 16,
"mahdi" => 9) ;

foreach($tab5 as $k => $v)
{   
    $chaine=couler($v);
    ?>
    <tr> <td> <?=$k?> </td><td style="background-color: <?=$chaine?>;"> <?=$v ?></td></tr>
<?php 
}
function couler ($v)
{
    if($v<10)
    return 'red';
    else return 'green';
}
?>
</body>
</html>
