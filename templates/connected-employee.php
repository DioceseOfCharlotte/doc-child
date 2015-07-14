<?php
$connected = new WP_Query(array(
    'connected_type'  => 'employees_to_departments',
    'connected_items' => get_queried_object(),
    'nopaging'        => true,
) );
?>
<div class="flex flex-wrap flex-justify">
    <?php
if ( $connected->have_posts() ) : ?>

<h3 class="h3 u-1/1">Personnel</h3>

<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>

<div class="u-1/2">
  <div class="p2 bg-white border br">
    <h1 class="h2 mt0"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
    <p><?php echo p2p_get_meta( get_post()->p2p_id, 'role', true ); ?></p>
  </div>
</div>
<?php endwhile; ?>
    <?php
    wp_reset_postdata();
endif; ?>
</div>
