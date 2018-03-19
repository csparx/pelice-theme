<?php /* Template Name: Register */ ?>
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
    <div id="wufoo-x1n6zh8z0lv10ti">
    Fill out my <a href="https://hattonbrown.wufoo.com/forms/x1n6zh8z0lv10ti">online form</a>.
    </div>
    <script type="text/javascript">var x1n6zh8z0lv10ti;(function(d, t) {
    var s = d.createElement(t), options = {
    'userName':'hattonbrown',
    'formHash':'x1n6zh8z0lv10ti',
    'autoResize':true,
    'height':'1220',
    'async':true,
    'host':'wufoo.com',
    'header':'show',
    'ssl':true};
    s.src = ('https:' == d.location.protocol ? 'https://' : 'http://') + 'www.wufoo.com/scripts/embed/form.js';
    s.onload = s.onreadystatechange = function() {
    var rs = this.readyState; if (rs) if (rs != 'complete') if (rs != 'loaded') return;
    try { x1n6zh8z0lv10ti = new WufooForm();x1n6zh8z0lv10ti.initialize(options);x1n6zh8z0lv10ti.display(); } catch (e) {}};
    var scr = d.getElementsByTagName(t)[0], par = scr.parentNode; par.insertBefore(s, scr);
    })(document, 'script');</script>

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
