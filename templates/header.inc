<?php
/**
 * @file
 * Header markup for Docs.Ottawa.ca
 */

// Need to use this to change the link back to ottawa.ca
global $language;
?>
<?php if ($logo || $page['top']): ?>
  <div id="page-top">
    <div class="inside clearfix">
      <?php if ($logo): ?>
        <a href="http://ottawa.ca/<?php print $language->language == "en" ? "en" : "fr"; ?>" title="<?php print t('City of Ottawa'); ?>" rel="home" class="header__logo" id="top-logo"><img src="<?php print $logo; ?>" alt="<?php print t('City of Ottawa logo'); ?>" class="header__logo-image" /></a>
      <?php endif; ?>

      <?php print render($page['top']); ?>
    </div>    
  </div>
<?php endif; ?>
<div id="page">
  <?php if ($site_name || $site_slogan || $secondary_menu || $page['header']): ?>
    <header class="header" id="header" role="banner">
      <?php if ($secondary_menu): ?>
        <nav class="header__secondary-menu" id="secondary-menu" role="navigation">
          <?php print theme('links__system_secondary_menu', array(
            'links' => $secondary_menu,
            'attributes' => array(
              'class' => array('links', 'inline', 'clearfix'),
            ),
            'heading' => array(
              'text' => $secondary_menu_heading,
              'level' => 'h2',
              'class' => array('element-invisible'),
            ),
          )); ?>
        </nav>
      <?php endif; ?>
      <?php print render($page['header']); ?>
    </header>
    <!-- Page heading custom -->
    <div class="header-extended">
      <h1>Documents</h1>
    </div>
    
  <?php endif; ?>
