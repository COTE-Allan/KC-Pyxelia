// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js";
// import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-analytics.js";
import {
  getDatabase,
  get,
  ref,
  update,
  child,
  onValue,
} from "https://www.gstatic.com/firebasejs/9.6.1/firebase-database.js";

// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
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
// ===========================================================
// Initialize Firebase
const app = initializeApp(firebaseConfig);
const dbRef = ref(getDatabase());
// const analytics = getAnalytics(app);
// const database = getDatabase(app);
// ===========================================================
// Obtenir les couleurs
let colors = [];
get(child(dbRef, `1/data`))
  .then((snapshot) => {
    if (snapshot.exists()) {
      // console.log(snapshot.val());
      colors = snapshot.val();
    } else {
      console.log("No data available");
    }
  })
  .catch((error) => {
    console.error(error);
  });

// Obtenir la grid
getGrid();

// ===========================================================
// Mettre a jour la grid en temps réel
// S'active sur 2/data et tout ses enfants.
onValue(child(dbRef, `2/data`), (snapshot) => {
  if (snapshot.exists() && colors != undefined) {
    getGrid();
    // console.log("edit !");
  } else {
    console.log("No data available");
  }
});

// ===========================================================
// Obtenir la grid
function getGrid() {
  let grid = "blank grid";
  // console.log(grid);
  get(child(dbRef, `2/data`))
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
    });
}

// Mettre a jour la grid
function updateGrid(grid) {
  // console.log(grid);
  grid.forEach((pixel) => {
    let pixel_id = pixel.pixel_id;
    let color_id = pixel.color_id;
    let target = document.getElementById(pixel_id);
    // console.log(target);
    // console.log(pixel_id);
    // console.log(color_id);
    // target.classList.add("red");
    colors.every((color) => {
      if (color.color_id == color_id) {
        target.removeAttribute("class");
        target.classList.add("pixel", color.color_name);
        return false;
      }
      return true;
    });
  });
}

// Changer un pixel après un click
function updatePixel(pixel_id, color_id) {
  const db = getDatabase();
  const updates = {};
  updates["/2/data/" + pixel_id + "/color_id"] = color_id;
  update(ref(db), updates).then(() => {
    console.log("success");
  });
}

// Click sur un pixel
let pixels = document.querySelectorAll("rect");
// console.log(svg);
pixels.forEach((pixel) => {
  pixel.addEventListener(
    "dblclick",
    function (e) {
      var id = e.target.id - 1;
      var colorActive = document.querySelector(".colorActive");
      if (colorActive != null) {
        // console.log(id);
        console.log(colorActive);
        updatePixel(id, colorActive.id);
      }
    },
    false
  );
});
