<div class="flex footer-container">
  
  <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/pelice-logo.png" />

  <?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) { ?>
  	<ul id="sidebar">
  		<?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
  	</ul>
  <?php } ?>
  <?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) { ?>
    <ul id="sidebar">
      <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
    </ul>
  <?php } ?>
  <?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) { ?>
    <ul id="sidebar">
      <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
    </ul>
  <?php } ?>
  <?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) { ?>
    <ul id="sidebar">
      <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
    </ul>
  <?php } ?>

</div>

<div class="flex dark-bg justify-right">
  <div class="wrapper">
    <p class="copyright"> Copyright <?php echo date("Y"); ?>. All Rights Reserved.</p>
  </div>
</div>

