document.createSvg = function (tagName) {
  var svgNS = "http://www.w3.org/2000/svg";
  return this.createElementNS(svgNS, tagName);
};

var color = document.getElementsByClassName("menu-colorPalette-element");
//   Génération de la grille
var grid = function (numberPerSide, size, pixelsPerSide) {
  var svg = document.createSvg("svg");
  svg.setAttribute("width", pixelsPerSide);
  svg.setAttribute("height", pixelsPerSide);
  svg.setAttribute(
    "viewBox",
    [0, 0, numberPerSide * size, numberPerSide * size].join(" ")
  );

  for (var i = 0; i < numberPerSide; i++) {
    for (var j = 0; j < numberPerSide; j++) {
      var g = document.createSvg("g");
      g.setAttribute(
        "transform",
        ["translate(", i * size, ",", j * size, ")"].join("")
      );

      var number = numberPerSide * i + j;
      var box = document.createSvg("rect");
      box.setAttribute("width", size);
      box.setAttribute("height", size);
      box.setAttribute("id", "pixel number-" + number);
      g.appendChild(box);
      svg.appendChild(g);
    }
  }

  // Click sur une case
  svg.addEventListener(
    "click",
    function (e) {
      var id = e.target.id;
      // if (id) alert(id.substring(1));
      var color = document.querySelector(".active");
      e.target.classList.add(color.className.split(" ")[1]);
    },
    false
  );
  return svg;
};

//  Creer la grille
var container = document.getElementById("container");
container.appendChild(grid(10, 30, 1000));
var svgElement = document.querySelector("svg");
var panZoomTiger = svgPanZoom(svgElement);
