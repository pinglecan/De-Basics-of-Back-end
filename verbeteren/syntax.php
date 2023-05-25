<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>even getallen</title>
</head>
<body>
    <?php
    
    function lijst_optellen($numbers) {
    $sum = 0;
    
    foreach ($numbers as $number) {


        if (is_int($number / 2)){
            $sum += $number;
        }
    }

    return $sum . "<br>";

    }
    
 

    $getallenLijst = [1, 2, 3, 4];

    $result = lijst_optellen($getallenLijst);

    echo $result        
    ?>
    <?php
    $array =  ['kat', 'hond', 'olifant'];
    $last_length = 0;
    $longestWord = '';

    foreach ($array as $word) {
    if (strlen($word) > $longestWord) {
        $longestWord = strlen($word);
        $finalWord = $word;
    }
    }

    echo $finalWord;
    ?>
</body>
</html>