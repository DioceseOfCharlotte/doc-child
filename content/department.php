<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

    <article <?php hybrid_attr('post'); ?>>

        <?php if (is_singular(get_post_type())) : ?>

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

        <?php else : // If not viewing a single post. ?>

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

        <?php endif; // End check for posts. ?>

    </article>

    <?php endwhile; ?>

    <?php the_posts_navigation( array(
    'prev_text'          => __( 'Previous page', 'bempress' ),
    'next_text'          => __( 'Next page', 'bempress' ),
    ) ); ?>

<?php
endif;
