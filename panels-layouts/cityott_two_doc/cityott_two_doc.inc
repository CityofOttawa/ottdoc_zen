<?php

// Plugin definition.
$plugin = array(
  'title' => t('City of Ottawa Two Column Documents'),
  'category' => t('City of Ottawa - 2 column'),
  'icon' => 'cityott_two_doc.png',
  'theme' => 'cityott_two_doc',
  'css' => 'cityott_two_doc.css',
  'theme arguments' => array('id', 'content'),
  'regions' => array(
    'cityott_two_doc_top' => t('Top'),
    'cityott_two_doc_upper' => t('Upper Content'),
    'cityott_two_doc_left' => t('Left Content Column'),
    'cityott_two_doc_right' => t('Right Content Column'),
    'cityott_two_doc_bottom' => t('Bottom')
  )
);