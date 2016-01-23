/**
 * @file
 * Preview for the Bartik theme.
 */
(function ($, Drupal, drupalSettings) {

  'use strict';

  Drupal.color = {
    logoChanged: false,
    callback: function (context, settings, form, farb, height, width) {
      // Change the logo to be the real one.
      if (!this.logoChanged) {
        $('.color-preview .color-preview-logo img').attr('src', drupalSettings.color.logo);
        this.logoChanged = true;
      }
      // Remove the logo if the setting is toggled off.
      if (drupalSettings.color.logo === null) {
        $('div').remove('.color-preview-logo');
      }

      form.find('.color-preview').css('backgroundColor', $('.js-color-palette input[name="palette[bg]"]').val());
      form.find('.color-preview').css('color', $('.js-color-palette input[name="palette[text]"]').val());
      form.find('.color-preview a').css('color', $('.js-color-palette input[name="palette[link]"]').val());

      form.find('.color-preview .color-preview-header').css('background-color', form.find('.js-color-palette input[name="palette[header]"]').val());
      form.find('.color-preview .color-preview-main-menu').css('background-color', form.find('.js-color-palette input[name="palette[menu]"]').val());
      form.find('.color-preview-content-block').css('background-color', form.find('.js-color-palette input[name="palette[content-background]"]').val());
      form.find('.color-preview-footer').css('background-color', form.find('.js-color-palette input[name="palette[footer]"]').val());
      form.find('.color-preview-footer-credits').css('background-color', form.find('.js-color-palette input[name="palette[footer-credits]"]').val());

    }
  };
})(jQuery, Drupal, drupalSettings);
