<!-- Snack 3
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta. -->

<?php 
    $array= [];
    while(count($array)<15){
        $random_number[]= rand(0,100);
        $array = array_unique($random_number);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack3</title>
</head>
<body>
    <h2><?php print_r($array)?></h2>
</body>
</html>