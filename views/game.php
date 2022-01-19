    <link rel="stylesheet" href="assets/styles/css/game.css" />
    <link rel="stylesheet" href="assets/styles/css/kc-timer.css" />
    <!-- En utilisant l'objet Database fabriqué en PHP, je fabrique une feuille de style des couleurs -->
    <style>
    <?php foreach ($colors as $color) {echo "." . $color["color_name"] . "{ fill: " . $color["color_hexa"] . "} ";}?>
    <?php foreach ($colors as $color) {echo "." . $color["color_name"] . "{ background-color: " . $color["color_hexa"] . "} ";}?>
    </style>
    <!-- ================ -->
    </head>
    <body>
    <!-- ======================= -->
    <!-- Ecran de chargement -->
    <?php require_once "parts/loading.php"?>
    <!-- Boutons latéraux -->
    <?php require_once "parts/navbar.php"?>
    <!-- Modale commandes -->
    <?php require_once "parts/controls.php"?>
    <!-- Leaderboard -->
    <?php require_once "parts/leaderboard.php"?>
    <!-- ======================= -->
    <!-- Emplacement du tableau ici -->
    <div id="container"></div>
    <!-- Cooldown ici -->
    <div id="kcTimer"></div>
    <!-- ======================= -->
    <?php require_once "parts/menu.php"?>
    <!-- ======================= -->
    <!-- huh ? C'est quoi ça ? Sûrement un bug. -->
    <audio>
        <source src="assets/sound/supersecretsong.mp3"></source>
    </audio>
    <video id="errorMessageVideo" width="100%">
        <source src="assets/video/error-message.mp4" type="video/mp4">
    </video>
    <!-- Scripts internes -->
    <script src="assets/js/nothingtoseehere.js"></script>
    <script src="assets/js/hammer.min.js"></script>
    <script src="assets/js/svg-pan-zoom.js"></script>
    <script src="assets/js/grid-kplace.js"></script>
    <script src="assets/js/color-selector.js"></script>
    <script type="module" src="assets/js/firebase.js"></script>
    <!-- ======================= -->
