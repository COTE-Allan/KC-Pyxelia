<link rel="stylesheet" href="assets/styles/css/legals.css" crossorigin="anonymous" />
<!-- ================ -->
</head>
<body>


<div class="legals">
<h1>Mentions légales</h1>
<ul>
    <h2>Données personnelles</h2>
    <li>
        Lors de la création de votre compte, Pyxelia récupère seulement votre <b>pseudonyme</b>. Ce pseudonyme est utilisé pour l'affichage du classement sur la page de statistiques ainsi que dans le menu, quand vous êtes connectés. Toute les autres données de votre comptes, a savoir le nombre de pixels placés et le temps de puis le dernier pixel, sont des données internes à Pyxelia et ne seront jamais utilisés autrement que dans leurs buts originaux.
    </li>
    <h2>
        Utilisation de Pyxelia
    </h2>
    <li>
        Pyxelia est une plateforme communautaire, conçu dans l'unique but de dessiner à plusieurs. Toute utilisation dans un but commercial est formellement interdite. Toute publicité pouvant être affiché sur la grille et concernant un bien ou un service demandant de l'argent sera supprimé. Cela fonctionne aussi pour tout symbole offensant ou explicites.
        Nous nous réservons le droit de bannir les utilisateurs ne respectant pas les règles indiqués ci-dessous.
    </li>
</ul>
<p xmlns:cc="http://creativecommons.org/ns#" xmlns:dct="http://purl.org/dc/terms/"><a property="dct:title" rel="cc:attributionURL" href="http://pyxelia.kofficup.fr">Pyxelia</a> by <a rel="cc:attributionURL dct:creator" property="cc:attributionName" href="http://kofficup.fr">Allan COTE</a> is licensed under <a href="http://creativecommons.org/licenses/by-nc/4.0/?ref=chooser-v1" target="_blank" rel="license noopener noreferrer" style="display:inline-block;">CC BY-NC 4.0<img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/cc.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/by.svg?ref=chooser-v1"><img style="height:22px!important;margin-left:3px;vertical-align:text-bottom;" src="https://mirrors.creativecommons.org/presskit/icons/nc.svg?ref=chooser-v1"></a></p>
</div>


<div id="pixel_banner_div"></div>

    <!-- ================ -->
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
