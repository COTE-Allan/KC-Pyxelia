// Fonction désactivé pour soulager Firebase
// function exportAsPng() {
//   document
//     .querySelector(".downloadGridButton")
//     .addEventListener("click", function () {
//       panZoomTiger.pan({ x: 0, y: 0 });
//       panZoomTiger.zoomAtPoint(1.8, { x: 0, y: 0 });
//       let target = document.getElementById("viewportPyxelia");
//       // document
//       //   .querySelector(".loading-screen")
//       //   .classList.remove("loading-gone");
//       // document
//       //   .querySelector(".loading-screen")
//       //   .classList.remove("loading-complete");
//       // loadingText = "Exportation du tableau en cours...";
//       document.querySelector(".loading-screen-message").innerHTML = loadingText;
//       setTimeout(() => {
//         saveSvgAsPng(target, "Pyxelia-" + Date.now() + ".png");
//         panZoomTiger.zoomAtPoint(0.5, { x: 0, y: 0 });
//         document
//           .querySelector(".loading-screen")
//           .classList.add("loading-complete");
//         setTimeout(() => {
//           document
//             .querySelector(".loading-screen")
//             .classList.add("loading-gone");
//         }, 700);
//       }, 2000);
//     });
// }


    <!-- Plugin DOM TO IMAGE -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/save-svg-as-png/1.4.17/saveSvgAsPng.js" integrity="sha512-eROF+rLuEUiVuYGmMqhsT8/OwSLcVw5RLjhhJrWLTznvDcwG0WtXrV6w7Ko4Nw7LyWzDZOGlQjfzQd7kUYLQcQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>