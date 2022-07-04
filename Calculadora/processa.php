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
        require_once "calculadora.php";
        $calc = new Calculadora($_GET["op"], $_GET["v1"],$_GET["v2"]);
        echo $calc->calcular();
    ?>
</body>
</html>