<?php
$connected = new WP_Query( array(
    'connected_type'  => 'employees_to_departments',
    'connected_items' => get_queried_object(),
    'nopaging'        => true,
) );

if ( $connected->have_posts() ) : ?>
    <h3>Personnel</h3>
    <ul>
    <?php while ( $connected->have_posts() ) : $connected->the_post(); ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
    </ul>
    <?php

    wp_reset_postdata();
endif;
