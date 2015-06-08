/**
 * Created by danlinn on 6/7/15.
 */
(function($){
  Drupal.behaviors.scrollHeader = {
    attach: function(context, settings) {
      $('body').once(function(){
        if($(window).width() > 600) {
          var s = skrollr.init();
        }
      });
      blinkyTimer = setTimeout(blinky(),8000);
    }
  };
  function blinky() {
    console.log('blinky');
    $('.punctuation').text(':)');
    blink = setTimeout(function(){
      $('.punctuation').text(';)');
      clearTimeout(blinkyTimer);
      blinkyTimer = setTimeout(blinky,5000);
      clearTimeout(blink);
    },300);
  }
})(jQuery);
