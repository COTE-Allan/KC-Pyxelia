<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/img/favicon.ico">
    <!-- Mise a jour dynamique du titre et de la description. -->
    <title><?=$title?></title>
    <meta name="description" content="<?=$metaDesc?>">
    <!-- Appels à Firebase UI, nécessaire pour la connexion. -->
    <script src="https://www.gstatic.com/firebasejs/ui/6.0.0/firebase-ui-auth__fr.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.1.3/firebase-app-compat.js"></script>
    <script src="https://www.gstatic.com/firebasejs/9.1.3/firebase-auth-compat.js"></script>
    <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/6.0.0/firebase-ui-auth.css" crossorigin="anonymous"/>
    <!-- Appels à Alertify.js, un plugin d'alertes customisés. -->
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" crossorigin="anonymous"/>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css" crossorigin="anonymous"/>
    <!-- Le contenu de la page sera placé ici : -->
    <?=$content?>
</body>

</html>