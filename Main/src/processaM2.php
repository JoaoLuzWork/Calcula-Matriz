<?php

    require_once __DIR__ . '/../vendor/autoload.php';
    require_once "Cramer2x2.php";

    $loader = new \Twig\Loader\FilesystemLoader('../views/');
    $twig = new \Twig\Environment($loader);
    
    $calc = new Cramer2x2($_GET["x1"], $_GET["x2"],$_GET["y1"], $_GET["y2"], $_GET["resultado1"],$_GET["resultado2"]);
    $calc->calcula();
        
    if ($calc->getDeterminado()== false) {
        $dados =array (
            "texto" => "Resultados",
            "X" => "X: Impossível calcular determinante = 0",
            "Y" => "Y: Impossível calcular determinante = 0",
        );  
    }  else {
        $dados =array (
            "texto" => "Resultados",
            "X" => "X: ".$calc->getX(),
            "Y" => "Y: ".$calc->getY(),
        );  
    }

    $template = $twig->load('processaM2.html');
    echo $template->render($dados);
