<?php

add_action( 'admin_menu', 'sayara_automotive_gettingstarted' );
function sayara_automotive_gettingstarted() {
	add_theme_page( esc_html__('About Theme', 'sayara-automotive'), esc_html__('About Theme', 'sayara-automotive'), 'edit_theme_options', 'sayara-automotive-guide-page', 'sayara_automotive_guide');   
}

function sayara_automotive_admin_theme_style() {
   wp_enqueue_style('sayara-automotive-custom-admin-style', get_template_directory_uri() . '/inc/dashboard/get_started_info.css');
   wp_enqueue_script('tabs', get_template_directory_uri() . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'sayara_automotive_admin_theme_style');

function sayara_automotive_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<h2><?php esc_html_e( 'Thanks for installing Sayara Automotive Lite Theme', 'sayara-automotive' ) ?> </h2>
			<p><?php esc_html_e( "Please Click on the link below to know the theme setup information", 'sayara-automotive' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=sayara-automotive-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Get Started ', 'sayara-automotive' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'sayara_automotive_notice');


/**
 * Theme Info Page
 */
function sayara_automotive_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'sayara-automotive' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
				<div class="intro">
					<div class="pad-box">
						<h2 align="center"><?php esc_html_e( 'Welcome to Sayara Automotive Theme', 'sayara-automotive' ); ?>
						<span class="version" align="center">Version: <?php echo esc_html($theme['Version']);?></span></h2>	
						</span>
						<div class="powered-by">
							<p align="center"><strong><?php esc_html_e( 'Theme created by ThemesEye', 'sayara-automotive' ); ?></strong></p>
							<p align="center">
								<img role="img" class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>

			<div class="tab">
			  <button role="tab" class="tablinks" onclick="openCity(event, 'lite_theme')">Getting Started</button>		  
			  <button role="tab" class="tablinks" onclick="openCity(event, 'pro_theme')">Get Premium</button>
			</div>

			<!-- Tab content -->
			<div id="lite_theme" class="tabcontent open">
				<h2 class="tg-docs-section intruction-title" id="section-4" align="center"><?php esc_html_e( '1). Sayara Automotive Lite Theme', 'sayara-automotive' ); ?></h2>
				<div class="row">
					<div class="col-md-5">
						<div class="pad-box">
	              			<img role="img" class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
	              		 </div> 
					</div>
					<div class="theme-instruction-block col-md-7">
						<div class="pad-box">
		                    <p><?php esc_html_e( 'Sayara Automotive is a competent, versatile, well-structured and powerful automotive WordPress theme for car dealers, automobile manufacturer, car and bike showrooms, cab services, car rentals, ATV and RV manufacturer, car spare parts store, aircrafts manufacturing company, travel trailer, camper, forklifts & lift trucks supplier, car review site, garage, second hand car seller, snow motorcycle dealers, cargo hubs, car lifters, car washing centres and all such websites. It can be used as a portfolio and blog by creative vehicle designer and maker. It has a perfect professional look and a thoughtfully designed homepage to make the best automobile website in the market. Sayara Automotive is responsive to changing screen sizes of devices and tested for cross-browser compatibility. It can be translated into many different languages with full support for RTL languages. It is coded with WordPress standards and based on recently launched WordPress version for a bug-free website. Its background is simple to understand and can be used by anyone with no coding knowledge. It has smart use of call to action (CTA) button and impressive homepage slider to make the theme more impactful.  ', 'sayara-automotive' ); ?></p>
							<ol>
								<li><?php esc_html_e( 'Start','sayara-automotive'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','sayara-automotive'); ?></a> <?php esc_html_e( 'your website.','sayara-automotive'); ?> </li>
								<li><?php esc_html_e( 'Sayara Automotive','sayara-automotive'); ?> <a target="_blank" href="<?php echo esc_url( SAYARA_AUTOMOTIVE_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','sayara-automotive'); ?></a> </li>
							</ol>
	                    </div>
	                </div>
				</div><br><br>
				
	        </div>
	        <div id="pro_theme" class="tabcontent">
				<h2 class="dashboard-install-title" align="center"><?php esc_html_e( '2.) Premium Theme Information.','sayara-automotive'); ?></h2>
            	<div class="row">
					<div class="col-md-7">
						<img role="img" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
						<div class="pro-links" >
					    	<a href="<?php echo esc_url( SAYARA_AUTOMOTIVE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'sayara-automotive'); ?></a>
							<a href="<?php echo esc_url( SAYARA_AUTOMOTIVE_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'sayara-automotive'); ?></a>
							<a href="<?php echo esc_url( SAYARA_AUTOMOTIVE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'sayara-automotive'); ?></a>
						</div>
						<div class="pad-box">
							<h3><?php esc_html_e( 'Pro Theme Description','sayara-automotive'); ?></h3>
                    		<p class="pad-box-p"><?php esc_html_e( 'This automotive WordPress theme is readily responsive, social media linked, multilingual, all browsers compatible, SEO friendly and retina ready. It is bundled with a range of beautiful Font Awesome icons and some much needed shortcodes to include them in various functional blocks throughout the theme. It is customizable to the deepest core to change its background, colour, font, logo, menu style, slider settings and various other components through theme customizer which does not require you to be a coding wizard. This automotive theme offers three different website layouts, multiple styles of header and footer, two blog layouts, simple and mega menu option and unlimited colour choices. ', 'sayara-automotive' ); ?><p>
                    	</div>
					</div>
					<div class="col-md-5 install-plugin-right">
						<div class="pad-box">								
							<h3><?php esc_html_e( 'Pro Theme Features','sayara-automotive'); ?></h3>
							<div class="dashboard-install-benefit">
								<ul>
									<li><?php esc_html_e( 'Easy install 10 minute setup Themes','sayara-automotive'); ?></li>
									<li><?php esc_html_e( 'Multiplue Domain Usage','sayara-automotive'); ?></li>
									<li><?php esc_html_e( 'Premium Technical Support','sayara-automotive'); ?></li>
									<li><?php esc_html_e( 'FREE Shortcodes','sayara-automotive'); ?></li>
									<li><?php esc_html_e( 'Multiple page templates','sayara-automotive'); ?></li>
									<li><?php esc_html_e( 'Google Font Integration','sayara-automotive'); ?></li>
									<li><?php esc_html_e( 'Customizable Colors','sayara-automotive'); ?></li>
									<li><?php esc_html_e( 'Theme customizer ','sayara-automotive'); ?></li>
									<li><?php esc_html_e( 'Documention','sayara-automotive'); ?></li>
									<li><?php esc_html_e( 'Unlimited Color Option','sayara-automotive'); ?></li>
									<li><?php esc_html_e( 'Plugin Compatible','sayara-automotive'); ?></li>
									<li><?php esc_html_e( 'Social Media Integration','sayara-automotive'); ?></li>
									<li><?php esc_html_e( 'Incredible Support','sayara-automotive'); ?></li>
									<li><?php esc_html_e( 'Eye Appealing Design','sayara-automotive'); ?></li>
									<li><?php esc_html_e( 'Simple To Install','sayara-automotive'); ?></li>
									<li><?php esc_html_e( 'Fully Responsive ','sayara-automotive'); ?></li>
									<li><?php esc_html_e( 'Translation Ready','sayara-automotive'); ?></li>
									<li><?php esc_html_e( 'Custom Page Templates ','sayara-automotive'); ?></li>
									<li><?php esc_html_e( 'WooCommerce Integration','sayara-automotive'); ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
          	<div class="dashboard__blocks">
				<div class="row">
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Get Support','sayara-automotive'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( SAYARA_AUTOMOTIVE_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','sayara-automotive'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( SAYARA_AUTOMOTIVE_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','sayara-automotive'); ?></a></li>
						</ol>
					</div>

					<div class="col-md-3">
						<h3><?php esc_html_e( 'Getting Started','sayara-automotive'); ?></h3>
						<ol>
							<li><?php esc_html_e( 'Start','sayara-automotive'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','sayara-automotive'); ?></a> <?php esc_html_e( 'your website.','sayara-automotive'); ?> </li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Help Docs','sayara-automotive'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( SAYARA_AUTOMOTIVE_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','sayara-automotive'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( SAYARA_AUTOMOTIVE_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','sayara-automotive'); ?></a></li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Buy Premium','sayara-automotive'); ?></h3>
						<ol>
							<a href="<?php echo esc_url( SAYARA_AUTOMOTIVE_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'sayara-automotive'); ?></a>
						</ol>
					</div>
				</div>
			</div>
		</div>
		
	</div>

<?php
}?>