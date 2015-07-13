<?php if( have_rows('doc_address') ): ?>
    <div class="acf-map">
        <?php while ( have_rows('doc_address') ) : the_row();

            $location = get_sub_field('doc_map');

            ?>
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>">
                <h4><?php the_sub_field('doc_address_type'); ?></h4>
                <p class="address"><?php echo $location['address']; ?></p>
            </div>
    <?php endwhile; ?>
    </div>
<?php endif; ?>
