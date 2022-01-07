<div class="RaCModal">
  <h1>Petit rappel...</h1>
  <ul class="RaCModal-rules">
    <li class="RaCModal-rules-rule">
      <h2>Régle n°1</h2>
      <p>Respectez le travail des autres !</p>
    </li>
    <li class="RaCModal-rules-rule">
      <h2>Régle n°2</h2>
      <p>Ne dessinez rien d'offensant.</p>
    </li>
  </ul>
  <ul class="RaCModal-controls">
    <h2>Contrôles</h2>
    <li class="RaCModal-controls-control">
      <p>Déplacez-vous sur le tableau comme sur une image !</p>
    </li>
    <li class="RaCModal-controls-control">
      <p>Appuyez deux fois rapidement sur un pixel pour le colorier !</p>
    </li>
  </ul>
  <button class="RaCModal-exit">D'accord !</button>
  <script>
    // Click sur un pixel
let buttonExitModal = document.querySelector(".RaCModal-exit");
let RaCModal = document.querySelector(".RaCModal");
// console.log(svg);
buttonExitModal.addEventListener(
    "click",
    function () {
      RaCModal.classList.add("IsRemoved");
      }
  );
  </script>
</div>
