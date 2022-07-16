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
        require_once "Cramer2x2.php";
        $calc = new Cramer2x2($_GET["x1"], $_GET["x2"],$_GET["y1"], $_GET["y2"], $_GET["resultado1"],$_GET["resultado2"]);
        $calc->calcula();
        echo "<br>X:";
        echo $calc->getX();
        echo "<br>Y:";
        echo $calc->getY();
    ?>
</body>
</html>