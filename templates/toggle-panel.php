    <?php if ( is_active_sidebar( 'panel-parishes' ) ) : ?>
        <div id="parishes-toggle-nav" class="panel panel-parishes">
            <div <?php hybrid_attr( 'wrap', 'panel-parishes' ); ?>>
                <?php hybrid_get_sidebar( 'panel-parishes' ); ?>
            </div>
        </div>
    <?php endif; ?>
    <?php if ( is_active_sidebar( 'panel-schools' ) ) : ?>
        <div id="schools-toggle-nav" class="panel panel-schools">
            <div <?php hybrid_attr( 'wrap', 'panel-schools' ); ?>>
                <?php hybrid_get_sidebar( 'panel-schools' ); ?>
            </div>
        </div>
    <?php endif; ?>
    <div id="dpc-toggle-nav" class="panel panel-dpc">
        <div <?php hybrid_attr( 'wrap', 'panel-dpc' ); ?>>
            <?php hybrid_get_menu( 'panel-dpc' ); ?>
        </div>
    </div>
    <div id="search-toggle-nav" class="panel panel-search">
        <div class="search-wrapper">
            <?php get_search_form(); ?>
        </div>
    </div>
