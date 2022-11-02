<?php

namespace AppWeb\App\Controller;

abstract class Controller
{
    protected static function render($view, $model = null)
    {
        $arquivo_view = VIEWS . $view . ".php";

        if(file_exists($arquivo_view))
            include $arquivo_view;
        else
            exit('Arquivo "' . $arquivo_view . '" não encontrado');
    }

    public static function isAuthenticated()
    {
        if(!isset($_SESSION['usuario_logado']))
            header("location: /login");
    }
}