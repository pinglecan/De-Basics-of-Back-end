<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet.css">
    <title>Document</title>
</head>
<body>
    <div id="main">
        <img src="img/madlibs.png" alt="madlibs logo" height="120" width="400">
        <div class="header">
            <button>er heerst paniek</button>
            <button>onkunde</button>
        </div>
        <div class="main" >
            <h2>onkunde</h2>
            <form action="onkunde.php" method="post>
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
        </div>
        <div class="footer">

        </div>
    </div>
</body>
</html>