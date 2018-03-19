<div class="white-bg">
	<h1 class="news-header">Latest News</h1>
	<div class="latest-news">
		<?php
		  global $post;
		  $args = array(
		    'posts_per_page'  => 4,
		    'category_name'   => array('bio-2018','bio-2016')
		  );
		  $myposts = get_posts($args);
		  $count = count($myposts);
		  foreach( $myposts as $post ) : setup_postdata( $post );
		  ?>
		    <div class="news-item">

		      <div class="latest-thumb">
		        <?php echo get_the_post_thumbnail( $post_id, 'news-homepage' ); ?>
		      </div>

		      <div class="news-info">
		        <a class="news-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		        <?php the_excerpt(); ?>

		      </div>

		    </div>
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