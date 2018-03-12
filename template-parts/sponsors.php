<div class="sponsor-container">

  <a href="<?php home_url(); ?>/exhibitor-sponsors/"><h1 class="center-text sponsor-title">Sponsors</h1></a>
  <hr class="white-line" />

    <div class="sponsors-carousel">

        <?php
        global $post;

        $args = array(
          'posts_per_page'  => 9999,
          'post_type'       => 'cns_sponsor',
          'tax_query'       => array(
            array(
              'taxonomy'    => 'cns_sponsor_level',
              'field'       => 'slug',
              'terms'       => array('gold'),
            ),
          ),
        );
        $myposts = get_posts($args);
        $count = count($myposts);
        foreach( $myposts as $post ) : setup_postdata( $post );
        ?>
          <div>
            <?php echo get_the_post_thumbnail( $post_id );
            echo '<span class="gold-sponsor sponsor-level">GOLD</span>';
            ?>
          </div>
        <?php
        endforeach;

        $args = array(
          'posts_per_page'  => 9999,
          'post_type'       => 'cns_sponsor',
          'tax_query'       => array(
            array(
              'taxonomy'    => 'cns_sponsor_level',
              'field'       => 'slug',
              'terms'       => array('silver'),
            ),
          ),
        );
        $myposts = get_posts($args);
        $count = count($myposts);
        foreach( $myposts as $post ) : setup_postdata( $post );
        ?>
          <div>
            <?php echo get_the_post_thumbnail( $post_id );
            echo '<span class="silver-sponsor sponsor-level">SILVER</span>';
            ?>
          </div>
        <?php
        endforeach;

        $args = array(
          'posts_per_page'  => 9999,
          'post_type'       => 'cns_sponsor',
          'tax_query'       => array(
            array(
              'taxonomy'    => 'cns_sponsor_level',
              'field'       => 'slug',
              'terms'       => array('bronze'),
            ),
          ),
        );
        $myposts = get_posts($args);
        $count = count($myposts);
        foreach( $myposts as $post ) : setup_postdata( $post );
        ?>
          <div>
            <?php echo get_the_post_thumbnail( $post_id );
            echo '<span class="bronze-sponsor sponsor-level">BRONZE</span>';
            ?>
          </div>
        <?php
        endforeach;
        ?>

    </div>

  <a class="white-btn" href="<?php echo home_url(); ?>/exhibitor-sponsors/">View All</a>

</div>
<script type="text/javascript">
  jQuery(function ($) {
    $('.sponsors-carousel').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 3000,
      prevArrow:"<img class='a-left control-c prev slick-prev' src='<?php echo get_template_directory_uri(); ?>/assets/img/left-arrow-white.png'>",
      nextArrow:"<img class='a-right control-c next slick-next' src='<?php echo get_template_directory_uri(); ?>/assets/img/right-arrow-white.png'>",
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
       // settings: "unslick"
       // instead of a settings object
     ]
    });
  });
</script>
