// _____________________________________________
// Importation des fonctions Firebase requises.
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.2/firebase-app.js";
import {
  getDatabase,
  get,
  ref,
  set,
  update,
  child,
  onValue,
} from "https://www.gstatic.com/firebasejs/9.6.2/firebase-database.js";

import {
  getAuth,
  signOut,
  setPersistence,
  browserSessionPersistence,
} from "https://www.gstatic.com/firebasejs/9.6.2/firebase-auth.js";

// _____________________________________________
// Configuration de la DB
const firebaseConfig = {
  apiKey: "AIzaSyDd3yvb7hR4CV2UITisNBRXDwFRIoKyK2E",
  authDomain: "koffi-place.firebaseapp.com",
  projectId: "koffi-place",
  storageBucket: "koffi-place.appspot.com",
  messagingSenderId: "695218264483",
  appId: "1:695218264483:web:83874a98c08e97d29ba216",
  measurementId: "G-P5X7R7J20S",
  databaseURL:
    "https://koffi-place-default-rtdb.europe-west1.firebasedatabase.app",
};
// _____________________________________________
// Initilisation de la DB Pyxelia.
let userUID,
  ui = null;
let flagLogged,
  flagError = false;
let flagCooldown = false;
let loadingText;
const app = initializeApp(firebaseConfig);
const db = getDatabase();
const dbRef = ref(db);
const auth = getAuth(app);

// ██████ ██████  ██    ██ ██████
// ██      ██   ██ ██    ██ ██   ██
// ██      ██████  ██    ██ ██   ██
// ██      ██   ██ ██    ██ ██   ██
//  ██████ ██   ██  ██████  ██████

// ===========================================================
// ===========================================================
// ===========================================================
// _____________________________________________
// Obtenir les couleurs (pour les appliquer dans le pixel choisi)
let colors = [];
get(child(dbRef, `colors`))
  .then((snapshot) => {
    if (snapshot.exists()) {
      // console.log(snapshot.val());
      colors = snapshot.val();
    } else {
      console.log("No data available");
    }
  })
  .catch((error) => {
    // console.error(error);
    loadingText =
      "Mince ! Il y a un problème ! Essaie d'actualiser la page et si le problème persiste, contacte-moi ! ";
    document.querySelector(".loading-screen-message").innerHTML = loadingText;
    flagError = true;
  });

// _____________________________________________

// Obtenir la grid une première fois.
getGrid();

// _____________________________________________
// Mettre a jour la grid en temps réel
// S'active sur grid et tout ses enfants dès qu'un changement dans la section grid est détecté.
onValue(child(dbRef, `grid`), (snapshot) => {
  if (snapshot.exists() && colors != undefined) {
    getGrid();
    // console.log("edit !");
  }
});

// _____________________________________________
// Obtenir la grid DB (un array représantant la grid)
function getGrid() {
  let grid = "blankgrid";
  // console.log(grid);
  get(child(dbRef, `grid`))
    .then((snapshot) => {
      if (snapshot.exists()) {
        // console.log(snapshot.val());
        grid = snapshot.val();
        updateGrid(grid);
      } else {
        console.log("No data available");
      }
    })
    .catch((error) => {
      console.error(error);
      loadingText =
        "Mince ! Il y a un problème ! Essaie d'actualiser la page et si le problème persiste, contacte-moi ! ";
      document.querySelector(".loading-screen-message").innerHTML = loadingText;
      flagError = true;
    });
}
// _____________________________________________
// Mettre a jour la grid physique (dans le site) en utilisant la grid DB
function updateGrid(grid) {
  loadingText = "Création du tableau...";
  document.querySelector(".loading-screen-message").innerHTML = loadingText;
  grid.forEach((pixel) => {
    let pixel_id = pixel.pixel_id;
    let color_id = pixel.color_id;
    let target = document.getElementById(pixel_id);
    colors.every((color) => {
      if (color.color_id == color_id) {
        target.removeAttribute("class");
        target.classList.add("pixel", color.color_name);
        return false;
      }
      return true;
    });
  });
  // Si la page vient juste de charger, je démarre l'ui après avoir terminé le tableau.
  if (ui == null && flagError == false) {
    ui = new firebaseui.auth.AuthUI(auth);
    googleButtonCreate();
    document.querySelector(".loading-screen").classList.add("loading-complete");
    setTimeout(() => {
      document.querySelector(".loading-screen").classList.add("loading-gone");
    }, 700);
  }
}

// _____________________________________________
// Changer un pixel et les stats du user après un click
function updateDB(pixel_id, color_id) {
  let updates = {};
  let pixel_amount = 0;
  let cooldown = 4;
  let actualDate = Math.floor(Date.now() / 1000);
  get(child(dbRef, "users/" + userUID + "/")).then((snapshot) => {
    let result = snapshot.val();
    // Je vérifie si le dernier pixel du joueur à 2 minutes d'ancienneté ou plus.
    if (actualDate - result["timestamp"] >= cooldown && flagCooldown == false) {
      pixel_amount = result["pixels_placed"] + 1;
      document.querySelector(".menu-pyxelia-pixelAmount").innerHTML =
        pixel_amount;
      // Incrémente le nombre de pixel placés par l'utilisateur.
      updates["/users/" + userUID + "/pixels_placed"] = pixel_amount;
      update(ref(db), updates);
      // Actualise le timestamp dans le compte de l'utilisateur.
      updates["/users/" + userUID + "/timestamp"] = actualDate;
      update(ref(db), updates);
      // Met a jour la grille.
      updates["/grid/" + pixel_id + "/color_id"] = color_id;
      update(ref(db), updates);
      // J'ai placé mon pixel, je suis alerté.
      alertify.notify("Votre pixel a correctement été placé.", "success", 5);
      let kcTimer = document.getElementById("kcTimer");
      kcTimer.classList.add("kcTimerOn");
      flagCooldown = true;
      setTimeout(() => {
        kcTimer.classList.remove("kcTimerOn");
        flagCooldown = false;
      }, cooldown * 1000);
    } else {
      let timeLeft = cooldown - (actualDate - result["timestamp"]);
      // Notification si je ne peut placer
      alertify.notify(
        "Prochain pixel dans " + timeLeft + " secondes !",
        "warning",
        5
      );
    }
  });
}

// ██████  ██████  ███    ██ ████████ ██████   ██████  ██      ███████ ███████
// ██      ██    ██ ████   ██    ██    ██   ██ ██    ██ ██      ██      ██
// ██      ██    ██ ██ ██  ██    ██    ██████  ██    ██ ██      █████   ███████
// ██      ██    ██ ██  ██ ██    ██    ██   ██ ██    ██ ██      ██           ██
//  ██████  ██████  ██   ████    ██    ██   ██  ██████  ███████ ███████ ███████

// ==========================================
// ==========================================
// ==========================================
// _____________________________________________
// controles du pixel
let pixels = document.querySelectorAll("rect");
let pixelDefaultRGB = null;
// console.log(svg);
pixels.forEach((pixel) => {
  if (window.screen.width > 900) {
    // Hover le pixel, j'indique quel couleur sera placé
    pixel.addEventListener("mouseenter", function (e) {
      pixelDefaultRGB = window.getComputedStyle(e.target).backgroundColor;
      if (colorRGB != null) {
        e.target.style.fill = colorRGB;
        e.target.style.opacity = 0.7;
      } else {
        e.target.style.fill = "#000";
        e.target.style.opacity = 0.1;
      }
    });
    // Je quitte le pixel, je repasse sur la couleur de base.
    pixel.addEventListener("mouseleave", function (e) {
      e.target.style.fill = null;
      e.target.style.opacity = 1;
    });
  }
  // Je double clique, je place un pixel si je suis connecté et que le timestamp me l'autorise (120 seconde entre chaque pixel.)
  pixel.addEventListener(
    "dblclick",
    function (e) {
      var id = e.target.id - 1;
      var colorActive = document.querySelector(".colorActive");
      if (flagLogged == true) {
        if (colorActive != null) {
          // console.log(id);
          // console.log(colorActive);
          updateDB(id, colorActive.id);
          pixelDefaultRGB = null;
        } else {
          alertify.notify(
            "Vous n'avez selectionné aucune couleur !",
            "error",
            5
          );
        }
      } else {
        alertify.notify(
          "Vous devez être connecté pour utiliser Pyxelia !",
          "error",
          5
        );
      }
    },
    false
  );
});

// ██████  ██████  ███    ██ ███    ██ ███████ ██   ██ ██  ██████  ███    ██
// ██      ██    ██ ████   ██ ████   ██ ██       ██ ██  ██ ██    ██ ████   ██
// ██      ██    ██ ██ ██  ██ ██ ██  ██ █████     ███   ██ ██    ██ ██ ██  ██
// ██      ██    ██ ██  ██ ██ ██  ██ ██ ██       ██ ██  ██ ██    ██ ██  ██ ██
//  ██████  ██████  ██   ████ ██   ████ ███████ ██   ██ ██  ██████  ██   ████

// ==========================================
// ==========================================
// ==========================================
// _____________________________________________
// Déconnection en quittant la page
setPersistence(auth, browserSessionPersistence).then(() => {});
// _____________________________________________
// Création du bouton de connexion et de la popup
// L'error vX vient de là !!!!
function googleButtonCreate() {
  ui.start("#firebaseui-auth-container", {
    signInOptions: [
      // List of OAuth providers supported.
      firebase.auth.GoogleAuthProvider.PROVIDER_ID,
      firebase.auth.EmailAuthProvider.PROVIDER_ID,
    ],
    signInFlow: "popup",
    callbacks: {
      signInSuccessWithAuthResult: function (authResult) {
        // la variable user contient tout plein d'info utiles sur le user connecté.
        var user = authResult.user;
        // Ceci se déclenche si l'utilisateur vient de créer son compte.
        let IsNewUser = authResult.additionalUserInfo.isNewUser;
        if (IsNewUser == true) {
          set(ref(db, "users/" + user.uid), {
            timestamp: 0,
            pixels_placed: 0,
            user_name: user.displayName,
          });
          let commands = document.querySelector(".commands");
          let commandsFilter = document.querySelector(".commands-filter");
          commandsFilter.classList.remove("IsRemoved");
          commands.classList.remove("IsRemoved");
          // console.log(user);
        }
        return false;
      },
    },
  });
}

// _____________________________________________
// Déclenché lors de la connexion (ou de l'actualisation de la page)
getAuth(app).onAuthStateChanged(function (user) {
  if (user) {
    // Do something when online
    // console.log(user.uid);
    userUID = user.uid;
    document.querySelector(".menu-userName").innerHTML = user.displayName;
    document.querySelector("body").classList.add("IsConnected");
    alertify.notify(
      "Bonjour " + user.displayName + ", Amusez-vous bien sur Pyxelia !",
      "success",
      5
    );
    flagLogged = true;
    get(child(dbRef, "users/" + userUID + "/")).then((snapshot) => {
      let result = snapshot.val();
      let pixel_amount = result["pixels_placed"];
      document.querySelector(".menu-pyxelia-pixelAmount").innerHTML =
        pixel_amount;
    });
  }
});

// _____________________________________________
// Déconnexion si l'on clique sur le bouton de déconnexion

let disconnectButton = document.querySelector(".menu-disconnect");
disconnectButton.addEventListener("click", function (e) {
  signOut(auth).then(() => {
    document.querySelector("body").classList.remove("IsConnected");
    let activeColor = document.querySelector(".colorActive");
    if (activeColor != null) {
      activeColor.classList.remove("colorActive");
    }
    colorRGB = null;
    googleButtonCreate();
    flagLogged = false;
    alertify.notify(
      "Vous avez correctement été deconnecté, à bientôt !",
      "success",
      5
    );
  });
});
