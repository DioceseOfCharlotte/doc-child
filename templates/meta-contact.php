<?php if( have_rows('phone') ): ?>
    <ul>
    <?php while( have_rows('phone') ): the_row(); ?>
        <li>sub_field_1 = <?php the_sub_field('phone_type'); ?>, sub_field_2 = <?php the_sub_field('phone_number'); ?>, etc</li>
    <?php endwhile; ?>
    </ul>
<?php endif; ?>

<?php if( have_rows('address') ): ?>
    <div class="acf-map">
        <?php while ( have_rows('address') ) : the_row();

            $location = get_sub_field('map');

            ?>
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
                <h4><?php the_sub_field('address_type'); ?></h4>
                <p class="address"><?php echo $location['address']; ?></p>
            </div>
    <?php endwhile; ?>
    </div>
<?php endif; ?>
