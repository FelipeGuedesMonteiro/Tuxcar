<?php
/**
 * Displays footer widgets if assigned
 */

?>
<?php //Set widget areas classes based on user choice
    $widget_areas = get_theme_mod('sayara_automotive_footer_widget', '4');
    if ($widget_areas == '3') {
      $cols = 'col-lg-4 col-md-4';
    } elseif ($widget_areas == '4') {
      $cols = 'col-lg-3 col-md-3';
    } elseif ($widget_areas == '2') {
      $cols = 'col-lg-6 col-md-6';
    } else {
      $cols = 'col-lg-12 col-md-12';
    }
?>
<aside class="widget-area">
	<div class="row">
		<?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
	      <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
	        <?php dynamic_sidebar( 'footer-1'); ?>
	      </div>
	    <?php endif; ?> 
	    <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
	      <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
	        <?php dynamic_sidebar( 'footer-2'); ?>
	      </div>
	    <?php endif; ?> 
	    <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
	      <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
	        <?php dynamic_sidebar( 'footer-3'); ?>
	      </div>
	    <?php endif; ?> 
	    <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
	      <div class="sidebar-column <?php echo esc_attr( $cols ); ?>">
	        <?php dynamic_sidebar( 'footer-4'); ?>
	      </div>
	    <?php endif; ?>
	</div>
</aside>