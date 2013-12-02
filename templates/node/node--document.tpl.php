<?php
/**
 * @file
 * Returns the HTML for a node.
 *
 * Complete documentation for this file is available online.
 * @see https://drupal.org/node/1728164
 */
?>
<article class="node-<?php print $node->nid; ?> <?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || $display_submitted || $unpublished || !$page && $title): ?>
    <header>
      <?php print render($title_prefix); ?>
      <?php if (!$page && $title): ?>
        <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
      <?php endif; ?>
      <?php print render($title_suffix); ?>

      <?php if ($display_submitted): ?>
        <p class="submitted">
          <?php print $user_picture; ?>
          <?php print $submitted; ?>
        </p>
      <?php endif; ?>

      <?php if ($unpublished): ?>
        <mark class="unpublished"><?php print t('Unpublished'); ?></mark>
      <?php endif; ?>
    </header>
  <?php endif; ?>

  <?php
    // We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);
    print render($content);
  ?>
  <?php
    $archived = FALSE;
    // Make sure that the document field is populated.
    if (isset($content['field_document']) && !empty($content['field_document'])) {
      // Check each document to see if there are any archived.
      foreach ($content['field_document']['#items'] as $item) {
        $file = file_load($item['fid']);
        $field = field_get_items('file', $file, 'field_accessible_status');
        $output = field_view_value('file', $file, 'field_accessible_status', $field[0]);
        if (isset($output['#title']) && $output['#title'] == 'Archive exempt') {
          $archived = TRUE;
        }
      }
      // If there's an archived document, show the footnote.
      if ($archived) {
        $footnotes = array();
        $footnotes[0] = t('Archived information is provided for reference, research or record keeping purposes. It is not subject to the City of Ottawa\'s Web Standards and has not been altered or updated since it was archived. Please contact us to request a format other than those available.');
      }
    }
  ?>
  <?php if (isset($footnotes) && !empty($footnotes)): ?>
    <div class="footnotes">
      <?php
        foreach ($footnotes as $key => $footnote) {
          $output = '<p class="footnote' . $key . '"><a name="footnote' . $key . '"></a>*' . $footnote . '</p>';
          print $output;
        }
      ?>
    </div>
  <?php endif; ?>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</article>
