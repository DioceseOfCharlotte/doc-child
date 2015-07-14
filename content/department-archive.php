<?php if (have_posts()) : ?>

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

    </div>
    <?php
    the_posts_pagination( array(
    'prev_text'          => __( 'Previous page', 'bempress' ),
    'next_text'          => __( 'Next page', 'bempress' ),
    'before_page_number' => '<button class="bg-3">',
    'after_page_number' => '</button>',
    ) );

endif;
