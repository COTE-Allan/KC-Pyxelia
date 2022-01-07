// Click sur un pixel
let colors = document.querySelectorAll(".menu-colorsList-button");
colors.forEach((color) => {
  color.addEventListener(
    "click",
    function (e) {
      var oldActive = document.querySelector(".colorActive");
      if (oldActive != null) {
        document.querySelector(".colorActive").classList.remove("colorActive");
      }
      color.classList.add("colorActive");
      //   updatePixel(id, 1);
    },
    false
  );
});
