<div class="commands IsRemoved">
  <h1>Contrôles</h1>
  <ul class="commands-controls-desktop">
    <li class="commands-controls-control">
      <p>
        <span>Maintenez</span> </br> pour vous déplacer
      </p>
      <img src="assets/svg/mousemove.svg" alt="mouse moving icon" id="mouseMove">
    </li>
    <li class="commands-controls-control">
      <p>
        <span>Double-cliquez</span> </br> pour placer un pixel
      </p>
      <img src="assets/svg/doubleclick.svg" alt="mouse click icon" id="mouseClick">

    </li>
    <li class="commands-controls-control">
      <p>
        <span>Zoomez</span> </br> et dézoomez
      </p>
      <img src="assets/svg/mousescroll.svg" alt="mouse scroll icon" id="mouseScroll">
    </li>
  </ul>
  <ul class="commands-controls-mobile">
    <li class="commands-controls-control">
      <p>
        <span>Maintenez</span> </br> pour vous déplacer
      </p>
      <img id="handSwipe" src="assets/svg/swipe.svg" alt="swipe-control" width="60px">
    </li>
    <li class="commands-controls-control">
      <p>
        <span>Tapez deux fois</span> </br> pour placer un pixel
      </p>
      <img id="handTap" src="assets/svg/tap.svg" alt="tap-control" width="60px">
    </li>
    <li class="commands-controls-control">
      <p>
        <span>Zoomez</span> </br> et dézoomez
      </p>
      <img id="handPinch" src="assets/svg/pinch.svg" alt="pinch-control" width="60px">
    </li>
  </ul>
  <div class="commands-kcTimer">
    <p>La barre coloré indique le temps avant le prochain pixel !</p>
    <div class="kcTimer-exemple"></div>
  </div>

</div>
<div class="commands-filter IsRemoved"></div>
<script>
let buttonDisplay = document.querySelector(".buttonDisplayCommands");
let commands = document.querySelector(".commands");
let commandsFilter = document.querySelector(".commands-filter");
// Quand je clique sur l'un des élements de la partie contrôle, je fait apparaître ou disparaître la page.
buttonDisplay.addEventListener(
    "click",
    function () {
      commands.classList.toggle("IsRemoved");
      commandsFilter.classList.toggle("IsRemoved");
      }
  );
  commands.addEventListener(
    "click",
    function () {
      commands.classList.toggle("IsRemoved");
      commandsFilter.classList.toggle("IsRemoved");
      }
  );
  commandsFilter.addEventListener(
    "click",
    function () {
      commands.classList.toggle("IsRemoved");
      commandsFilter.classList.toggle("IsRemoved");
      }
  );
  </script>
