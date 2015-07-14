<?php if (have_posts()) : ?>

    <?php while (have_posts()) : the_post(); ?>

    <article <?php hybrid_attr('post'); ?>>

            <div <?php hybrid_attr('entry-content'); ?>>
                <?php the_content(); ?>
                <?php get_template_part('templates/meta-contact'); ?>
                <?php get_template_part('templates/meta-address'); ?>
                <?php get_template_part('templates/connected-department'); ?>
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

<?php
endif;
