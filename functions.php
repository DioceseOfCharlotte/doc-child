<?php
/**
 * @package    doc
 * @author     Marty Helmick <info@martyhelmick.com>
 * @license    http://www.gnu.org/licenses/gpl-2.0.html
 */

add_action( 'after_setup_theme', 'doc_theme_setup' );
add_action( 'wp_enqueue_scripts', 'doc_enqueue_scripts' );
add_action( 'widgets_init', 'doc_register_sidebars' );
add_action( 'tha_header_after', 'doc_toggle_panel' );
add_action( 'tha_header_bottom', 'doc_panel_toggles' );




/**
 * Setup function.
 */
function doc_theme_setup() {

	// Register menu for the dropdown panel.
    register_nav_menus( [
        'panel-dpc' => _x( 'Pastoral Center Panel Menu', 'doc' ),
    ] );

}




/**
 * Enqueue theme scripts.
 */
function doc_enqueue_scripts() {
    $suffix = hybrid_get_min_suffix();

    wp_enqueue_script( 'doc-panel', trailingslashit( get_stylesheet_directory_uri() ) . 'js/panel.js', array( 'jquery' ), null, true );
}




/**
 * Register Panel Widgets.
 */
function doc_register_sidebars() {
	hybrid_register_sidebar( array(
        'id'            => 'panel-parishes',
        'name'          => _x( 'Parish Panel Widgets', 'doc' ),
		'before_widget' => '<section id="%1$s" class="widget widget-panel %2$s u-pr- u-pr@md u-pr+@lg u-mb- u-mb@md u-mb+@lg grid__item grid__item--flexed"><div class="br widget__wrap u-p@all t-bg__tint">',
		'after_widget'	=> '</div></section>',
		'before_title'  => '<h3 class="widget-title widget-panel__title">',
		'after_title'	=> '</h3>',
    ) );
	hybrid_register_sidebar( array(
        'id'            => 'panel-schools',
        'name'          => _x( 'School Panel Widgets', 'doc' ),
		'before_widget' => '<section id="%1$s" class="widget widget-panel %2$s u-pr- u-pr@md u-pr+@lg u-mb- u-mb@md u-mb+@lg grid__item grid__item--flexed"><div class="br widget__wrap u-p@all t-bg__tint">',
		'after_widget'	=> '</div></section>',
		'before_title'  => '<h3 class="widget-title widget-panel__title">',
		'after_title'	=> '</h3>',
    ) );
}




function doc_toggle_panel() {
	get_template_part( 'templates/toggle-panel' );
}

function doc_panel_toggles() {
	get_template_part( 'templates/panel-toggles' );
}

function bempress_nav_description( $item_output, $item, $depth, $args ) {
    if ( $item->description ) {
        $item_output = str_replace( $args->link_after . '</a>', '</a><a data-tip="true" class="tip--left tip--large tip--bottom menu-item__description info" data-tip-content="' . $item->description . '"><i class="fa fa-info-circle"></i></a>' . $args->link_after , $item_output );
    }
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'bempress_nav_description', 10, 4 );