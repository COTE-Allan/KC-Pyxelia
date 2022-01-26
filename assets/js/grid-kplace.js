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
  svg.setAttribute("id", "gridPyxelia");

  for (var i = 0; i < numberPerSide; i++) {
    for (var j = 0; j < numberPerSide; j++) {
      var number = numberPerSide * i + j + 1;
      var box = document.createSvg("rect");
      box.setAttribute(
        "transform",
        ["translate(", i * size, ",", j * size, ")"].join("")
      );
      box.setAttribute("width", size);
      box.setAttribute("height", size);
      box.setAttribute("id", number);
      box.setAttribute("class", "pixel");
      svg.appendChild(box);
    }
  }

  return svg;
};

//  Creer la grille
var container = document.getElementById("container");
container.appendChild(grid(65, 65, 750));
var svgElement = document.querySelector("#gridPyxelia");
var panZoomTiger = svgPanZoom(svgElement, {
  dblClickZoomEnabled: false,
  // fit: false,
  // contain: false,
  center: false,
  // Le customEventsHandler ici présent ajoute des fonctionnalités de Hammer.js pour permettre les contrôles mobile, avec le pinch en autre.
  customEventsHandler: {
    haltEventListeners: [
      "touchstart",
      "touchend",
      "touchmove",
      "touchleave",
      "touchcancel",
    ],
    init: function (options) {
      var instance = options.instance,
        initialScale = 1,
        pannedX = 0,
        pannedY = 0;

      // Init Hammer
      // Listen only for pointer and touch events
      this.hammer = Hammer(options.svgElement, {
        inputClass: Hammer.SUPPORT_POINTER_EVENTS
          ? Hammer.PointerEventInput
          : Hammer.TouchInput,
      });

      // Enable pinch
      this.hammer.get("pinch").set({ enable: true });

      // Handle pan
      this.hammer.on("panstart panmove", function (ev) {
        // On pan start reset panned variables
        if (ev.type === "panstart") {
          pannedX = 0;
          pannedY = 0;
        }

        // Pan only the difference
        instance.panBy({ x: ev.deltaX - pannedX, y: ev.deltaY - pannedY });
        pannedX = ev.deltaX;
        pannedY = ev.deltaY;
      });

      // Handle pinch
      this.hammer.on("pinchstart pinchmove", function (ev) {
        // On pinch start remember initial zoom
        if (ev.type === "pinchstart") {
          initialScale = instance.getZoom();
          instance.zoomAtPoint(initialScale * ev.scale, {
            x: ev.center.x,
            y: ev.center.y,
          });
        }

        instance.zoomAtPoint(initialScale * ev.scale, {
          x: ev.center.x,
          y: ev.center.y,
        });
      });

      // Prevent moving the page on some devices when panning over SVG
      options.svgElement.addEventListener("touchmove", function (e) {
        e.preventDefault();
      });
    },

    destroy: function () {
      this.hammer.destroy();
    },
  },
});
