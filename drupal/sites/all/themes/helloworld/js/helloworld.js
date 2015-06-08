/**
 * Created by danlinn on 6/7/15.
 */
(function($){
  Drupal.behaviors.scrollHeader = {
    attach: function(context, settings) {
      $('body').once(function(){
        var s = skrollr.init();
      });
      blinkyTimer = setTimeout(blinky(),8000);
    }
  };
  function blinky() {
    console.log('blinky');
    $('.punctuation').text(':)');
    //blink1 = setTimeout(function(){
    //  console.log('1');
    //  $('.punctuation').text(';)');
    //},200);
    //blink2 = setTimeout(function(){
    //  $('.punctuation').text(':)');
    //  console.log('2');
    //},700);
    blink3 = setTimeout(function(){
      $('.punctuation').text(';)');
      console.log('3');
      //clearTimeout(blink1);
      //clearTimeout(blink2);
      clearTimeout(blinkyTimer);
      blinkyTimer = setTimeout(blinky,5000);
      clearTimeout(blink3);
    },300);
  }
})(jQuery);
