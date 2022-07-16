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
        require_once "Cramer3x3.php";
        $calc = new Cramer3x3($_GET["x1"], $_GET["x2"], $_GET["x3"], $_GET["y1"], $_GET["y2"], $_GET["y3"], $_GET["z1"], $_GET["z2"], $_GET["z3"], $_GET["resultado1"], $_GET["resultado2"], $_GET["resultado3"],);
        $calc->calcula();
        echo "<br>X:";
        echo $calc->getX();
        echo "<br>Y:";
        echo $calc->getY();
        echo "<br>Z:";
        echo $calc->getZ();
        echo "<br>teste:";
        echo $calc->getDelt();
    ?>
</body>
</html>