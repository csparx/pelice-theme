<?php /* Template Name: Sponsors */ ?>
<?php
get_header();

?>




<?php
?>
<div id="banner-load">
  <h1 class="page-title">
    <?php the_title(); ?>
  </h1>
</div>

<div class="page-container">
  <?php custom_breadcrumbs(); ?>
  <div class="fullwidth-content">

    <?php
    $args = array(
      'post_type'         => 'cns_sponsor',
      'posts_per_page'    => 99999,
      'orderby'           => 'title',
      'order'             => 'ASC',
    );
    $query = new WP_Query( $args );

    ?>
    <div id="sponsors" class="flex sponsor-posts-contain">
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="sponsor-item">
          <div class="sponsor-logo">
            <?php echo the_title( '<p style="display:none;">', '</p>'); ?>
            <?php echo get_the_post_thumbnail( $post_id, 'full' ); ?>
            <?php if ( has_term( 'gold', 'cns_sponsor_level' ) ){
              echo '<span class="gold-sponsor sponsor-level">GOLD</span>';
            } elseif ( has_term( 'silver', 'cns_sponsor_level' ) ){
              echo '<span class="silver-sponsor sponsor-level">SILVER</span>';
            } elseif ( has_term( 'bronze', 'cns_sponsor_level' ) ){
              echo '<span class="bronze-sponsor sponsor-level">BRONZE</span>';
            } else{}
            ?>
          </div>

          <?php echo the_title( '<b>', '</b>'); ?>

          <?php echo the_content(); ?>
        </div>


      <?php endwhile;
       wp_reset_postdata();
       else : ?>
       <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
       <?php endif; ?>

    </div>
  </div>
</div>
<script type="text/javascript">
  jQuery(function ($) {
    $('#sponsors').listnav();
  });
</script>

<?php
get_footer();
?>






<!--New images on load -->
<script type="text/javascript">
  jQuery(function ($) {
    //Add your images, we'll set the path in the next step
    var images = ['banner-1.jpg', 'banner-2.jpg', 'banner-3.jpg', 'banner-4.jpg', 'banner-5.jpg', 'banner-6.jpg'];

    // Build the img, then do a bit of maths to randomize load and append to a div. Add a touch off css to fade them badboys in all sexy like.
    $('<img class="fade-in full-banner" src="<?php echo get_template_directory_uri(); ?>/assets/img/' + images[Math.floor(Math.random() * images.length)] + '">').appendTo('#banner-load');
  });
</script>
