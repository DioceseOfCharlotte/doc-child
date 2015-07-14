<?php
$connected = new WP_Query(array(
    'connected_type'  => 'employees_to_departments',
    'connected_items' => get_queried_object(),
    'nopaging'        => true,
) );

if ( $connected->have_posts() ) : ?>


          <section class="container mb2 mb3@md bg-white p0 mdl-shadow--2dp">
            <div class="mdl-card u-1/1">
              <div class="m3">
                <h3 class="h3 u-1/1">Personnel</h3>

<?php while ( $connected->have_posts() ) : $connected->the_post(); ?>

                <div class="section__circle-container grid__item u-1/5">
                  <div class="section__circle-container__circle bg-1"></div>
                </div>
                <div class="section__text grid__item u-4/5">
                  <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <p><?php echo p2p_get_meta( get_post()->p2p_id, 'role', true ); ?></p>
                </div>
<?php endwhile; ?>
              </div>
              <div class="mdl-card__actions border-top">
                <a href="#" class="btn">Read our features</a>
              </div>
            </div>
            <button class="mdl-js-button mdl-js-ripple-effect mdl-button--icon absolute top-0 right-0 z1 mr1 mt1" id="btn2">
              <i class="material-icons">more_vert</i>
            </button>
            <ul class="mdl-menu mdl-js-menu mdl-menu--bottom-right" for="btn2">
              <li class="mdl-menu__item">Lorem</li>
              <li class="mdl-menu__item" disabled>Ipsum</li>
              <li class="mdl-menu__item">Dolor</li>
            </ul>
          </section>

    <?php
    wp_reset_postdata();
endif;
