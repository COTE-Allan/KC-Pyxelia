
<!-- ================ -->
<link rel="stylesheet" href="assets/styles/css/error.css" />
<!-- ================ -->
</head>
<body>
<!-- ================ -->

<div class="error">
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
    <h1 class="error-number"><?=$error_number?></h1>
    <p class="error-message"><?=$error_message?></p>
    <p class="error-help">Je pense que tu devrait </br> <a href="index.php?pageIs=game">Revenir sur Pyxelia.</a></p>
</div>
