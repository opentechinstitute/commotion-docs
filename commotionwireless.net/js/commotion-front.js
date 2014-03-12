$( document ).ready(function() {
  console.log('doc ready');

  // front page banner definition
  $('#banner-slide').bjqs({
    animtype      : 'slide',
    animduration : 450, // how fast the animation are
    animspeed : 4000, // the delay between each slide
    height        : 150,
    width         : 800,
    responsive    : true,
    randomstart   : false,
    centercontrols: false,
    showmarkers : false,
    hoverpause : true,
    nexttext : '>', // Text for 'next' button (can use HTML)
    prevtext : '<', // Text for 'previous' button (can use HTML)
  });
});

 // end docready
