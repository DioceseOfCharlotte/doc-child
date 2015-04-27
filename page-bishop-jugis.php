<?php
/**
 * The template for displaying all pages.
 *
 * @package BEMpress
 */

get_header(); ?>

    <?php tha_content_before(); ?>

    <main <?php hybrid_attr( 'content' ); ?>>

        <?php hybrid_get_menu( 'breadcrumbs' ); ?>

        <?php tha_content_top(); ?>

<header class="page__header">

    <h1 <?php hybrid_attr( 'page-title' ); ?>><?php single_post_title(); ?></h1>

</header><!-- .page-header -->

<?php
$args = array (
    'category_name'          => 'bishop-jugis',
    'post__in'  => get_option( 'sticky_posts' )
);
$bishop_sticky_query = new WP_Query( $args );
?>
        <?php if ( $bishop_sticky_query->have_posts() ) : ?>

            <?php while ( $bishop_sticky_query->have_posts() ) : ?>

                <?php $bishop_sticky_query->the_post(); ?>

                <?php tha_entry_before(); ?>

                <?php hybrid_get_content_template(); ?>

                <?php tha_entry_after(); ?>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

        <?php else : ?>

            <?php get_template_part( 'content/none' ); ?>

        <?php endif; ?>

<?php
// WP_Query arguments
$args = array (
    'category_name'          => 'bishop-jugis',
    'post__not_in' => get_option( 'sticky_posts' )
);
$bishop_query = new WP_Query( $args );
?>
        <?php if ( $bishop_query->have_posts() ) : ?>

            <?php while ( $bishop_query->have_posts() ) : ?>

                <?php $bishop_query->the_post(); ?>

                <?php tha_entry_before(); ?>

                <div class="card u-1of2@md">
                <?php get_template_part( 'content/card' ); ?>
                </div>

                <?php tha_entry_after(); ?>

            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

            <?php get_template_part( 'templates/loop-nav' ); ?>

        <?php else : ?>

            <?php get_template_part( 'content/none' ); ?>

        <?php endif; ?>

        <?php tha_content_bottom(); ?>

        </main><!-- #main -->

    <?php tha_content_after(); ?>

<?php hybrid_get_sidebar( 'primary' ); ?>

<?php
get_footer();
