<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
  <span itemprop="streetAddress">
    <?php the_field('doc_street'); ?><br>
    <?php the_field('doc_street_2'); ?><br>
  </span>
  <span itemprop="addressLocality"><?php the_field('doc_city'); ?></span>,
  <span itemprop="addressRegion"> <?php the_field('doc_state'); ?></span>
  <span itemprop="postalCode"> <?php the_field('doc_zip'); ?></span><br>
</div>
