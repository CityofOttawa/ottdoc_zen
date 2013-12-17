<?php
/**
 * @file
 * Footer markup for docs.ottawa.ca
 */
?>
    <!-- Custom Regions above footer -->
    <div class="footer-top clearfix">
    <?php print render($page['footer_top_first']); ?>
    <?php print render($page['footer_top_second']); ?>
    </div>
  <?php print render($page['footer']); ?>
</div>
<?php print render($page['bottom']); ?>
