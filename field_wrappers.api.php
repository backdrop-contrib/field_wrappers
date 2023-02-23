<?php
/**
 * @file
 * Sample hook demonstrating how wrapper elements can be added or removed from
 * the Field Wrapper module.
 */

/**
 * Modify HTML elements that can be used as field wrappers.
 *
 * This hook allow addition and/or removal of items from the list of wrapper
 * elements.
 */
function hook_field_wrapper_elements_alter(&$wrapper_elements) {
  // Add additional elements.
  $wrapper_elements = array_merge(
    $wrapper_elements, array(
      'blockquote' => t('BLOCKQUOTE'),
      'cite' => t('CITE'),
      'code' => t('CODE'),
    )
  );
  // Remove element.
  unset($wrapper_elements['h6']);
  // Return the modified array.
  return $wrapper_elements;
}
