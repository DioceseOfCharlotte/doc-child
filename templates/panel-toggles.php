<div class="toggles">
    <?php if ( is_active_sidebar( 'panel-parishes' ) ) : ?>
        <div id="parish-toggle" class="toggle" title="<?php esc_attr_e( 'Parishes', 'doc' ); ?>">
            <?php get_template_part( 'images/vector/svg', 'lock' ); ?>
            <span class="screen-reader-text"><?php _e( 'Parishes', 'doc' ); ?></span>
        </div><!-- #parish-toggle -->
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'panel-schools' ) ) : ?>
        <div id="schools-toggle" class="toggle" title="<?php esc_attr_e( 'Schools', 'doc' ); ?>">
            <?php get_template_part( 'images/vector/svg', 'lock' ); ?>
            <span class="screen-reader-text"><?php _e( 'Schools', 'doc' ); ?></span>
        </div><!-- #schools-toggle -->
    <?php endif; ?>
    <div id="dpc-toggle" class="toggle" title="<?php esc_attr_e( 'Pastoral Center', 'doc' ); ?>">
        <?php get_template_part( 'images/vector/svg', 'lock' ); ?>
        <span class="screen-reader-text"><?php _e( 'Pastoral Center', 'doc' ); ?></span>
    </div><!-- #dpc-toggle -->
    <div id="search-toggle" class="toggle" title="<?php esc_attr_e( 'Search', 'doc' ); ?>">
        <?php get_template_part( 'images/vector/svg', 'lock' ); ?>
        <span class="screen-reader-text"><?php _e( 'Search', 'doc' ); ?></span>
    </div><!-- #search-toggle -->
</div><!-- .toggles -->
