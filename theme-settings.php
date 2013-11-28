<?php
/**
 * Implements hook_form_system_theme_settings_alter().
 *
 * The commented code below is to be used on the Portal site theme.
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function ottdoc_zen_form_system_theme_settings_alter(&$form, &$form_state, $key = '')  {
  // Work-around for a core bug affecting admin themes. See issue #943212.
  if (isset($form_id)) {
    return;
  }

  $form['theme_settings']['#weight'] = -3;
  /*$form['logo']['#weight'] = -2;
  $form['doc_logo'] = array(
    '#type' => 'fieldset',
    '#title' => t('Portal logo settings'),
    '#weight' => -1,
  );
  // Default path for image
  $pa_path = theme_get_setting('doc_logo_path');
  if (file_uri_scheme($pa_path) == 'public') {
    $pa_path = file_uri_target($pa_path);
  }
  $form['doc_logo']['doc_logo_path'] = array(
    '#type' => 'textfield',
    '#title' => t('Path to main doc logo'),
    '#description' => t('The path to the file you would like to use as your logo file.'),
    '#default_value' => $pa_path,
  );
  $form['doc_logo']['doc_logo_upload'] = array(
    '#type' => 'file',
    '#title' => t('Upload main doc logo image'),
    '#maxlength' => 40,
    '#description' => t('If you don\'t have direct file access to the server, use this field to upload your logo.'),
  );
  // Default path for image
  $pal_path = theme_get_setting('doc_alt_logo_path');
  if (file_uri_scheme($pal_path) == 'public') {
    $pal_path = file_uri_target($pal_path);
  }
  $form['doc_logo']['doc_alt_logo_path'] = array(
    '#type' => 'textfield',
    '#title' => t('Path to alt doc logo'),
    '#description' => t('The path to the file you would like to use as your logo file.'),
    '#default_value' => $pal_path,
  );
  $form['doc_logo']['doc_alt_logo_upload'] = array(
    '#type' => 'file',
    '#title' => t('Upload alt doc logo image'),
    '#maxlength' => 40,
    '#description' => t('If you don\'t have direct file access to the server, use this field to upload your logo.'),
  );
  $form['#validate'][] = 'ottdoc_zen_settings_validate';
  $form['#submit'][] = 'ottdoc_zen_settings_submit';*/
}

/*function ottdoc_zen_settings_validate($form, &$form_state) {
  $doc_logo = _ottdoc_zen_validate_file('doc_logo_upload');
  if ($doc_logo) {
    $form_state['values']['doc_logo_upload'] = $doc_logo;
  }

  $doc_alt_logo = _ottdoc_zen_validate_file('doc_alt_logo_upload');
  if ($doc_alt_logo) {
    $form_state['values']['doc_alt_logo_upload'] = $doc_alt_logo;
  }

  if ($form_state['values']['doc_logo_path']) {
    $path = _ottdoc_zen_validate_path($form_state['values']['doc_logo_path']);
    if (!$path) {
      form_set_error('doc_logo_path', t('The custom logo path is invalid.'));
    }
  }

  if ($form_state['values']['doc_alt_logo_path']) {
    $path = _ottdoc_zen_validate_path($form_state['values']['doc_alt_logo_path']);
    if (!$path) {
      form_set_error('doc_alt_logo_path', t('The custom logo path is invalid.'));
    }
  }
}*/

/*function ottdoc_zen_settings_submit($form, &$form_state) {
  // If the user uploaded a new doc logo and alt, save it to a permanent location
  if ($file = $form_state['values']['doc_logo_upload']) {
    unset($form_state['values']['doc_logo_upload']);
    $filename = file_unmanaged_copy($file->uri);
    $form_state['values']['doc_logo_path'] = $filename;
  }
  if ($file = $form_state['values']['doc_alt_logo_upload']) {
    unset($form_state['values']['doc_alt_logo_upload']);
    $filename = file_unmanaged_copy($file->uri);
    $form_state['values']['doc_alt_logo_path'] = $filename;
  }

  // If the user entered a path relative to the system files directory for
  // a logo, store a public:// URI so the theme system can handle it.
  if (!empty($form_state['values']['doc_logo_path'])) {
    $form_state['values']['doc_logo_path'] = _ottdoc_zen_validate_path($form_state['values']['doc_logo_path']);
  }
  if (!empty($form_state['values']['doc_alt_logo_path'])) {
    $form_state['values']['doc_alt_logo_path'] = _ottdoc_zen_validate_path($form_state['values']['doc_alt_logo_path']);
  }
}*/

/**
 * Helper function for the ottdoc_zen_form_system_theme_settings form.
 *
 * Attempts to validate file uploads for the Portal logos.
 *
 * @param $field
 *   The specific logo field being validated.
 * @return $file
 *  The temporary file to save in form_values.
 */
/*function _ottdoc_zen_validate_file($field) {
  // Handle file uploads.
  $validators = array('file_validate_is_image' => array());

  // Check for a new uploaded logo.
  $file = file_save_upload($field, $validators);
  if (isset($file)) {
    // File upload was attempted.
    if ($file) {
      // Put the temporary file in form_values so we can save it on submit.
      return $file;
    }
    else {
      // File upload failed.
      form_set_error($field, t('The logo could not be uploaded.'));
    }
  }
}*/

/**
 * Helper function for the ottdoc_zen_form_system_theme_settings form.
 *
 * Attempts to validate normal system paths, paths relative to the public files
 * directory, or stream wrapper URIs. If the given path is any of the above,
 * returns a valid path or URI that the theme system can display.
 *
 * @param $path
 *   A path relative to the Drupal root or to the public files directory, or
 *   a stream wrapper URI.
 * @return mixed
 *   A valid path that can be displayed through the theme system, or FALSE if
 *   the path could not be validated.
 */
/*function _ottdoc_zen_validate_path($path) {
  // Absolute local file paths are invalid.
  if (drupal_realpath($path) == $path) {
    return FALSE;
  }
  // A path relative to the Drupal root or a fully qualified URI is valid.
  if (is_file($path)) {
    return $path;
  }
  // Prepend 'public://' for relative file paths within public filesystem.
  if (file_uri_scheme($path) === FALSE) {
    $path = 'public://' . $path;
  }
  if (is_file($path)) {
    return $path;
  }
  return FALSE;
}*/
