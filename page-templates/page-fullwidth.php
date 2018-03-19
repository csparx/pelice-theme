<?php /* Template Name: Full Width */ ?>
<?php
get_header();

?>




<?php
while ( have_posts() ) : the_post();
?>
<div id="banner-load">
  <h1 class="page-title">
    <?php the_title(); ?>
  </h1>
</div>

<div class="page-container">
  <?php custom_breadcrumbs(); ?>
  <div class="fullwidth-content">
    <?php the_content(); ?>
  </div>
</div>


<?php
endwhile; // End of the loop.

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
