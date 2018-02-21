<?php
/**
 * The header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>

  </head>
  <body>
    <header>
    	<div class="wrapper">
    		<div class="logo-header">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/pelice-logo.png" alt="">
			</div>
    	</div>
		
		<nav class="nav-main">

	        <div class="wrapper">
	          <a id="resp-menu" class="responsive-menu" href="#"> Menu ☰</a>
	          <?php
	          $args = array(
	            'menu'              => 'Top Menu',
	            'menu_class'        => 'menu',
	            'container'         => '',
	          );
	          wp_nav_menu( $args );
	          ?>
	        </div>

	      </nav>

	      <script type="text/javascript">
	        jQuery(function ($) {
	          var touch 	= $('#resp-menu');
	          var menu 	= $('.menu');

	          $(touch).on('click', function(e) {
	            e.preventDefault();
	            menu.slideToggle();
	          });

	          $(window).resize(function(){
	            var w = $(window).width();
	            if(w > 767 && menu.is(':hidden')) {
	              menu.removeAttr('style');
	            }
	          });

	          $("a").each(function() {
	            if ($(this).attr('href').trim() == "<?php echo home_url(); ?>/register/") {
	                $(this).addClass("register-link");
	            }
	          });

	        });
	      </script>