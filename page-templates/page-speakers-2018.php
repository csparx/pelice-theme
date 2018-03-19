<?php /* Template Name: Speakers 2018 */ ?>
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
      'post_type'         => 'cns_speaker',
      'posts_per_page'    => 99999,
      'orderby'           => 'menu_order',
      'order'             => 'ASC',
      'tax_query' => array(
        array(
          'taxonomy' => 'cns_speaker_year',
          'field'    => 'slug',
          'terms'    => '2018',
        ),
      ),
    );
    $query = new WP_Query( $args );

    ?>
    <div id="speakers" class="flex speaker-posts-contain">
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

        <div class="speaker-item">
          <div class="speaker-pic">
            <?php echo get_the_post_thumbnail( $post_id, 'full' ); ?>
          </div>

          <?php echo the_title( '<b>', '</b>'); ?>

          <?php echo the_content(); ?>
        </div>


      <?php endwhile;
       wp_reset_postdata();
       else : ?>
       <p><?php _e( 'Coming soon.' ); ?></p>
       <?php endif; ?>

    </div>
  </div>
</div>


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
