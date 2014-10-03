// Initialize Skrollr (parallex scrolling)
var s = skrollr.init({
  forceHeight: false
});


/*
 * Lazy Line Painter - Path Object
 * Generated using 'SVG to Lazy Line Converter'
 *
 * http://lazylinepainter.info
 * Copyright 2013, Cam O'Connell
 *
 */

var pathObj = {
  "logo-path-1": {
    "strokepath": [
      {
        "path": "M 205,144. L 205,2 139.1,2 139.1,61.5 67.7,61.5 67.7,2 2,2  ",
        "duration": 1500
      },
    ],
    "dimensions": {
      "width": 207,
      "height": 213
    }
  },
  "logo-path-2": {
    "strokepath": [
      {
        "path": "M 2,1 L 2,209 32,209 68,191.1 68,119 139,119 139,167 150,167 204.8,142.8 ",
        "duration": 1500
      },

    ],
    "dimensions": {
      "width": 207,
      "height": 213
    }
  }
};

function drawLogo() {
  $('#logo-path-1').lazylinepainter({
    "svgData": pathObj,
    "strokeWidth": 2,
    "strokeColor": "#DBE130"
  }).lazylinepainter('paint');

  $('#logo-path-2').lazylinepainter({
    "svgData": pathObj,
    "strokeWidth": 2,
    "strokeColor": "#DBE130"
  }).lazylinepainter('paint');
  setTimeout(function() {
    $('.logo-svg').fadeOut(1000);
  }, 2000);
}