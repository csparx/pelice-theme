<div class="darkblue-bg">
  <div class="speaker-container">

    <a href="<?php home_url(); ?>/bio-2018/speakers/"><h1 class="speaker-title">Speakers</h1></a>

      <div class="speakers-carousel">

          <?php
          global $post;
          $args = array(
            'posts_per_page'  => 9999,
            'order_by'        => 'rand',
            'post_type'       => 'cns_speaker',
            'tax_query'       => array(
              array(
                'taxonomy'    => 'cns_speaker_year',
                'field'       => 'slug',
                'terms'       => array('2018'),
              ),
            ),
          );
          $myposts = get_posts($args);
          $count = count($myposts);
          foreach( $myposts as $post ) : setup_postdata( $post );
          ?>
            <div>
              <?php
              echo get_the_post_thumbnail( $post_id );
              echo the_title('<p class="speaker-name">', '</p>');
              echo the_content();
              ?>
            </div>
          <?php
          endforeach;
          wp_reset_postdata();
          ?>

      </div>

  </div>




  <script type="text/javascript">
    jQuery(function ($) {

      $('.speakers-carousel').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: false,
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
            breakpoint: 550,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1
            }
          },
       ]
      });

    });
  </script>

</div>
