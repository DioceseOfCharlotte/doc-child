<?php
/**
 * @package    doc
 * @author     Marty Helmick <info@martyhelmick.com>
 * @license    http://www.gnu.org/licenses/gpl-2.0.html
 */

add_action( 'after_setup_theme', 'doc_theme_setup' );
add_action( 'widgets_init', 'doc_register_sidebars' );





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
 * Register Panel Widgets.
 */
function doc_register_sidebars() {
	hybrid_register_sidebar( array(
        'id'            => 'panel-parishes',
        'name'          => _x( 'Parish Panel Widgets', 'doc' ),
		'before_widget' => '<section id="%1$s" class="widget widget-panel %2$s u-pr- u-pr@md u-pr+@lg u-mb- u-mb@md u-mb+@lg grid__item grid__item--flexed"><div class="br widget__wrap u-p@all t-bg__1--glass shadow--z1">',
		'after_widget'	=> '</div></section>',
		'before_title'  => '<h3 class="widget-title widget-panel__title">',
		'after_title'	=> '</h3>',
    ) );
	hybrid_register_sidebar( array(
        'id'            => 'panel-schools',
        'name'          => _x( 'School Panel Widgets', 'doc' ),
		'before_widget' => '<section id="%1$s" class="widget widget-panel %2$s u-pr- u-pr@md u-pr+@lg u-mb- u-mb@md u-mb+@lg grid__item grid__item--flexed"><div class="br widget__wrap u-p@all t-bg__1--glass shadow--z1">',
		'after_widget'	=> '</div></section>',
		'before_title'  => '<h3 class="widget-title widget-panel__title">',
		'after_title'	=> '</h3>',
    ) );
}






