/**

 * @file
 * Bluez Slider Javascript.
 *
 */
(function ($) {
  Drupal.behaviors.slider = {
    attach: function (context, settings) {


      $(window).load(function() {

        $('#slider').nivoSlider({
          effect: settings.slider_setting.effect,                      // Specify sets like: 'fold,fade,sliceDown'
          slices: settings.slider_setting.slices,                      // For slice animations
          boxCols: settings.slider_setting.boxCols,                    // For box animations
          boxRows: settings.slider_setting.boxRows,                    // For box animations
          animSpeed: settings.slider_setting.animSpeed,                // Slide transition speed
          pauseTime: settings.slider_setting.pauseTime,                // How long each slide will show
          startSlide: settings.slider_setting.startSlide,              // Set starting Slide (0 index)
          directionNav: settings.slider_setting.directionNav,          // Next & Prev navigation
          controlNav: settings.slider_setting.controlNav,              // 1,2,3... navigation
          pauseOnHover: settings.slider_setting.pauseOnHover,          // Stop animation while hovering
          manualAdvance: false,                                        // Force manual transitions
          prevText: 'Prev',                                            // Prev directionNav text
          nextText: 'Next',                                            // Next directionNav text
          randomStart: settings.slider_setting.randomStart             // Start on a random slide

        });

      });

    }
  };
})(jQuery);
/**
 * Created by amicizia on 30/12/15.
 */
