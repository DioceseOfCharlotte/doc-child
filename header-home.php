<?php
/**
 * The Header for our theme.
 *
 * @package BEMpress
 */
?><!doctype html>
<?php tha_html_before(); ?>
<html <?php language_attributes(); ?>>
<head <?php hybrid_attr( 'head' ); ?>>
<?php tha_head_top(); ?>
<meta http-equiv="x-ua-compatible" content="ie=edge">
<?php wp_head(); ?>
<?php tha_head_bottom(); ?>
</head>

<body <?php hybrid_attr( 'body' ); ?>>
    <!--[if lt IE 10]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://whatbrowser.org">Upgrade your browser</a> for a faster, safer, and better web experience.</p>
    <![endif]-->

<?php tha_body_top(); ?>

    <div class="skip-link">
        <a href="#content" class="button screen-reader-text">
            <?php esc_html_e( 'Skip to content (Press enter)', 'bempress' ); ?>
        </a>
    </div><!-- .skip-link -->

    <?php get_template_part( 'templates/toggle-panel' ); ?>

    <?php tha_header_before(); ?>

    <header <?php hybrid_attr( 'header' ); ?>>

    <div class="action-bar">
        <div <?php hybrid_attr( 'wrap', 'action-bar' ); ?>>
        
            <button class="menu-toggle" aria-controls="menu-primary" aria-expanded="false">
            <span></span>
            </button>

            
        </div>
    </div>

             

        <div <?php hybrid_attr( 'wrap', 'hero' ); ?>>

        <?php tha_header_top(); ?>

            <div <?php hybrid_attr( 'branding' ); ?>>

    <svg class="glass-image">
        <image id="svg-image" class="header-image" xlink:href="<?php header_image(); ?>" />
        <filter id="svg-blur">
          <feGaussianBlur stdDeviation="9" />
        </filter>
    </svg>
    
            <div class="page-title__bg">
                


            </div>
                <div class="page-title__wrap">
                <div class="logo__wrap">
                    <?php flagship_the_logo(); ?> 
                </div>
                    <?php hybrid_site_title(); ?>
                    <?php hybrid_site_description(); ?>
                    <?php get_template_part( 'templates/panel-toggles' ); ?>
                </div>

            </div><!-- #branding -->

        <?php tha_header_bottom(); ?>

        </div><!-- .wrap -->

    </header><!-- #header -->

    <?php if ( get_header_image() ) : ?>
        <img class="header-image" src="<?php header_image(); ?>">
    <?php endif; // End header image check. ?>

    <?php tha_header_after(); ?>

    <?php hybrid_get_menu( 'primary' ); ?>

        <?php hybrid_get_menu( 'breadcrumbs' ); ?>

    <div <?php hybrid_attr( 'site-container' ); ?>>

        <div <?php hybrid_attr( 'site-inner' ); ?>>
