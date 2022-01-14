
    <!-- ================ -->
    <link rel="stylesheet" href="assets/styles/css/welcome.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Amatic+SC&display=swap"
      rel="stylesheet"
    />
    <!-- ================ -->
    </head>
    <body>
    <!-- ================ -->
    <div class="welcome">
      <header class="welcome-header">
        <a href="https://linktr.ee/Koffi_Cup" target="_blank">Tous mes liens</a>
      </header>
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
      <div class="welcome-mainContent">
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
        <p class="welcome-mainContent-intro">
          Salutations ! Je vois que vous avez atteint Pyxelia ! Cet endroit est
          un tableau blanc, littéralement. Alors c'est à vous, à vous tous, de
          peindre cette toile ! Dessinez ! Laissez parler votre créativité et
          créez à plusieurs !
        </p>
        <a
          href="index.php?pageIs=game"
          class="welcome-mainContent-enterGame"
          >Entrer en Pyxelia</a
        >
      </div>
    </div>
    <div id="pixel_banner_div"></div>
    <!-- ================ -->
    <script src="assets/js/pixel-banner.js"></script>
    <script>
      new PixelBanner({
        target: "#pixel_banner_div",
        pixel_options: {
          size: { width: 40, height: 40 },
          probability: {
            y_axis: "distance",
            x_axis: "always",
          },
          <?='color_pallete: ["#DC1818", "#FDD50F", "#0FB7FD", "#57C32D", "#E95420", "#C71585", "#FFC0CB", "#FFF"],'?>
        },
        dynamic_options: {
          dynamic: true,
          update_interval: 100,
          fade_interval_duration: 50,
        },
      });
    </script>
    <!-- ================ -->
