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

            <?php get_template_part( 'templates/panel-toggles' ); ?>
        </div>
    </div>

        <div <?php hybrid_attr( 'wrap', 'hero' ); ?>>

        <?php tha_header_top(); ?>

            <?php flagship_the_logo(); ?>

            <div <?php hybrid_attr( 'branding' ); ?>>
                <div class="page-title__wrap u-p">
                    <?php hybrid_site_title(); ?>
                    <?php hybrid_site_description(); ?>
                </div>
            </div><!-- #branding -->

        <?php tha_header_bottom(); ?>

        </div><!-- .wrap -->

<?php if ( get_header_image() ) : ?>
    <svg class="glass-image">
        <image id="svg-image" class="header-image" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" xlink:href="<?php header_image(); ?>" />
        <filter id="svg-blur">
          <feGaussianBlur stdDeviation="4" />
        </filter>
    </svg>
<?php endif; // End header image check. ?>

    </header><!-- #header -->

    <?php tha_header_after(); ?>

    <?php hybrid_get_menu( 'primary' ); ?>

        <?php hybrid_get_menu( 'breadcrumbs' ); ?>

    <div <?php hybrid_attr( 'site-container' ); ?>>

        <div <?php hybrid_attr( 'site-inner' ); ?>>