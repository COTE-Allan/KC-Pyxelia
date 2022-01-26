<?php
setlocale(LC_TIME, 'fr_FR');
date_default_timezone_set('Europe/Paris');
$date = utf8_encode(strftime('le %d/%m/%Y, %H:%M'));
?>

<link rel="stylesheet" href="assets/styles/css/stats.css" crossorigin="anonymous" />
<!-- ================ -->
<style>
    <?php foreach ($colors as $color) {echo "." . $color["color_name"] . "{ background-color: " . $color["color_hexa"] . "} ";}?>
</style>
<!-- ================ -->
</head>
<body>
<!-- ======================= -->
<svg
              id="logo-pyxelia"
              xmlns="http://www.w3.org/2000/svg"
              width="960"
              height="222"
              viewBox="0 0 960 222"
            >
              <text
                id="logo-brand"
                transform="translate(0 127)"
                fill="#fff"
                font-size="127"
                font-family="PressStart2P, 'Press Start \32 P'"
              >
                <tspan x="0" y="0">PYXELIA</tspan>
              </text>
              <text
                id="logo-author"
                transform="translate(610 201)"
                fill="#fff"
                font-size="85"
                font-family="AmaticSC-Bold, Amatic SC"
                font-weight="700"
              >
                <tspan x="0" y="0">Par Allan COTE</tspan>
              </text>
</svg>
<h1>Statistiques</h1>
<p>Dernière mise à jour <?=$date?></p>
<div class="stats">
    <hr>
    <!-- Leaderboard -->
    <?php require_once "parts/leaderboard.php"?>
    <!-- ============================= -->
    <hr>
    <?php
$colorsPodium = array();
foreach ($colors as $color) {
    $colorsPodium[$color["color_name"]] = $color["used_amount"];
}
arsort($colorsPodium);
?>
    <div class="color-podium">
        <h2>Couleurs les plus utilisés</h2>
        <ul class="color-podium-list">
        <?php
$i = 0;
foreach ($colorsPodium as $cName => $cAmount) {
    if ($i <= 8) {
        $c = $i + 1;
        ?>
                <li class="color-podium-element <?=$cName?>">
                    <span class="color-podium-element-position"><?=$c?></span>
                    <?=$cAmount?> pixels

                </li>
                <?php
$i++;
    }
}

?>
    </ul>
    </div>
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
