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
