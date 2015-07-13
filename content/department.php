<?php if (have_posts()) : ?>

<?php if (is_singular(get_post_type())) : ?>

    <?php while (have_posts()) : the_post(); ?>

    <article <?php hybrid_attr('post'); ?>>

            <div <?php hybrid_attr('entry-content'); ?>>
                <?php the_content(); ?>
                <?php get_template_part('templates/meta-contact'); ?>
                <?php get_template_part('templates/meta-address'); ?>
            </div>
                <?php get_template_part('templates/connected-employee'); ?>

            <footer <?php hybrid_attr('entry-footer'); ?>>
                <?php wp_link_pages(array(
                    'before' => '<nav class="page-nav"><p>'.__('Pages:', 'bempress'),
                    'after'  => '</p></nav>',
                )); ?>
            </footer>
    </article>

    <?php endwhile; ?>

        <?php else : // If not viewing a single post. ?>

        <?php echo facetwp_display( 'facet', 'department_drop' ); ?>

        <?php echo facetwp_display( 'facet', 'dept_location' ); ?>

<div class="facetwp-template u-1/1 flex flex-wrap flex-justify">

    <?php while (have_posts()) : the_post(); ?>

    <article <?php hybrid_attr('post'); ?>>

            <header <?php hybrid_attr('entry-header'); ?>>
                <?php
                  get_the_image(array(
                      'size'         => 'bempress-lg',
                  ));
                ?>
                <h2 <?php hybrid_attr('entry-title'); ?>>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
            </header>

            <div <?php hybrid_attr('entry-summary'); ?>>
                <?php the_excerpt(); ?>
            </div>
    </article>

    <?php endwhile; ?>

<?php endif; // End check for posts. ?>


</div>
    <?php
    the_posts_pagination( array(
    'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
    'next_text'          => __( 'Next page', 'twentyfifteen' ),
    'before_page_number' => '<button class="bg-3">',
    'after_page_number' => '</button>',
) );
 ?>

<?php
endif;
