<?php

    require_once __DIR__ . '/vendor/autoload.php';
    $loader = new \Twig\Loader\FilesystemLoader('./views/');
    $twig = new \Twig\Environment($loader);
    
    $dados =array (

    );
    
    $template = $twig->load('formM2.html');
    echo $template->render($dados);
    