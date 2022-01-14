<?php

/**
 * CE FICHIER EST LA PAGE D'ACCUEIL DU SITE.
 *
 * Le controller décidera de la page à afficher en fonction du paramètre dans le lien.
 */

require_once "core.php";

//On affiche la page en fonction de l'info en GET
$route = frontController();

switch ($route) {
    case "welcome":
        $title = "Pyxelia - Bienvenue !";
        $metaDesc = "Pyxelia est une plateforme de pixel-art en multijoueur inspiré par r/Place.";
        render($route, compact('title', 'metaDesc'));
        break;
    case "game":
        $title = "Pyxelia - Dessinez !";
        $metaDesc = "Connectez-vous et créez une oeuvre d'art avec vos amis sur Pyxelia !";
        $colors = $db->getData("1/name");
        render($route, compact('title', 'colors', 'metaDesc'));
        break;
    case "403":
        $title = "Pyxelia - 403";
        $metaDesc = "Mince, il y a un problème, tu ne devrait pas être ici !";
        $error_number = "403";
        $error_message = "Eh oh ! T'essaie d'accéder à des trucs interdits là !";
        render("error", compact('title', 'metaDesc', 'error_message', 'error_number'));
    default:
        $title = "Pyxelia - 404";
        $metaDesc = "Mince, il y a un problème, tu ne devrait pas être ici !";
        $error_number = "404";
        $error_message = "La page n'a pas été trouvé...";
        render("error", compact('title', 'metaDesc', 'error_message', 'error_number'));
        break;
}
