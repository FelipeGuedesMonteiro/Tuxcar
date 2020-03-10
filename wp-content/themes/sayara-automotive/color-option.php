<?php
	
	$sayara_automotive_theme_color_first = get_theme_mod('sayara_automotive_theme_color_first');

	$custom_css = '';

	if($sayara_automotive_theme_color_first != false){
		$custom_css .='#masthead, .social-icon i:hover, #slider span.carousel-control-prev-icon:hover,#slider span.carousel-control-next-icon:hover, .aboutbtn a, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, .post-link a, .post-info, #sidebox h2, button.search-submit:hover, .search-form button.search-submit, .copyright, .widget .tagcloud a:hover,.widget .tagcloud a:focus,.widget.widget_tag_cloud a:hover,.widget.widget_tag_cloud a:focus,.wp_widget_tag_cloud a:hover,.wp_widget_tag_cloud a:focus, .prev.page-numbers:focus,.next.page-numbers:focus, button,input[type="button"],input[type="submit"],.tags p a,.post-navigation .nav-next a,.post-navigation .nav-previous a,.comment-reply-link{';
			$custom_css .='background-color: '.esc_html($sayara_automotive_theme_color_first).';';
		$custom_css .='}';
	}
	if($sayara_automotive_theme_color_first != false){
		$custom_css .='a, .contact-details i, .main-navigation li li:focus > a,.main-navigation li li:hover > a,  .main-navigation ul ul li a,.blogger h2 a,#sidebox ul li a:hover, .text code{';
			$custom_css .='color: '.esc_html($sayara_automotive_theme_color_first).';';
		$custom_css .='}';
	}
	if($sayara_automotive_theme_color_first != false){
		$custom_css .='#slider span.carousel-control-prev-icon:hover,#slider span.carousel-control-next-icon:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .readbutton a:hover,.aboutbtn a:hover,.main-navigation ul ul,.post-link a:hover{';
			$custom_css .='border-color: '.esc_html($sayara_automotive_theme_color_first).';';
		$custom_css .='}';
	}
	if($sayara_automotive_theme_color_first != false){
		$custom_css .='.main-navigation ul ul li:hover{';
			$custom_css .='border-left-color: '.esc_html($sayara_automotive_theme_color_first).';';
		$custom_css .='}';
	}
	if($sayara_automotive_theme_color_first != false){
		$custom_css .='.site-footer ul li a:hover, #about .outside:hover, #about .pointer:hover, a.pointer.nav-link.active.show, #about .outside:focus-within{';
			$custom_css .='color: '.esc_html($sayara_automotive_theme_color_first).'!important;';
		$custom_css .='}';
	}
	if($sayara_automotive_theme_color_first != false){
		$custom_css .='#about .outside:hover, #about .pointer:hover, a.pointer.nav-link.active.show, #about .outside:focus-within{';
			$custom_css .='background-color: '.esc_html($sayara_automotive_theme_color_first).'!important;';
		$custom_css .='}';
	}

	/*---------------------------Theme color option-------------------*/

	$sayara_automotive_theme_color_second = get_theme_mod('sayara_automotive_theme_color_second');

	if($sayara_automotive_theme_color_second != false){
		$custom_css .='button:hover,button:focus,input[type="button"]:hover,input[type="button"]:focus,input[type="submit"]:hover,input[type="submit"]:focus, .social-icon i, .search-box i, .readbutton a:hover, #about .outside, .aboutbtn a:hover, .woocommerce #respond input#submit:hover, .woocommerce a.button:hover, .woocommerce button.button:hover, .woocommerce input.button:hover,.woocommerce #respond input#submit.alt:hover, .woocommerce a.button.alt:hover, .woocommerce button.button.alt:hover, .woocommerce input.button.alt:hover, .post-link a:hover, .site-footer,.post-navigation .nav-next a:hover, .post-navigation .nav-previous a:hover,.tags p a:hover{';
			$custom_css .='background-color: '.esc_html($sayara_automotive_theme_color_second).';';
		$custom_css .='}';
	}
	if($sayara_automotive_theme_color_second != false){
		$custom_css .='h1, h2, h3, h4, h5, h6, a:hover,a:active, .contact-details p.top-head, #slider span.carousel-control-prev-icon,#slider span.carousel-control-next-icon, #slider .inner_carousel h2, #slider .inner_carousel p, #about .about-text h3, h2.woocommerce-loop-product__title,.woocommerce div.product .product_title , .woocommerce ul.products li.product .price,.woocommerce div.product p.price, .woocommerce div.product span.price,.woocommerce .products .star-rating span, .blogger h3 a,p.logged-in-as a,span.posted_in a,.woocommerce-MyAccount-content a,.woocommerce-info a,.woocommerce-privacy-policy-text a,.woocommerce .woocommerce-breadcrumb a, .woocommerce .woocommerce-breadcrumb,.woocommerce-cart .cart-collaterals .shipping-calculator-button,tr.woocommerce-cart-form__cart-item.cart_item a{';
			$custom_css .='color: '.esc_html($sayara_automotive_theme_color_second).';';
		$custom_css .='}';
	}
	if($sayara_automotive_theme_color_second != false){
		$custom_css .='.woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, #sidebox h2,  .aboutbtn a, .post-link a,.blogger, .post-info{';
			$custom_css .='border-left-color: '.esc_html($sayara_automotive_theme_color_second).';';
		$custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'sayara_automotive_theme_options','Default');
    if($theme_lay == 'Default'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
		$custom_css .='.page-template-custom-home-page .middle-header{';
			$custom_css .='width: 97.3%';
		$custom_css .='}';
	}else if($theme_lay == 'Wide Layout'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
		$custom_css .='.page-template-custom-home-page .middle-header{';
			$custom_css .='width: 97.7%';
		$custom_css .='}';
	}else if($theme_lay == 'Box Layout'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$slider_layout = get_theme_mod( 'sayara_automotive_slider_opacity_color','0.9');
	if($slider_layout == '0'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($slider_layout == '0.1'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($slider_layout == '0.2'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($slider_layout == '0.3'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($slider_layout == '0.4'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($slider_layout == '0.5'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($slider_layout == '0.6'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($slider_layout == '0.7'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($slider_layout == '0.8'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($slider_layout == '0.9'){
		$custom_css .='#slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$slider_layout = get_theme_mod( 'sayara_automotive_slider_content_option','Left');
    if($slider_layout == 'Left'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$custom_css .='text-align:left; left:10%; right:50%;';
		$custom_css .='}';
		$custom_css .='
		@media screen and (max-width: 767px){
		#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
		$custom_css .='text-align:center; left:10%; right:13%;';
		$custom_css .='} }';
	}else if($slider_layout == 'Center'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$custom_css .='text-align:center; left:30%; right:30%;';
		$custom_css .='}';
		$custom_css .='#slider .box-content,.shadow{';
			$custom_css .='clip-path: polygon(0% 0%, 0% 0%, 100% 0, 100% 100%, 0% 100%);';
		$custom_css .='}';
		$custom_css .='
		@media screen and (max-width: 767px){
		#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
		$custom_css .='text-align:center; left:10%; right:13%;';
		$custom_css .='} }';
	}else if($slider_layout == 'Right'){
		$custom_css .='#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
			$custom_css .='left:50%; right:10%;text-align:right;';
		$custom_css .='}';
		$custom_css .='#slider .box-content{';
			$custom_css .='clip-path: polygon(15% 0%, 0% 0%, 100% 0, 100% 100%, 0% 100%);';
		$custom_css .='}';
		$custom_css .='.shadow{';
			$custom_css .='position: absolute; right: 20px; left:-20px; top: 15px;clip-path: polygon(15% 0%, 0% 0%, 100% 0, 100% 100%, 0% 100%);';
		$custom_css .='}';
		$custom_css .='
		@media screen and (max-width: 767px){
		#slider .carousel-caption, #slider .inner_carousel, #slider .inner_carousel h1, #slider .inner_carousel p, #slider .readbutton{';
		$custom_css .='text-align:center; left:10%; right:13%;';
		$custom_css .='} }';
	}

	/*------------------------------ Button Settings option-----------------------*/

	$sayara_automotive_top_bottom_padding = get_theme_mod('sayara_automotive_top_bottom_padding');
	$sayara_automotive_left_right_padding = get_theme_mod('sayara_automotive_left_right_padding');
	if($sayara_automotive_top_bottom_padding != false || $sayara_automotive_left_right_padding != false){
		$custom_css .='.post-link a, #slider .readbutton a, .form-submit input[type="submit"], .about-text .aboutbtn a{';
			$custom_css .='padding-top: '.esc_html($sayara_automotive_top_bottom_padding).'px; padding-bottom: '.esc_html($sayara_automotive_top_bottom_padding).'px; padding-left: '.esc_html($sayara_automotive_left_right_padding).'px; padding-right: '.esc_html($sayara_automotive_left_right_padding).'px; display:inline-block;';
		$custom_css .='}';
	}

	$sayara_automotive_border_radius = get_theme_mod('sayara_automotive_border_radius');
	if($sayara_automotive_border_radius != false){
		$custom_css .='.post-link a,#slider .readbutton a, .form-submit input[type="submit"],.about-text .aboutbtn a{';
			$custom_css .='border-radius: '.esc_html($sayara_automotive_border_radius).'px;';
		$custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$theme_lay = get_theme_mod( 'sayara_automotive_blog_post_layout','Default');
    if($theme_lay == 'Default'){
		$custom_css .='.blogger{';
			$custom_css .='';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='.blogger, .blogger h2, .post-info, .text p, .blogger .post-link{';
			$custom_css .='text-align:center;';
		$custom_css .='}';
		$custom_css .='.post-info{';
			$custom_css .='margin-top:10px;';
		$custom_css .='}';
		$custom_css .='.blogger .post-link{';
			$custom_css .='margin-top:25px;';
		$custom_css .='}';
	}else if($theme_lay == 'Image and Content'){
		$custom_css .='.blogger, .blogger h2, .post-info, .text p, #our-services p{';
			$custom_css .='text-align:Left;';
		$custom_css .='}';
		$custom_css .='.blogger .post-link{';
			$custom_css .='text-align:right;';
		$custom_css .='}';
	}

