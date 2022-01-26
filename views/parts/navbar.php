<!-- Navbar avec les bouton Share, Commands & Links -->
<nav class="navbar">
  <a class="buttonDisplayCommands buttonNav">
    <img src="assets/svg/controller.svg" alt="liens" />
    Contrôles
  </a>
  <a class="buttonNav" href="https://linktr.ee/Koffi_Cup" target="_blank">
    <img src="assets/svg/link.svg" alt="liens" />
    Mes liens
  </a>
  <a class="buttonNav buttonDisplayLeaderboard" href="index.php?pageIs=stats" target="_blank">
    <img src="assets/svg/leaderboard.svg" alt="leaderboard" />
    Stats
  </a>
  <!-- Désactivé pour soulager Firebase -->
  <!-- <a class="buttonNav downloadGridButton">
    <img src="assets/svg/screenshot.svg" alt="prendre un screenshot" />
    Screenshot
  </a> -->
  <a class="buttonNav buttonDisplayShare">
      <img src="assets/svg/share.svg" alt="liens" />
      Partager
  </a>
  <div class="share-list">
      <a
        href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fpyxelia.kofficup.fr&text=Rejoignez-moi%20sur%20Pyxelia:%20http%3A%2F%2Fpyxelia.kofficup.fr&via=koffi_cup"
        target="_blank"
        title="Tweet"
      >
        <img src="assets/svg/twitter.svg" alt="logoTwitter" />
      </a>
      <a
        href="http://www.linkedin.com/shareArticle?mini=true&url=http%3A%2F%2Fpyxelia.kofficup.fr&title=Rejoignez-moi%20sur%20Pyxelia&summary=Pyxelia%20est%20un%20site%20de%20pixel-art%20en%20multijoueur%20d%C3%A9velopp%C3%A9%20par%20Allan%20%22Cielesis%22%20COTE%20et%20inspir%C3%A9%20par%20r%2FPlace%20!&source=http%3A%2F%2Fpyxelia.kofficup.fr"
        target="_blank"
        title="LinkedIn"
      >
        <img src="assets/svg/linkedin.svg" alt="logoLinkedin" />
      </a>
      <a
        href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fpyxelia.kofficup.fr&quote=Rejoignez-moi%20sur%20Pyxelia"
        title="Facebook"
        target="_blank"
      >
        <img src="assets/svg/facebook.svg" alt="logoFacebook" />
      </a>
  </div>
</nav>

<script>
  // Cliquer sur le bouton share affiche les réseaux possibles
  let shareList = document.querySelector(".share-list");
  let buttonDisplayShare = document.querySelector(".buttonDisplayShare");
  buttonDisplayShare.addEventListener("click", function () {
    shareList.classList.toggle("shareActive");
    buttonDisplayShare.classList.toggle("shareButtonActive")
  });

</script>
