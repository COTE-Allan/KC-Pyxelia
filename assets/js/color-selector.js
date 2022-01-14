// Click sur un pixel
let colors = document.querySelectorAll(".ColorButton");
let colorRGB = null;
// console.log(colors);
colors.forEach((color) => {
  color.addEventListener(
    "click",
    function () {
      var oldActive = document.querySelector(".colorActive");
      if (oldActive != null) {
        document.querySelector(".colorActive").classList.remove("colorActive");
      }
      color.classList.add("colorActive");
      colorRGB = window.getComputedStyle(color).backgroundColor;
      //   updatePixel(id, 1);
    },
    false
  );
});
