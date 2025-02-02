<?php
/**
 * The template part for header
 *
 * @package VW Car Rental 
 * @subpackage vw_car_rental
 * @since VW Car Rental 1.0
 */
?>
<?php
  $vw_car_rental_search_hide_show = get_theme_mod( 'vw_car_rental_search_hide_show' );
  if ( 'Disable' == $vw_car_rental_search_hide_show ) {
   $colmd = 'col-lg-7 col-md-7';
  } else { 
   $colmd = 'col-lg-6 col-md-6 col-6';
  } 
?>
<div class="main-header <?php if( get_theme_mod( 'vw_car_rental_sticky_header') != '') { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
    <div class="container header-border">
      <div class="row m-0">
        <div class="col-lg-3 col-md-3">
          <div class="logo">
            <?php if ( has_custom_logo() ) : ?>
              <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php endif; ?>
            <?php $blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $blog_info ) ) : ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <?php else : ?>
                  <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php endif; ?>
              <?php endif; ?>
              <?php
                $description = get_bloginfo( 'description', 'display' );
                if ( $description || is_customize_preview() ) :
              ?>
              <p class="site-description">
                <?php echo $description; ?>
              </p>
            <?php endif; ?>
          </div>
        </div>
        <div class="<?php echo esc_html( $colmd ); ?> p-0">
          <?php get_template_part( 'template-parts/header/navigation' ); ?>
        </div>
        <?php if ( 'Disable' != $vw_car_rental_search_hide_show ) {?>
          <div class="col-lg-1 col-md-1 col-6">
            <div class="search-box">
              <span><a href="#"><i class="fas fa-search"></i></a></span>
            </div>
          </div>
        <?php } ?>
        <div class="col-lg-2 col-md-2">
          <div class="phone-no">
            <?php if(get_theme_mod('vw_car_rental_phone') != ''){ ?>
              <span><i class="<?php echo esc_html(get_theme_mod('vw_car_rental_phone_icon','fas fa-phone')); ?>"></i><?php echo esc_html(get_theme_mod('vw_car_rental_phone',''));?></span>
            <?php }?>
          </div>
        </div>
      </div>
      <div class="serach_outer">
        <div class="closepop"><a href="#"><i class="far fa-window-close"></i></a></div>
        <div class="serach_inner">
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
</div>