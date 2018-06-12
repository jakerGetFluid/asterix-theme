<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


// Admin stylesheet
function load_custom_wp_admin_style() {
    wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/assets/styles/css/admin-style.css', false, '1.0.0' );
    wp_enqueue_style( 'custom_wp_admin_css' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_style' );


// ********************
// ** allow svg uploads
// ** to wordpress
// ********************
//function cc_mime_types($mimes) {
//  $mimes['svg'] = 'image/svg+xml';
//  return $mimes;
//}
//add_filter('upload_mimes', 'cc_mime_types');


// *****************
// ** declare cpt's
// *****************
//function my_custom_post_types() {
  
  // sample data for a cpt
  // repeat this block for declaring custom post types
  
  //$singular_name = 'Resource';
  //$plural_name = 'Resources';
  //$slug = 'resources';

  //$labels = array(
  //  'name'               => $singular_name,
  //  'singular_name'      => $singular_name,
  //  'menu_name'          => $plural_name,
  //  'name_admin_bar'     => $singular_name,
  //  'add_new'            => 'Add New',
  //  'add_new_item'       => 'Add New ' . $singular_name,
  //  'new_item'           => 'New ' . $singular_name,
  //  'edit_item'          => 'Edit ' . $singular_name,
  //  'view_item'          => 'View ' . $singular_name,
  //  'all_items'          => 'All ' . $plural_name,
  //  'search_items'       => 'Search ' . $plural_name,
  //  'parent_item_colon'  => 'Parent ' . $plural_name,
  //  'not_found'          => 'No ' . $plural_name . ' found.',
  //  'not_found_in_trash' => 'No ' . $plural_name . ' found in Trash.'
  //);

  //$args = array( 
  //  'public'      => true, 
  //  'labels'      => $labels,
  //  'has_archive' => true,
  //  'query_var' => true,
  //  'menu_icon' => 'dashicons-portfolio',
  //  'menu_position' => 5,
  //);
  //register_post_type( $slug, $args );
  
  // end sample data for a cpt
//}
//add_action( 'init', 'skyward_custom_post_types' );
