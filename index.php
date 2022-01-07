<?php

/**
 * CE FICHIER EST LA PAGE D'ACCUEIL DU SITE. ELLE DOIT AFFICHER LA LISTE DES LIVRES DISPONIBLES DANS NOTRE BIBLIOTHEQUE.
 *
 * On devra se connecter à la base de données et récupérer une liste de livres triés par ordre alphabétique de titre. On va boucler sur la liste pour afficher chaque item de la liste.
 */

require_once "core.php";

//On affiche la page en fonction de l'info en GET
$route = frontController();

switch ($route) {
    case "pyxeliaWelcome":
        $title = "Pyxelia - Bienvenue !";
        render($route, compact('title'));
        break;
    case "pyxeliaGame":
        $title = "Pyxelia - Dessinez !";
        $colors = $db->getData("1/name");
        render($route, compact('title', 'colors'));
        break;
}
