<div class="menu-pyxelia">
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
      <div class="menu-pyxelia-colorsList">
        <!-- En utilisant l'objet Database fabriqué en PHP, je fabrique une liste des couleurs -->
        <?php foreach ($colors as $color) {?>
          <div id="<?=$color["color_id"]?>" class="menu-pyxelia-colorsList-button ColorButton <?=$color["color_name"]?>">
        </div>
        <?php }?>
      </div>
      <p class="menu-userConnected">Connecté en tant que
        <span class="menu-userName">****</span>
        <span class="menu-disconnect">(Déconnection)</span>
      </p>
      <p class="menu-version">
        Pyxelia by Koffi Cup - 1.0-alpha
      </p>
      <div id="firebaseui-auth-container">
        Vous devez être connecté pour dessiner !
      </div>
</div>