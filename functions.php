<?php

add_action( 'after_setup_theme', 'doc_setup' );
add_action( 'wp_enqueue_scripts', 'doc_scripts' );




function doc_setup() {
    attr_trumps( array(
        //'site_container'          => 'mt2 mt3@md block mdl-layout__content',
        // 'container'               => '',
        // 'container_header'        => 'flex flex-column@sm flex-justify flex-center',
        // 'container_wide'          => 'container--wide',
        // 'row'                     => '',
        //'row_layout'              => 'grid page-content',
        // 'row_layout_sidebar_l'    => 'grid grid--rev mxn3@md',
        //'row_layout_sidebar_r'    => 'grid mxn3@md page-content',
        //
        // // SITE HEADER
        'header'                  => 'mdl-layout__header bg-1 flex',
        'branding'                => 'mdl-layout__header-row',
        'site_title'              => 'mdl-layout-title',
        // 'site_description'        => 'h3 bold m0 muted',
        //
        // // CONTENT
        // 'content'                 => 'grid__item',
        // 'content_with_sidebar'    => 'grid__item px3@md u-2/3@md',
        //
        // // ENTRY
        // 'post'                    => '',
        'post_archive'            => 'mdl-shadow--2dp',
        //
        'page_header'             => 'u-1/1 center white text-shadow',
        //
        // 'entry_title'             => 'h2 mt0 color-inherit muted',
        // 'page_title'    		  => 'h1 m0',
        // 'archive_description'     => '',
        //
        // 'entry_header'            => 'container mb2',
        'entry_content'           => 'mdl-shadow--4dp',
        'entry_summary'           => 'static',
        // 'entry_footer'            => 'container',
        //
        // 'nav_single'              => '',
        // 'nav_archive'             => '',
        //
        // // ENTRY META
        // 'entry_author'            => 'inline-block px1',
        // 'entry_published'         => 'inline-block',
        // 'entry_terms'             => '',
        //
        // // NAVIGATION
        'menu_primary'            => 'flex-justify-end mdl-layout__header-row',
        //
        // // SIDEBAR
        // 'sidebar_primary'         => 'grid__item',
        // 'sidebar_footer'          => 'pt2 pt3@md',
        // 'sidebar_horizontal'      => 'flex flex-wrap flex-justify',
        // 'sidebar_right'           => 'u-1/3@md',
        // 'sidebar_left'            => 'u-1/3@md',
        //
        // 'widgets'                 => 'widget br mb2 mb3@md p2 ml1 mr1 list-reset flex-auto',
        'primary_widgets'         => 'bg-1 white color-inherit',
        // 'footer_widgets'          => 'bg-darken-1',
        //
        // // COMMENTS
        'comments_area'           => 'bg-white p3 p4@md mb2 mb3@md mdl-shadow--2dp',
        //
        // // FOOTER
        // 'footer'                  => 'bg-2',
        //
        // 'menu_link'                 => 'btn'
    ));
}



/**
 * Enqueue scripts and styles.
 */
function doc_scripts() {
    wp_enqueue_style(
        'mdl-style',
        '//storage.googleapis.com/code.getmdl.io/1.0.0/material.blue-teal.min.css'
    );


    wp_enqueue_script(
        'mdl-script',
        'https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js',
        false, null, true
    );
}



// FacetWP
add_action( 'init', 'doc_init' );
function doc_init() {
	add_filter( 'facetwp_index_row', 'doc_facetwp_index_row' );
	add_action( 'p2p_created_connection', 'doc_p2p_created_connection' );
	add_action( 'p2p_delete_connections', 'doc_p2p_delete_connections' );
}
function doc_facetwp_index_row( $params ) {
	global $wpdb;
	if ( 'p2p' == $params['facet_name'] ) {
		// get all P2P post IDs related to the current post
		$related_post_ids = $wpdb->get_col( $wpdb->prepare( "SELECT p2p_from FROM {$wpdb->prefix}p2p
			WHERE p2p_to = %d AND p2p_type IN ('employees_to_departments')",
			$params['post_id']
		) );
		if ( !empty( $related_post_ids ) ) {
			foreach ( $related_post_ids as $related_post_id ) {
				// insert the index rows
				$wpdb->query( $wpdb->prepare( "INSERT INTO {$wpdb->prefix}facetwp_index
					(post_id, facet_name, facet_source, facet_value, facet_display_value) VALUES (%d, %s, %s, %s, %s)",
					$params['post_id'],
					$params['facet_name'],
					$params['facet_source'],
					$related_post_id,
					get_the_title( $related_post_id )
				) );
			}
		}
		// prevent the default indexer query
		return false;
	}
	return $params;
}


// $p2p_id an integer ID
function doc_p2p_created_connection( $p2p_id ) {
	$fwp = new FacetWP();
	$connection = p2p_get_connection( $p2p_id );
	$fwp->indexer->index( $connection->p2p_to );
}
// $p2p_ids is an array of IDs
function doc_p2p_delete_connections( $p2p_ids ) {
	$fwp = new FacetWP();
	foreach ( $p2p_ids as $p2p_id ) {
		$connection = p2p_get_connection( $p2p_ids );
	   $fwp->indexer->index( $connection->p2p_to );
	}
}
