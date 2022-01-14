    <link rel="stylesheet" href="assets/styles/scss/game.css" />
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
    <?php require_once "loading.php"?>
    <!-- Boutons latéraux -->
    <?php require_once "navbar.php"?>
    <!-- Modale commandes -->
    <?php require_once "controls.php"?>
    <!-- ======================= -->
    <!-- Emplacement du tableau ici -->
    <div id="container"></div>
    <!-- ======================= -->
    <?php require_once "menu.php"?>
    <!-- ======================= -->
    <!-- Scripts internes -->
    <script src="assets/js/hammer.min.js"></script>
    <script src="assets/js/svg-pan-zoom.js"></script>
    <script src="assets/js/grid-kplace.js"></script>
    <script src="assets/js/color-selector.js"></script>
    <script type="module" src="assets/js/firebase.js"></script>
    <!-- ======================= -->
