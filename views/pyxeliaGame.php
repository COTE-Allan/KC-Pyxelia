    <link rel="stylesheet" href="assets/styles/scss/game.css" />
    <!-- Générateur de couleurs depuis la DB -->
    <style>
    <?php foreach ($colors as $color) {echo "." . $color["color_name"] . "{ fill: " . $color["color_hexa"] . "} ";}?>
    <?php foreach ($colors as $color) {echo "." . $color["color_name"] . "{ background-color: " . $color["color_hexa"] . "} ";}?>
    </style>
    <!-- ================ -->
    </head>
    <body>
      <?php require_once "rulesAndcontrols.php"?>
    <!-- ======================= -->
    <!-- Emplacement du tableau ici -->
    <div id="container"></div>
    <!-- ======================= -->
    <div class="menu">
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
      <div class="menu-colorsList">
      <?php foreach ($colors as $color) {?>
        <div id="<?=$color["color_id"]?>" class="menu-colorsList-button <?=$color["color_name"]?>">
      </div>
<?php }?>
      </div>
    </div>
    <!-- ======================= -->
    <script src="assets/js/svg-pan-zoom.js"></script>
    <script src="assets/js/hammer.min.js"></script>
    <script src="assets/js/color-selector.js"></script>
    <script type="module" src="assets/js/firebase.js"></script>
    <script src="assets/js/grid-kplace.js"></script>
    <!-- ======================= -->
