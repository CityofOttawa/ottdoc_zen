<?php
/**
 * @file
 * Template for a 2 column panel layout.
 *
 * This template provides a two column panel display layout, with
 * each column roughly equal in width. It is 4 rows high; the top
 * second and bottom rows contain 1 column, while the third
 * and fourth rows contain 2 columns.
 *
 * Variables:
 * - $id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 *   panel of the layout. This layout supports the following sections:
 *   - $content['cityott_two_doc_top']: Content in the top row.
 *   - $content['cityott_two_doc_upper']: Content in the upper row.
 *   - $content['cityott_two_doc_left']: Content in the left column.
 *   - $content['cityott_two_doc_right']: Content in the right column.
 *   - $content['cityott_two_doc_bottom']: Content in the bottom row.
 */
?>
<div class="panel-display cityott-two-doc clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-panel cityott-two-doc-top">
    <div class="inside"><?php print $content['cityott_two_doc_top']; ?></div>
  </div>
  <div class="panel-panel cityott-two-doc-upper">
    <div class="inside"><?php print $content['cityott_two_doc_upper']; ?></div>
  </div>
  <div class="center-wrapper">
    <div class="panel-panel cityott-two-doc-left">
      <div class="inside"><?php print $content['cityott_two_doc_left']; ?></div>
    </div>

    <div class="panel-panel cityott-two-doc-right">
      <div class="inside"><?php print $content['cityott_two_doc_right']; ?></div>
    </div>
  </div>
  <div class="panel-panel cityott-two-doc-bottom">
    <div class="inside"><?php print $content['cityott_two_doc_bottom']; ?></div>
  </div>
</div>
