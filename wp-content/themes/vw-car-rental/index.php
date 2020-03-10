<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package VW Car Rental
 */

get_header(); ?>

<main id="maincontent" role="main">
  <div class="middle-align container">
    <?php
        $theme_lay = get_theme_mod( 'vw_car_rental_theme_options','Right Sidebar');
        if($theme_lay == 'Left Sidebar'){ ?>
        <div class="row m-0">
          <div class="col-lg-4 col-md-4" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
          <div id="our-services" class="services col-lg-8 col-md-8">
                    
            <?php if ( have_posts() ) :
              /* Start the Loop */
                
                while ( have_posts() ) : the_post();

                  get_template_part( 'template-parts/content',get_post_format()); 
                
                endwhile;

                else :

                  get_template_part( 'no-results' ); 

                endif; 
            ?>
            <div class="navigation">
              <?php
                  // Previous/next page navigation.
                  the_posts_pagination( array(
                      'prev_text'          => __( 'Previous page', 'vw-car-rental' ),
                      'next_text'          => __( 'Next page', 'vw-car-rental' ),
                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-car-rental' ) . ' </span>',
                  ) );
              ?>
                <div class="clearfix"></div>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
    <?php }else if($theme_lay == 'Right Sidebar'){ ?>
        <div class="row m-0">
          <div id="our-services" class="services col-lg-8 col-md-8">
                      
            <?php if ( have_posts() ) :
              /* Start the Loop */
                
                while ( have_posts() ) : the_post();

                  get_template_part( 'template-parts/content',get_post_format()); 
                
                endwhile;

                else :

                  get_template_part( 'no-results' ); 

                endif; 
            ?>
            <div class="navigation">
              <?php
                  // Previous/next page navigation.
                  the_posts_pagination( array(
                      'prev_text'          => __( 'Previous page', 'vw-car-rental' ),
                      'next_text'          => __( 'Next page', 'vw-car-rental' ),
                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-car-rental' ) . ' </span>',
                  ) );
              ?>
                <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-lg-4 col-md-4" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
        </div>
    <?php }else if($theme_lay == 'One Column'){ ?>
        <div id="our-services" class="services">
                    
          <?php if ( have_posts() ) :
            /* Start the Loop */
              
              while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content',get_post_format()); 
              
              endwhile;

              else :

                get_template_part( 'no-results' ); 

              endif; 
          ?>
          <div class="navigation">
            <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'vw-car-rental' ),
                    'next_text'          => __( 'Next page', 'vw-car-rental' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-car-rental' ) . ' </span>',
                ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
    <?php }else if($theme_lay == 'Three Columns'){ ?>
        <div class="row m-0">
          <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
          <div id="our-services" class="services col-lg-6 col-md-6">
                      
            <?php if ( have_posts() ) :
              /* Start the Loop */
                
                while ( have_posts() ) : the_post();

                  get_template_part( 'template-parts/content',get_post_format()); 
                
                endwhile;

                else :

                  get_template_part( 'no-results' ); 

                endif; 
            ?>
            <div class="navigation">
              <?php
                  // Previous/next page navigation.
                  the_posts_pagination( array(
                      'prev_text'          => __( 'Previous page', 'vw-car-rental' ),
                      'next_text'          => __( 'Next page', 'vw-car-rental' ),
                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-car-rental' ) . ' </span>',
                  ) );
              ?>
                <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
        </div>
    <?php }else if($theme_lay == 'Four Columns'){ ?> 
        <div class="row m-0">
          <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
          <div id="our-services" class="services col-lg-3 col-md-3">
                      
            <?php if ( have_posts() ) :
              /* Start the Loop */
                
                while ( have_posts() ) : the_post();

                  get_template_part( 'template-parts/content',get_post_format()); 
                
                endwhile;

                else :

                  get_template_part( 'no-results' ); 

                endif; 
            ?>
            <div class="navigation">
              <?php
                  // Previous/next page navigation.
                  the_posts_pagination( array(
                      'prev_text'          => __( 'Previous page', 'vw-car-rental' ),
                      'next_text'          => __( 'Next page', 'vw-car-rental' ),
                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-car-rental' ) . ' </span>',
                  ) );
              ?>
                <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-2');?></div>
          <div class="col-lg-3 col-md-3" id="sidebar"><?php dynamic_sidebar('sidebar-3');?></div>
        </div>
    <?php }else if($theme_lay == 'Grid Layout'){ ?>
        <div class="row m-0">
          <div id="our-services" class="services col-lg-9">
            <div class="row">
              <?php if ( have_posts() ) :
                /* Start the Loop */
                  
                  while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/grid-layout' ); 
                  
                  endwhile;

                  else :

                    get_template_part( 'no-results' ); 

                  endif; 
              ?>
            </div>
            <div class="navigation">
              <?php
                  // Previous/next page navigation.
                  the_posts_pagination( array(
                      'prev_text'          => __( 'Previous page', 'vw-car-rental' ),
                      'next_text'          => __( 'Next page', 'vw-car-rental' ),
                      'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-car-rental' ) . ' </span>',
                  ) );
              ?>
                <div class="clearfix"></div>
            </div>
          </div>
          <div class="col-lg-3" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
        </div>
    <?php }else{ ?>
      <div class="row m-0">
        <div id="our-services" class="services col-lg-8 col-md-8">
          <?php if ( have_posts() ) :
            /* Start the Loop */
              
              while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content',get_post_format()); 
              
              endwhile;

              else :

                get_template_part( 'no-results' ); 

              endif; 
          ?>
          <div class="navigation">
            <?php
                // Previous/next page navigation.
                the_posts_pagination( array(
                    'prev_text'          => __( 'Previous page', 'vw-car-rental' ),
                    'next_text'          => __( 'Next page', 'vw-car-rental' ),
                    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'vw-car-rental' ) . ' </span>',
                ) );
            ?>
              <div class="clearfix"></div>
          </div>
        </div>
        <div class="col-lg-4 col-md-4" id="sidebar"><?php dynamic_sidebar('sidebar-1');?></div>
      </div>
    <?php } ?>
    <div class="clearfix"></div>
  </div>
</main>

<?php get_footer(); ?>