<?php



/* ----------------------------------------------------------------------------

   Load CSS

---------------------------------------------------------------------------- */
function my_theme_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );



/* ----------------------------------------------------------------------------

   Load Page Builder Modifications

---------------------------------------------------------------------------- */
if (class_exists('WPBakeryVisualComposerAbstract')) {
	require_once(get_template_directory() . '/framework/inc/pagebuilder/pagebuilder_theme.php');
}



/* ----------------------------------------------------------------------------

   Set Page Builder Template Directory

---------------------------------------------------------------------------- */
if (class_exists('WPBakeryVisualComposerAbstract')) {
	$dir = get_stylesheet_directory() . '/framework/inc/pagebuilder/pagebuilder_templates';
	vc_set_shortcodes_templates_dir( $dir );
}



?>