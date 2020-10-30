<?php
//Do not copy the opening tag above.

/* -- Add another menu and float it to left --
*
*
*Register the menu you want to add.
*
*/
function register_additional_genesis_menus() {

	add_theme_support(
	    'genesis-menus', array(
	        'primary'   => __( 'Header Menu', 'genesis-sample' ),
	        'secondary' => __( 'Footer Menu', 'genesis-sample' ),
	        'third-menu' => __( 'Third Navigation Menu', 'genesis-sample' ),
	    )
	);

	register_nav_menu( 'third-menu' ,
	__( 'Third Navigation Menu' ));

}
add_action( 'genesis_register_nav_menus', 'register_additional_genesis_menus' );

/* -- Beyond this line is courtesy of Sridhar Katakam. --
*
* -- Echo third navigation menu.
*
*
*/
function ea_add_third_nav() {

	// Do nothing if menu not supported.
    if ( ! genesis_nav_menu_supported( 'third-menu' ) || ! has_nav_menu( 'third-menu' ) ) {
        return;
    }

	$class = 'menu genesis-nav-menu menu-third-menu';
	    if ( genesis_superfish_enabled() ) {
	        $class .= ' js-superfish';
	    }

	    genesis_nav_menu( array(
	        'theme_location' => 'third-menu',
	        'menu_class'     => $class,
	    ) );

}
//hook it wherever you want.
add_action( 'genesis_header', 'ea_add_third_nav', 12 );

// Add typical attributes for navigation elements.
add_filter( 'genesis_attr_nav-third-menu', 'genesis_attributes_nav' );


/* -- Adds ID markup to custom navigation. --
 *
 * @param array $attributes Existing attributes for custom navigation element.
 *
 * @return array Amended attributes for custom navigation element.
 *
 */
function ea_attr_third_nav( $attributes ) {

    $attributes['id'] = 'genesis-nav-third-menu';

    return $attributes;

}
add_filter( 'genesis_attr_nav-third-menu', 'ea_attr_third_nav' );


/* --  Adds skip link for custom navigation. --
 *
 * @param array $links Exiting skiplinks.
 *
 * @return array Amended skiplinks.
 *
 */
function ea_skiplinks_output( $links ) {

    if ( genesis_nav_menu_supported( 'third-menu' ) && has_nav_menu( 'third-menu' ) ) {
        $links['genesis-nav-custom'] = __( 'Skip to custom navigation', 'genesis' );
    }

    return $links;
}
add_filter( 'genesis_skip_links_output', 'ea_skiplinks_output' );

?>
