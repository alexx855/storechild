<?php
/**
 * Storechild engine room
 *
 * @package storechild
 */

 $theme              = wp_get_theme( 'storechild' );
 $storechild_version = $theme['Version'];

/**
 * Load the individual classes required by this theme
 */
add_action( 'init', 'storechild_includes' );
function storechild_includes() {
	require_once( 'inc/class-storechild.php' );
	require_once( 'inc/class-storechild-customizer.php' );
	require_once( 'inc/class-storechild-structure.php' );
}

/**
 * Do not add custom code / snippets here.
 * While Child Themes are generally recommended for customisations, in this case it is not
 * wise. Modifying this file means that your changes will be lost when an automatic update
 * of this theme is performed. Instead, add your customisations to a plugin such as
 * https://github.com/woothemes/theme-customisations
 */
