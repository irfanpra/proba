<?php

/**
 * @file
 * Process theme data.
 *
 * Use this file to run your theme specific implimentations of theme functions,
 * such preprocess, process, alters, and theme function overrides.
 *
 * Preprocess and process functions are used to modify or create variables for
 * templates and theme functions. They are a common theming tool in Drupal, often
 * used as an alternative to directly editing or adding code to templates. Its
 * worth spending some time to learn more about these functions - they are a
 * powerful way to easily modify the output of any template variable.
 *
 * Preprocess and Process Functions SEE: http://drupal.org/node/254940#variables-processor
 * 1. Rename each function and instance of "adaptivetheme_subtheme" to match
 *    your subthemes name, e.g. if your theme name is "footheme" then the function
 *    name will be "footheme_preprocess_hook". Tip - you can search/replace
 *    on "adaptivetheme_subtheme".
 * 2. Uncomment the required function to use.
 */


/**
 * Preprocess variables for the html template.
 */
/* -- Delete this line to enable.
function adtema_preprocess_html(&$vars) {
  global $theme_key;

  // Two examples of adding custom classes to the body.

  // Add a body class for the active theme name.
  // $vars['classes_array'][] = drupal_html_class($theme_key);

  // Browser/platform sniff - adds body classes such as ipad, webkit, chrome etc.
  // $vars['classes_array'][] = css_browser_selector();

}
// */


/**
 * Process variables for the html template.
 */
// -- Delete this line if you want to use this function
/*function adtema_process_html(&$vars) {
	 // Render page_top and page_bottom into top level variables.
  $variables ['page_top'] = drupal_render($variables ['page']['page_top']);
  $variables ['page_bottom'] = drupal_render($variables ['page']['page_bottom']);
  // Place the rendered HTML for the page body into a top level variable.
  $variables ['page'] = $variables ['page']['#children'];
  $variables ['page_bottom'] .= drupal_get_js('footer');

  $variables ['head'] = drupal_get_html_head();
  $variables ['css'] = drupal_add_css();
  $variables ['styles'] = drupal_get_css();
  $variables ['scripts'] = drupal_get_js();
}*/
// 


/**
 * Override or insert variables for the page templates.
 */
//-- Delete this line if you want to use these functions
function adtema_preprocess_page(&$vars) {
}
function adtema_process_page(&$vars) {
}
// 


/**
 * Override or insert variables into the node templates.
 */
//-- Delete this line if you want to use these functions
function adtema_preprocess_node(&$vars) {

	if($vars['node']->type=='odsjek'){
		drupal_set_message($vars['title']);
		$vars['title']='';
		if ($vars['view_mode'] == 'nodeform') {
      		// Also remove the field from the form
      		$vars['page']['content']['system_main']['title']['#access'] = false;
    	}
	}
}
function adtema_process_node(&$vars) {
}
// 


/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function adtema_preprocess_comment(&$vars) {
}
function adtema_process_comment(&$vars) {
}
// */


/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function adtema_preprocess_block(&$vars) {
}
function adtema_process_block(&$vars) {
}
// */
