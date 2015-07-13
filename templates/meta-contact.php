<?php if( have_rows('doc_phone') ): ?>
    <ul>
    <?php while( have_rows('doc_phone') ): the_row(); ?>
        <li><?php the_sub_field('doc_phone_type'); ?>: <?php the_sub_field('doc_phone_number'); ?></li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>
