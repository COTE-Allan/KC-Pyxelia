// Import the functions you need from the SDKs you need
import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js";
// import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.1/firebase-analytics.js";
import {
  getDatabase,
  get,
  ref,
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
// const analytics = getAnalytics(app);
const database = getDatabase(app);
const dbRef = ref(getDatabase());
// ===========================================================
// Premier test, lecture en une fois d'une valeur de la DB

// get(child(dbRef, `1/name`))
//   .then((snapshot) => {
//     if (snapshot.exists()) {
//       console.log(snapshot.val());
//     } else {
//       console.log("No data available");
//     }
//   })
//   .catch((error) => {
//     console.error(error);
//   });

// ===========================================================
// Deuxième étape : Console log a chaque edit DANS la db [Temps réel]

// S'active sur 1/name et tout ses enfants.
onValue(child(dbRef, `1/name`), (snapshot) => {
  if (snapshot.exists()) {
    console.log(snapshot.val());
  } else {
    console.log("No data available");
  }
});
