<?php

	$automobile_car_dealer_first_color = get_theme_mod('automobile_car_dealer_first_color');

	$custom_css ='';
	/*----------- Global First Color -----------*/

	if($automobile_car_dealer_first_color != false){
		$custom_css .='input[type="submit"]:hover, #sidebar button, .slide-button i, .appointbtn, .primary-navigation ul ul a:hover, .primary-navigation ul ul a:focus, .postbtn i, .blog-section .section-title a:after, .page-content .read-moresec a.button:hover, #comments input[type="submit"].submit:hover, #comments a.comment-reply-link, #sidebar h3:after, #sidebar input[type="submit"]:hover, #sidebar .tagcloud a, .widget_calendar tbody a, .copyright-wrapper, .footer-wp h3:after, .footer-wp input[type="submit"], .footer-wp .tagcloud a:hover , .pagination a:hover, .pagination .current, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, #navbar-header .socialbox, #navbar-header .socialbox{';
				$custom_css .='background-color: '.esc_html($automobile_car_dealer_first_color).';';
		$custom_css .='}';
	}
	if($automobile_car_dealer_first_color != false){
		$custom_css .='a, #header .socialbox i:hover, .metabox a:hover, .postbtn a, .nav-previous a ,.nav-next a, p.logged-in-as a, nav.navigation.post-navigation a:hover , .tags a, #sidebar ul li a:hover, .footer-wp li a:hover, h2.entry-title, h2.page-title, #project i, .woocommerce-message::before, .woocommerce-info a, td.product-name a, a.shipping-calculator-button, span.posted_in a, code, .primary-navigation a:hover{';
				$custom_css .='color: '.esc_html($automobile_car_dealer_first_color).';';
		$custom_css .='}';
	}
	if($automobile_car_dealer_first_color != false){
		$custom_css .='#blog_sec .sticky, .page-content .read-moresec a.button:hover{';
				$custom_css .='border-color: '.esc_html($automobile_car_dealer_first_color).';';
		$custom_css .='}';
	}
	if($automobile_car_dealer_first_color != false){
		$custom_css .='.woocommerce-message{';
				$custom_css .='border-top-color: '.esc_html($automobile_car_dealer_first_color).';';
		$custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'automobile_car_dealer_width_layout_options','Default');
    if($theme_lay == 'Default'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}else if($theme_lay == 'Container Layout'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
		$custom_css .='.page-template-custom-home-page header{';
			$custom_css .='position: relative;';
		$custom_css .='}';
	}else if($theme_lay == 'Box Layout'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
		$custom_css .='.page-template-custom-home-page header{';
			$custom_css .='position: relative;';
		$custom_css .='}';
		$custom_css .='.page-template-custom-home-page #header{';
			$custom_css .='left: 15px; width: 97.3%;';
		$custom_css .='}';
		$custom_css .='
		@media screen and (max-width:768px){
			.page-template-custom-home-page #header{';
				$custom_css .=' width: 100%;';
		$custom_css .='} }';
	}

	/*----------Slider Content Layout --------------*/

	$theme_lay = get_theme_mod( 'automobile_car_dealer_slider_content_layout','Center');
    if($theme_lay == 'Left'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, .slide-button {';
			$custom_css .='text-align:left; ';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, .slide-button {';
			$custom_css .='text-align:center; ';
		$custom_css .='}';
	}else if($theme_lay == 'Right'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, .slide-button {';
			$custom_css .='text-align:right; ';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$theme_lay = get_theme_mod( 'automobile_car_dealer_slider_opacity','0.7');
	if($theme_lay == '0'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($theme_lay == '0.1'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($theme_lay == '0.2'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($theme_lay == '0.3'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($theme_lay == '0.4'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($theme_lay == '0.5'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($theme_lay == '0.6'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($theme_lay == '0.7'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($theme_lay == '0.8'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($theme_lay == '0.9'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}
