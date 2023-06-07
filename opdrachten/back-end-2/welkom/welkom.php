<?php 
    function validateData($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>De ingevulde gegevens zijn: </h1>
    <p>Your name: <?php echo validateData($_POST['name']) ?></p>
    <p>Your email: <?php echo validateData($_POST['email']) ?></p>
</body>
</html>


