<?php
/**
 * Template Name: Home Custom Page
 */
get_header(); ?>

<main id="main" role="main">
  <?php do_action( 'sayara_automotive_before_slider' ); ?>

  <?php if( get_theme_mod('sayara_automotive_slider_arrows') != ''){ ?>
    <section id="slider">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
        <?php $slider_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'sayara_automotive_slide_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $slider_pages[] = $mod;
            }
          }
          if( !empty($slider_pages) ) :
          $args = array(
            'post_type' => 'page',
            'post__in' => $slider_pages,
            'orderby' => 'post__in'
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
          <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
            <?php the_post_thumbnail(); ?>
            <div class="carousel-caption">
              <div class="inner_carousel">
                <div class="box">
                  <div class="box-content">
                    <h1><?php the_title();?></h1>
                    <p><?php $excerpt = get_the_excerpt(); echo esc_html( sayara_automotive_string_limit_words( $excerpt, esc_attr(get_theme_mod('sayara_automotive_slider_excerpt_number','20')))); ?></p>
                    <div class="row">
                      <div class="col-lg-7 col-md-7">
                        <div class ="readbutton">
                          <a href="<?php the_permalink(); ?>"> <?php echo esc_html(get_theme_mod('sayara_automotive_slide_page',__('READ MORE','sayara-automotive'))); ?><i class="fas fa-angle-double-right"></i><span class="screen-reader-text"><?php esc_attr_e( 'READ MORE','sayara-automotive' );?></span></a>
                        </div>
                      </div>
                      <div class="col-lg-5 col-md-5">
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"><p>PR</p><p>EV</p></span>
                          <span class="screen-reader-text"><?php esc_attr_e( 'Previous','sayara-automotive' );?></span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"><p>NE</p><p>XT</p></span>
                          <span class="screen-reader-text"><?php esc_attr_e( 'Next','sayara-automotive' );?></span>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="shadow"></div>
                </div>
              </div>
            </div>
          </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>
        </div>
        <?php else : ?>
        <div class="no-postfound"></div>
          <?php endif;
        endif;?>
      </div> 
      <div class="clearfix"></div>
    </section> 
  <?php }?> 

  <?php do_action( 'sayara_automotive_after_slider' ); ?>

  <section id="about">
    <div class="container">
      <div class="row">
        <div class="tab-main col-lg-3 col-md-4">
          <ul class="nav tab-nav row m-0">
            <?php 
            for ($n=1; $n < 4; $n++) { 
              
              $postData1 =  get_theme_mod('sayara_automotive_tab_pages'.$n);
            if($postData1){
              $args = array( 'name' => esc_html($postData1 ,'sayara-automotive'));
              $new = new WP_Query($args); ?>
                <?php $j=1;
                  while ( $new->have_posts() ){
                      $new->the_post();  ?>
                        <li  class="outside nav-item col-lg-12 col-md-12">
                          <a class="pointer nav-link <?php if($n==1){ echo 'active'; } ?>" href="#blog_tab<?php echo esc_attr($n);?>" role="tab" data-toggle="tab">
                            <h3 ><?php the_title(); ?></h3><span class="screen-reader-text"><?php the_title(); ?></span>
                          </a>
                        </li>
                  <?php $j++;}
               wp_reset_query(); }?>
              
            <?php } ?>
          </ul>
        </div>
        <div class="tab-content blog_content col-lg-9 col-md-8">
          <?php 
          for ($count=1; $count < 4; $count++) { 
              
              $postData1 =  get_theme_mod('sayara_automotive_tab_pages'.$count);
            if($postData1){
              $args = array( 'name' => esc_html($postData1 ,'sayara-automotive'));
            $new = new WP_Query($args); 
            ?>
            <?php $i=1; while ( $new->have_posts() ){
                $new->the_post();  ?>
                <div role="tabpanel" class="tm_tab tab-pane fade <?php if($count==1){ echo 'in active show'; } ?>" id="blog_tab<?php echo esc_attr($count);?>">
                  <div class="about-text">
                    <div class="row">
                      <div class="<?php if(has_post_thumbnail()) { ?>col-lg-6 col-md-6"<?php } else { ?>col-lg-12 col-md-12"<?php } ?>">
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt();  ?></p>
                        <div class ="aboutbtn">
                          <a href="<?php the_permalink(); ?>"><?php esc_html_e('BROWSE MORE','sayara-automotive'); ?><span class="screen-reader-text"><?php esc_attr_e( 'BROWSE MORE','sayara-automotive' );?></span></a>
                        </div>
                      </div>
                      <?php if(has_post_thumbnail()) {?>
                        <div class="col-lg-6 col-md-6">
                          <div class="abt-image">
                            <?php the_post_thumbnail(); ?>
                          </div>
                        </div>
                      <?php }?>
                    </div>
                  </div>
                </div>
              <?php $i++; }
             wp_reset_query(); }?>
          <?php }?>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
  </section>

  <?php do_action( 'sayara_automotive_after_about' ); ?>

  <div class="container">
    <?php while ( have_posts() ) : the_post();?>
      <?php the_content(); ?>
    <?php endwhile; // End of the loop.
    wp_reset_postdata(); ?>
  </div>
</main>

<?php get_footer(); ?>