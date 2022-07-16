<?php
    require_once "./vendor/autoload.php";
    
    $loader = new \Twig\Loader\FilesystemLoader('./views/');
    $twig = new \Twig\Environment($loader);

    $dados = array(

        "title" => "Home",
        "Matriz2x" => "Calcular matriz 2x2:",
        "Matriz3X" => "Calcular matriz 3x3:",
        "escolha" => "Escolha qual tamanho de matriz deseja calcular:"
        
    );

    $template = $twig->load("index.html");
    echo $template->render($dados);
     

