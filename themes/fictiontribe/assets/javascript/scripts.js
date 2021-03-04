$(document).ready(function(){


   ;(function() {
        // Initialize
        var hqyLazy = new HqyLazyload();

        // $('.parallax').paroller();
    })();

             function paroller(){
                        // initialize paroller.js and set attributes for selected elements
                    $(".parallax, [data-paroller-factor]").paroller({
                        factor: -0.3,            // multiplier for scrolling speed and offset
                        factorXs: 0.1,           // multiplier for scrolling speed and offset
                        type: 'foreground',     // background, foreground
                        direction: 'vertical', // vertical, horizontal
                        transition: 'transform 0 linear' // CSS transition
                    }); 
                }
                paroller();
              // }, 50);
// function parallaxBG() {
//   // Populate images from data attributes.
//   var scrolled = $(window).scrollTop()
//   $('.parallax').each(function(index) {
//       var imageSrc = $(this).data('image-src')
//       var imageHeight = $(this).data('height')
//       $(this).css('background-image','url(' + imageSrc + ')')
//       $(this).css('height', imageHeight)

//       // Adjust the background position.
//       var initY = $(this).offset().top
//       var height = $(this).height()
//       var diff = scrolled - initY
//       var ratio = Math.round((diff / height) * 100)
//       $(this).css('background-position','center ' + parseInt(-(ratio * -1.5)) + 'px')
//   })

//   // Attach scroll event to window. Calculate the scroll ratio of each element
//   // and change the image position with that ratio.
//   // https://codepen.io/lemagus/pen/RWxEYz
//   $(window).scroll(function() {
//     var scrolled = $(window).scrollTop()
//     $('.parallax').each(function(index, element) {
//       var initY = $(this).offset().top
//       var height = $(this).height()
//       var endY  = initY + $(this).height()

//       // Check if the element is in the viewport.
//       var visible = isInViewport(this)
//       if(visible) {
//         var diff = scrolled - initY
//         var ratio = Math.round((diff / height) * 100)
//         $(this).css('background-position','center ' + parseInt(-(ratio * -1.5)) + 'px')
//       }
//     })
//   })

// }

// parallaxBG();
// $(window).scroll(function() {

//    var scroll = $(window).scrollTop();

//    $('.layer').each(function () {

//      var layer = $(this);

//      var dataSpeed = layer.data('parallax-speed');

//      var offsetY = -(scroll * dataSpeed);

//      var translate = 'translate3d(0, ' + offsetY + 'px, 0)';

//      layer.css('-webkit-transform', translate);

//      layer.css('-moz-transform', translate);

//      layer.css('-ms-transform', translate);

//      layer.css('-o-transform', translate);

//      layer.css('transform', translate);

//    });

//  });

 var domain = window.location.origin; 
  console.log(domain);
  const options = [

    { 
      from: '(.*)',
      to: '(.*)',
      in: function(next) {




        var tl = new TimelineMax({onComplete: next});
      //   document.querySelector('#swup').style.opacity = 0;
    
          tl.fromTo(document.querySelector('#swup'), .75 ,{opacity: 0}, {opacity: 1}, 0);

      },

      out: (next) => {

        var tl = new TimelineMax({onComplete: next});
  
              tl.fromTo(document.querySelector('#swup'), .75 ,{opacity: 1}, {opacity: 0}, 0);
        
      }
    }

  ];

  
  const swup = new Swup({
    plugins: [
          new SwupJsPlugin(options),
      //     new SwupFormsPlugin({formSelector: 'form[data-swup-form]'}), 
      //     new SwupBodyClassPlugin(), 
      //     // new SwupGaPlugin(),
      //     new SwupScriptsPlugin({head: false}),
          new SwupScrollPlugin({
          doScrollingRightAway: false,
          animateScroll: false,
      }),
    ]
  });


  document.addEventListener('swup:contentReplaced', event => {
  	console.log('contentReplaced')
  	// parallaxBG();
  	$('body').css('background-color', 'white');
    var hqyLazy = new HqyLazyload();
     paroller();
  })







})

// Check if the element is in the viewport.
// http://www.hnldesign.nl/work/code/check-if-element-is-visible/
function isInViewport(node) {
  // Am I visible? Height and Width are not explicitly necessary in visibility
  // detection, the bottom, right, top and left are the essential checks. If an
  // image is 0x0, it is technically not visible, so it should not be marked as
  // such. That is why either width or height have to be > 0.
  var rect = node.getBoundingClientRect()
  return (
    (rect.height > 0 || rect.width > 0) &&
    rect.bottom >= 0 &&
    rect.right >= 0 &&
    rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.left <= (window.innerWidth || document.documentElement.clientWidth)
  )
}
