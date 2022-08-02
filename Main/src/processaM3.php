<?php

    require_once __DIR__ . '/../vendor/autoload.php';
    require_once "Cramer3x3.php";

    $loader = new \Twig\Loader\FilesystemLoader('../views/');
    $twig = new \Twig\Environment($loader);
    
    $calc = new Cramer3x3($_GET["x1"], $_GET["x2"], $_GET["x3"], $_GET["y1"], $_GET["y2"], $_GET["y3"], $_GET["z1"], $_GET["z2"], $_GET["z3"], $_GET["resultado1"], $_GET["resultado2"], $_GET["resultado3"],);
    $calc->calcula();
    
    if ($calc->getDeterminado()== false) {
        $dados =array (
            "texto" => "Resultados",
            "X" => "X: Impossível calcular determinante = 0",
            "Y" => "Y: Impossível calcular determinante = 0",
            "Z" => "Z: Impossível calcular determinante = 0",
        );  
    }  else {
        $dados =array (
            "texto" => "Resultados",
            "X" => "X: ".$calc->getX(),
            "Y" => "Y: ".$calc->getY(),
            "Z" => "Z: ".$calc->getZ(),
        );  
    }

    $template = $twig->load('processaM3.html');
    echo $template->render($dados);
