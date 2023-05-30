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
        $goede = 'goede nacht';
    }elseif($hour < 12){
        $background = "img/morning.png";
        $goede = 'goede morgen';
    }elseif($hour < 18){
        $background = "img/afternoon.png";
        $goede = 'goede middag';
    }else{
        $background = "img/evening.png";
        $goede = 'goede avond';
    };
    ?>

</head>
<body style = "background-image: url(<?php echo $background?>);">
    <div class="text">    
    <?php    
        echo $goede . '<br>' . '<br>';
        echo  "Het is nu " . date("H:i");
    ?>
    </div>
    

</body>
</html>