<!DOCTYPE html>
<html lang="en">
<head>  
    <title>Document</title>
</head>
<body>
    <?php
    $one = rand(0,1000);
    $two = rand(0,1500);
    echo $one, " + ", $two, ' = ', $one + $two, '<br>' ;
    echo $one, " - ", $two, ' = ', $one - $two, '<br>' ;
    echo $one, " * ", $two, ' = ', $one * $two, '<br>' ;
    echo $one, " / ", $two, ' = ', $one / $two, '<br>' ;
    ?>
</body>
</html>