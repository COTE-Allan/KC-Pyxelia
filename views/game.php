    <link rel="stylesheet" href="assets/styles/css/game.css" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/styles/css/kc-timer.css" crossorigin="anonymous" />
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
    <div id="pixel_banner_div"></div>
    <!-- ================ -->
    <!-- Scripts internes -->
    <script src="assets/js/pixel-banner.js"></script>
    <script>
      // Ceci est un script qui génère la bannière de pixels de la page d'acceuil.
      new PixelBanner({
        target: "#pixel_banner_div",
        pixel_options: {
          size: { width: 40, height: 40 },
          probability: {
            y_axis: "distance",
            x_axis: "always",
          },
          <?='color_pallete: ["#DC1818", "#FDD50F", "#0FB7FD", "#57C32D", "#E95420", "#C71585", "#FFC0CB", "#FFF", "#FFF", "#FFF", "#FFF", "#FFF", "#FFF","#FFF"],'?>
        },
        dynamic_options: {
          dynamic: true,
          update_interval: 100,
          fade_interval_duration: 50,
        },
      });
    </script>
    <script src="assets/js/nothingtoseehere.js"></script>
    <script src="assets/js/hammer.min.js"></script>
    <script src="assets/js/svg-pan-zoom.js"></script>
    <script src="assets/js/grid-kplace.js"></script>
    <script src="assets/js/color-selector.js"></script>
    <script type="module" src="assets/js/firebase.js"></script>
    <!-- ======================= -->
