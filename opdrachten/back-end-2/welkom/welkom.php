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
    <title>info</title>
</head>
<body>
    <h1>De ingevulde gegevens zijn: </h1>
    <?php if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    }   else { 
            echo '<p>Your name:</p>', validateData($_POST['name']);}
        ?>
    <p>Your email: <?php echo validateData($_POST['email']) ?></p>
</body>
</html>


