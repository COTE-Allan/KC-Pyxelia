<?php

function createURL($route, array $routeSettings)
{
    $url = $route;
    if (!empty($routeSettings)) {
        $url = $url . "?";
        foreach ($routeSettings as $key => $value) {
            $url = $url . $key . "=" . $value;
        }
    }
    return $url;
}

function render($partialPath, $params = array())
{
    // Crée des variables à partir d'un tableau associatif : les clés déviennent les variables et les valeurs les contenus
    extract($params);
    // on capture le contenu du template index et on l'envoie dans la variable $content
    ob_start();

    require 'views/' . $partialPath . '.php';

    $content = ob_get_clean();

    require 'views/default.php';
}

function frontController()
{
    // Si le paramètre est trouvé, on va se connecter à la base de données et chercher le livre enregistrer avec cet id.
    // Si aucun elements n'est trouvé, on affiche une erreur 404

    /**
     * 1. On récupère le paramètre d'url id
     */
    // on déclare la variable qui va récevoir l'id et on l'initialise avec rien.
    $page = null;
    $pageList = ["game", "welcome", "403", "stats", "legals"];

    // on vérifie l'existance d'un paramètre id, non null, de type numérique
    if (!empty($_GET['pageIs']) && ctype_print($_GET['pageIs'])) {
        // on nettoie le paramètre pour se protéger contre les injections de code.
        $page = filter_input(INPUT_GET, 'pageIs', FILTER_SANITIZE_STRING);
        if (in_array($page, $pageList)) {
            return $page;
        } else {
            $page = null;
        }
    } else if (empty($_GET['pageIs'])) {
        $page = "welcome";
        return $page;
    }
}
