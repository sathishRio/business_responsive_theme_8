<?php

/**
 * @file
 * Lists available colors and color schemes for the Bartik theme.
 */

$info = array(
  // Available colors and color labels used in theme.
  'fields' => array(
    'header' => t('Header background '),
    'bg' => t('Main BackGround'),
    'text' => t('Text Color'),
    'link' => t('Link color'),
    'content-background' => t('Content Background'),
    'menu' => t('Menu Background'),
    'footer' => t('Footer Background'),
    'footer-credits' => t('Footer Credit Background'),

  ),
  // Pre-defined color schemes.
  'schemes' => array(
    'default' => array(
      'title' => t('Business Responsive(Default)'),
      'colors' => array(
        'header' => '#ffffff',
        'bg'=>'#fff',
        'text'=>'#515F5C',
        'link' =>'#FF5C03',
        'content-background' => '#fbfbfb',
        'menu'=>'#272727',
        'footer' =>'#000000',
        'footer-credits' => '#000',
      ),
    ),

  ),

  // CSS files (excluding @import) to rewrite with new color scheme.
  'css' => array(
    'css/colors.css',
  ),

  // Files to copy.
  'copy' => array(
    'logo.svg',
  ),

  // Gradient definitions.
  'gradients' => array(
    array(
      // (x, y, width, height).
      'dimension' => array(0, 0, 0, 0),
      // Direction of gradient ('vertical' or 'horizontal').
      'direction' => 'vertical',
      // Keys of colors to use for the gradient.
      'colors' => array('top', 'bottom'),
    ),
  ),

  // Preview files.
  'preview_library' => 'business_responsive_theme/color.preview',
  'preview_html' => 'color/preview.html',

  // Attachments.
  '#attached' => [
    'drupalSettings' => [
      'color' => [
        // Put the logo path into JavaScript for the live preview.
        'logo' => theme_get_setting('logo.url', 'business_responsive_theme'),
      ],
    ],
  ],
);
