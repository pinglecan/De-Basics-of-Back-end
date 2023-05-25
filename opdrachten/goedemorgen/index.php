<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>goede dag</title>
    <?php
    date_default_timezone_set("europe/amsterdam");
    $hour = date('H');
    if($hour < 6){
        $background = "img/night.png";
    }elseif($hour < 12){
        $background = "img/morning.png";
    }elseif($hour < 18){
        $background = "img/afternoon.png";
    }else{
        $background = "img/evening.png";
    };


    ?>

</head>
<body style = "background-image: url(<?php echo $background?>);">
    <div class="text">    
    <?php    
        echo  "Het is nu " . date("H:i");
    ?>
    </div>
    

</body>
</html>