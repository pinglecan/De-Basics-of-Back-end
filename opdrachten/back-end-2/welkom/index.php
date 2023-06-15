<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php     $nameErr = $emailErr = " "; ?>
</head>
<body>
    <body>
        <form action="welkom.php" method="post">
            <h1>vul je gegevens in</h1> 
            <br>
            <p>name</p>
            <input type="text" name="name" required>
            <span class="error">* <?php echo $nameErr;?></span>
            <br>
            <p>E-mail</p>
            <input type="email" name="email" required>
            <span class="error">* <?php echo $emailErr;?></span>
            <br><br><br>
            <input type="submit" id="submit">
        </form>
    </body>
</body>
</html>