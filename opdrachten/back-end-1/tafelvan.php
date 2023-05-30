<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $getallen = array(3,5,6,8,12);
    function tafel_van($getal) {
    for($x = 1; $x != 11; $x ++ )
    echo $x .' x '.$getal.' = '. $x * $getal .'<br>';
    }


    foreach($getallen as $getal){
        tafel_van($getal);
    }
    ?>
</body>
</html>