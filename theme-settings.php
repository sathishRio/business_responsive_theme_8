<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function business_responsive_theme_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['prof_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Business Responsive Theme'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  $form['prof_settings']['breadcrumbs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show breadcrumbs in a page'),
    '#default_value' => theme_get_setting('breadcrumbs','business_responsive_theme'),
    '#description'   => t("Check this option to show breadcrumbs in page. Uncheck to hide."),
  );
  $form['prof_settings']['top_social_link'] = array(
    '#type' => 'fieldset',
    '#title' => t('Social links in header'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['prof_settings']['top_social_link']['social_links'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show social icons (Facebook, Twitter and RSS) in header'),
    '#default_value' => theme_get_setting('social_links', 'business_responsive_theme'),
    '#description'   => t("Check this option to show twitter, facebook, rss icons in header. Uncheck to hide."),
  );
  $form['prof_settings']['top_social_link']['twitter_username'] = array(
    '#type' => 'textfield',
    '#title' => t('Twitter Username'),
    '#default_value' => theme_get_setting('twitter_username', 'business_responsive_theme'),
    '#description' => t("Enter your Twitter username."),
  );
  $form['prof_settings']['top_social_link']['facebook_username'] = array(
    '#type' => 'textfield',
    '#title' => t('Facebook Username'),
    '#default_value' => theme_get_setting('facebook_username', 'business_responsive_theme'),
    '#description' => t("Enter your Facebook username."),
  );
  $form['prof_settings']['slideshow'] = array(
    '#type' => 'fieldset',
    '#title' => t('Front Page Slideshow'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );

  $form['prof_settings']['slideshow']['slideshow_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show slideshow'),
    '#default_value' => theme_get_setting('slideshow_display','business_responsive_theme'),
  );

  $form['prof_settings']['slideshow']['slideshow_js'] = array(
    '#type' => 'checkbox',
    '#title' => t('Include slideshow javascript code'),
    '#default_value' => theme_get_setting('slideshow_js','business_responsive_theme'),
  );

  $form['prof_settings']['slideshow']['effect'] = array(
    '#type' => 'textfield',
    '#title' => t('Effects'),
    '#default_value' => theme_get_setting('effect','business_responsive_theme'),
    '#description'   => t('Enter the effect you want.If you want multiple effect enter with comma (,) separator.Effect must be on of the following:
    <ul>
      <li>sliceDown</li>
      <li>sliceDownLeft</li>
      <li>sliceUp</li>
      <li>sliceUpLeft</li>
      <li>sliceUpDown</li>
      <li>fold</li>
      <li>fade</li>
      <li>random</li>
      <li>slideInRight</li>
      <li>slideInLeft</li>
      <li>boxRandom</li>
      <li>boxRain</li>
      <li>boxRainGrow</li>
    </ul>
    <b style="color: #ff0000">Note: this effect act as keyword so keep in case-sensitive</b>'),
  );

  $form['prof_settings']['slideshow']['animSpeed'] = array(
    '#type' => 'textfield',
    '#title' => t('Animation Speed'),
    '#default_value' => theme_get_setting('animSpeed','business_responsive_theme'),
    '#description'  => t('Slide transition speed'),
  );

  $form['prof_settings']['slideshow']['pauseTime'] = array(
    '#type' => 'textfield',
    '#title' => t('Pause Time'),
    '#default_value' => theme_get_setting('pauseTime','business_responsive_theme'),
    '#description'  => t('How long each slide will show'),
  );

  $form['prof_settings']['slideshow']['slices'] = array(
    '#type' => 'textfield',
    '#title' => t('Slices'),
    '#default_value' => theme_get_setting('slices','business_responsive_theme'),
    '#description'  => t('For slice animations'),
  );

  $form['prof_settings']['slideshow']['boxRows'] = array(
    '#type' => 'textfield',
    '#title' => t('Box Rows'),
    '#default_value' => theme_get_setting('boxRows','business_responsive_theme'),
    '#description'  => t('For box animations'),
  );

  $form['prof_settings']['slideshow']['boxCols'] = array(
    '#type' => 'textfield',
    '#title' => t('Box cols'),
    '#default_value' => theme_get_setting('boxCols','business_responsive_theme'),
    '#description'  => t('For box animations'),
  );

  $form['prof_settings']['slideshow']['startSlide'] = array(
    '#type' => 'textfield',
    '#title' => t('Start Slide'),
    '#default_value' => theme_get_setting('startSlide','business_responsive_theme'),
    '#description'  => t('Set starting Slide (0 index)'),
  );

  $form['prof_settings']['slideshow']['controlNav'] = array(
    '#type' => 'checkbox',
    '#title' => t('Control Navigation in slider'),
    '#default_value' => theme_get_setting('controlNav','business_responsive_theme'),
    '#decription' =>t('1,2,3... navigation')
  );

  $form['prof_settings']['slideshow']['directionNav'] = array(
    '#type' => 'checkbox',
    '#title' => t('Direction Navigation in slider'),
    '#default_value' => theme_get_setting('directionNav','business_responsive_theme'),
    '#description'  => t('Next & Prev navigation')
  );

  $form['prof_settings']['slideshow']['randomStart'] = array(
    '#type' => 'checkbox',
    '#title' => t('Randomize slideshow order'),
    '#default_value' => theme_get_setting('randomStart','business_responsive_theme'),
    '#description'  => t('Start on a random slide')
  );
  $form['prof_settings']['slideshow']['pauseOnHover'] = array(
    '#type' => 'checkbox',
    '#title' => t('Pause slideshow on hover'),
    '#default_value' => theme_get_setting('pauseOnHover','business_responsive_theme'),
    '#description'  => t('Stop animation while hovering')
  );
  $form['prof_settings']['slideshow']['slideimage'] = array(
    '#markup' => t('To change the Slide Images, Replace the slide-image1.jpg, slide-image2.jpg and slide-image3.jpg in the images folder of the theme folder.'),
  );
}


