<?php
/**
 * Template Name: Custom Home
 */
get_header(); ?>

<main id="maincontent" role="main">
	<?php do_action( 'vw_automobile_lite_above_slider' ); ?>

	<?php if( get_theme_mod('vw_automobile_lite_slider_hide_show',true) != ''){ ?>
	  	<section class="slider">
		    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
		      <?php $slider_page = array();
		        for ( $count = 1; $count <= 4; $count++ ) {
		          $mod = intval( get_theme_mod( 'vw_automobile_lite_slider_page' . $count ));
		          if ( 'page-none-selected' != $mod ) {
		            $slider_page[] = $mod;
		          }
		        }
		        if( !empty($slider_page) ) :
		          $args = array(
		            'post_type' => 'page',
		            'post__in' => $slider_page,
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
		                <h1><?php the_title(); ?></h1>
		                <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_automobile_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_automobile_lite_slider_excerpt_number','30')))); ?></p>
		                <div class="more-btn">              
		                  	<a href="<?php the_permalink(); ?>"><?php esc_html_e('DISCOVER MORE','vw-automobile-lite'); ?><span class="screen-reader-text"><?php esc_html_e( 'DISCOVER MORE','vw-automobile-lite' );?></span></a>
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
		      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-caret-left"></i></span>
		        <span class="screen-reader-text"><?php esc_attr_e( 'Previous','vw-automobile-lite' );?></span>
		      </a>
		      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-caret-right"></i></span>
		        <span class="screen-reader-text"><?php esc_attr_e( 'Next','vw-automobile-lite' );?></span>
		      </a>
		    </div>  
	    	<div class="clearfix"></div>
	  	</section> 
	<?php }?>

	<?php do_action( 'vw_automobile_lite_below_slider' ); ?>

	<?php if( get_theme_mod( 'vw_automobile_lite_title') != '' || get_theme_mod( 'vw_automobile_lite_choose_us_category' )!= ''){ ?>
		<section class="darkbox choose_us" >
			<?php if( get_theme_mod('vw_automobile_lite_title') != ''){ ?>
			    <div class="heading-line">
			      	<h2><?php echo esc_html(get_theme_mod('vw_automobile_lite_title','')); ?> </h2>
			      	<div class="images_border">
			          	<img src="<?php echo esc_url( get_theme_mod('',get_template_directory_uri().'/images/car-border.png') ); ?>" alt="Border Image">
			        </div>
			    </div>
		    <?php } ?>
			<div class="container">
				<div class="row">
					<?php 
						$catData1=  get_theme_mod('vw_automobile_lite_choose_us_category');
              			if($catData1){ 
					    $page_query = new WP_Query(array( 'category_name' => esc_html($catData1 ,'vw-automobile-lite')));?>
					  	<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
					  		<div class="col-lg-4 col-md-4">
					    		<div class="choose-img"><?php if(has_post_thumbnail()) { ?><?php the_post_thumbnail(); ?><?php } ?></div>
					    		<a href="<?php the_permalink(); ?>">
					    			<h3><?php the_title(); ?></h3><span class="screen-reader-text"><?php the_title(); ?></span>
					    		</a>
					    		<p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_automobile_lite_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_automobile_lite_services_excerpt_number','30')))); ?></p>
						    </div>
						<?php endwhile; 
						wp_reset_postdata();}
					?>
				</div>
				<div class="clearfix"></div>
			</div>
		</section>
	<?php }?>

	<?php do_action( 'vw_automobile_lite_below_choose_us' ); ?>

	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
	        <?php the_content(); ?>
	    <?php endwhile; // end of the loop. ?>
	</div>
</main>

<?php get_footer(); ?>