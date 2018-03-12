<?php
/**
* Homepage slider
*/
?>
<div class="home-slider">

  <div class="center-absolute" id="logodiv">
      
  </div>

  <div class="flexslider">

    <?php
      global $post;
      $args = array(
        'posts_per_page'  => 2,
        'category_name'   => array('pelice-2018')
      );
      $myposts = get_posts($args);
      $count = count($myposts);
      $counter = 1;
      foreach( $myposts as $post ) : setup_postdata( $post );
      ?>
        <div class="slider-news">
          
          <div class="title-wrap">
            <a class="news-title" href="<?php the_permalink(); ?>">
              <p class="news-header"><?php echo the_title(); ?></p>
              <p class="news-excerpt"><?php echo wp_trim_words( get_the_excerpt(), 15, '...' ); ?></p>
              
            </a>
            
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/slider/slide<?php echo $counter; ?>.jpg" />
          </div>

        </div>
        <?php $counter++; ?>
        <?php
        if (--$count <= 0) {
          break;
        }
        ?>
      <?php
      endforeach;
      wp_reset_postdata();
      ?>
  </div>










    
  </div>



</div>

<script type="text/javascript">
// Can also be used with $(document).ready()
jQuery(function ($) {
  $('.flexslider').slick({
    infinite: true,
    fade: true,
    arrows: false,
    autoplay: true,
    autoplaySpeed: 5000,
  });

});
</script>