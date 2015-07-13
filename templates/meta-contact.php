<?php if( have_rows('phone') ): ?>
    <ul>
    <?php while( have_rows('phone') ): the_row(); ?>
        <li><?php the_sub_field('phone_type'); ?>: <?php the_sub_field('phone_number'); ?></li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>
