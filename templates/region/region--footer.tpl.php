<?php
/**
 * @file
 * Returns the HTML for the footer region.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728140
 */
?>
<?php if ($content): ?>

  <footer id="footer" class="<?php print $classes; ?>" role="contentinfo">
    
    <?php print $content; ?>

    <p>&copy; 2001-<?php print date("Y");?> <?php print t('City of Ottawa'); ?></p>

  </footer><!-- region__footer -->
<?php endif; ?>
