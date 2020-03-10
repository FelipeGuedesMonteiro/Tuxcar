<?php
	
	/*---------------------------First highlight color-------------------*/

	$vw_automobile_lite_first_color = get_theme_mod('vw_automobile_lite_first_color');

	$custom_css = '';

	if($vw_automobile_lite_first_color != false){
		$custom_css .='#comments a.comment-reply-link:hover,.sidebar ul li::before,.yearwrap,.date-monthwrap,.logowrapper, .search-box i, .slider .more-btn a, .footer-2, .scrollup i, nav.woocommerce-MyAccount-navigation ul li, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .woocommerce span.onsale, .hvr-sweep-to-right:before, .sidebar .custom-social-icons i, .footer .custom-social-icons i:hover, .sidebar .tagcloud a:hover, .footer .tagcloud a:hover, .entry-audio audio, .pagination span, .pagination a, .pagination .current, .pagination a:hover, a.button{';
			$custom_css .='background-color: '.esc_html($vw_automobile_lite_first_color).';';
		$custom_css .='}';
	}
	if($vw_automobile_lite_first_color != false){
		$custom_css .='.search-submit, #comments input[type="submit"].submit{';
			$custom_css .='background-color: '.esc_html($vw_automobile_lite_first_color).'!important;';
		$custom_css .='}';
	}
	if($vw_automobile_lite_first_color != false){
		$custom_css .='a, span.email i, span.timings i, span.call i, .sidebar .widget h3, .post-main-box h2, .blogbutton-small, h2.single-post-title, .sidebar .custom-social-icons i:hover, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title, .entry-content a, .sidebar .textwidget p a, .textwidget p a, #comments p a, .slider .inner_carousel p a, .main-navigation a:hover, .main-navigation ul.sub-menu a:hover{';
			$custom_css .='color: '.esc_html($vw_automobile_lite_first_color).';';
		$custom_css .='}';
	}
	if($vw_automobile_lite_first_color != false){
		$custom_css .='.slider .more-btn a, .blogbutton-small{';
			$custom_css .='border-color: '.esc_html($vw_automobile_lite_first_color).';';
		$custom_css .='}';
	}
	if($vw_automobile_lite_first_color != false){
		$custom_css .='.search-submit, .blogbutton-small{';
			$custom_css .='border-color: '.esc_html($vw_automobile_lite_first_color).'!important;';
		$custom_css .='}';
	}
	if($vw_automobile_lite_first_color != false){
		$custom_css .='.main-navigation ul ul{';
			$custom_css .='border-top-color: '.esc_html($vw_automobile_lite_first_color).';';
		$custom_css .='}';
	}
	if($vw_automobile_lite_first_color != false){
		$custom_css .='.footer h3, .main-navigation ul ul{';
			$custom_css .='border-bottom-color: '.esc_html($vw_automobile_lite_first_color).';';
		$custom_css .='}';
	}

	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_automobile_lite_width_option','Full Width');
    if($theme_lay == 'Boxed'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
		$custom_css .='.logowrapper{';
			$custom_css .='background: rgba(0, 0, 0, 0) linear-gradient(-70deg, transparent 13%, #ff5400 0%) repeat scroll 0 0; position: relative; left: -1em; transform: none;';
		$custom_css .='}';
		$custom_css .='#header .logo{';
			$custom_css .='padding: 8% 0; text-align: center; transform: skew(-20deg);';
		$custom_css .='}';
		$custom_css .='.menubox{';
			$custom_css .='background: rgba(0, 0, 0, 0) linear-gradient(115deg, transparent 6%, #212121 0%) repeat scroll 0 0';
		$custom_css .='}';
	}else if($theme_lay == 'Wide Width'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
		$custom_css .='.logowrapper{';
			$custom_css .='background: rgba(0, 0, 0, 0) linear-gradient(-68deg, transparent 13%, #ff5400 0%) repeat scroll 0 0; position: relative; left: -1em; transform: none;';
		$custom_css .='}';
		$custom_css .='#header .logo{';
			$custom_css .='padding: 8% 0; text-align: center; transform: skew(-10deg);';
		$custom_css .='}';
		$custom_css .='.menubox{';
			$custom_css .='background: rgba(0, 0, 0, 0) linear-gradient(115deg, transparent 6%, #212121 0%) repeat scroll 0 0';
		$custom_css .='}';
	}else if($theme_lay == 'Full Width'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$theme_lay = get_theme_mod( 'vw_automobile_lite_slider_opacity_color','0.5');
	if($theme_lay == '0'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($theme_lay == '0.1'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($theme_lay == '0.2'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($theme_lay == '0.3'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($theme_lay == '0.4'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($theme_lay == '0.5'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($theme_lay == '0.6'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($theme_lay == '0.7'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($theme_lay == '0.8'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($theme_lay == '0.9'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_automobile_lite_slider_content_option','Center');
    if($theme_lay == 'Left'){
		$custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1{';
			$custom_css .='text-align:left; left:15%; right:45%;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1{';
			$custom_css .='text-align:center; left:20%; right:20%;';
		$custom_css .='}';
	}else if($theme_lay == 'Right'){
		$custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h1{';
			$custom_css .='text-align:right; left:45%; right:15%;';
		$custom_css .='}';
	}

	/*---------------------------Blog Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_automobile_lite_blog_layout_option','Default');
    if($theme_lay == 'Default'){
		$custom_css .='.post-main-box{';
			$custom_css .='';
		$custom_css .='}';
		$custom_css .='.post-main-box h2{';
			$custom_css .='padding:0;';
		$custom_css .='}';
		$custom_css .='.new-text p{';
			$custom_css .='margin-top:10px;';
		$custom_css .='}';
		$custom_css .='.blogbutton-small{';
			$custom_css .='margin: 0; display: inline-block;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='.post-main-box, .post-main-box h2, .new-text p, .metabox, .content-bttn{';
			$custom_css .='text-align:center;';
		$custom_css .='}';
		$custom_css .='.new-text p{';
			$custom_css .='margin-top:0;';
		$custom_css .='}';
		$custom_css .='.metabox{';
			$custom_css .='background: #eeeeee; padding: 10px; margin-bottom: 15px;';
		$custom_css .='}';
		$custom_css .='.blogbutton-small{';
			$custom_css .='margin: 0; display: inline-block;';
		$custom_css .='}';
	}else if($theme_lay == 'Left'){
		$custom_css .='.post-main-box, .post-main-box h2, .new-text p, .content-bttn{';
			$custom_css .='text-align:Left;';
		$custom_css .='}';
		$custom_css .='.metabox{';
			$custom_css .='background: #eeeeee; padding: 10px; margin-bottom: 15px;';
		$custom_css .='}';
	}

	/*------------------------------Responsive Media -----------------------*/

	$stickyheader = get_theme_mod( 'vw_automobile_lite_resp_slider_hide_show',true);
    if($stickyheader == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.slider{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($stickyheader == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.slider{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$metabox = get_theme_mod( 'vw_automobile_lite_metabox_hide_show',true);
    if($metabox == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.metabox, .datebox{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($metabox == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.metabox, .datebox{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	$sidebar = get_theme_mod( 'vw_automobile_lite_sidebar_hide_show',true);
    if($sidebar == true){
    	$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.sidebar{';
			$custom_css .='display:block;';
		$custom_css .='} }';
	}else if($sidebar == false){
		$custom_css .='@media screen and (max-width:575px) {';
		$custom_css .='.sidebar{';
			$custom_css .='display:none;';
		$custom_css .='} }';
	}

	/*---------------- Button Settings ------------------*/

	$vw_automobile_lite_button_padding_top_bottom = get_theme_mod('vw_automobile_lite_button_padding_top_bottom');
	$vw_automobile_lite_button_padding_left_right = get_theme_mod('vw_automobile_lite_button_padding_left_right');
	if($vw_automobile_lite_button_padding_top_bottom != false || $vw_automobile_lite_button_padding_left_right != false){
		$custom_css .='.blogbutton-small, .slider .more-btn a{';
			$custom_css .='padding-top: '.esc_html($vw_automobile_lite_button_padding_top_bottom).'; padding-bottom: '.esc_html($vw_automobile_lite_button_padding_top_bottom).';padding-left: '.esc_html($vw_automobile_lite_button_padding_left_right).';padding-right: '.esc_html($vw_automobile_lite_button_padding_left_right).';';
		$custom_css .='}';
	}

	$vw_automobile_lite_button_border_radius = get_theme_mod('vw_automobile_lite_button_border_radius');
	if($vw_automobile_lite_button_border_radius != false){
		$custom_css .='.blogbutton-small, .slider .more-btn a, .hvr-sweep-to-right:before{';
			$custom_css .='border-radius: '.esc_html($vw_automobile_lite_button_border_radius).'px;';
		$custom_css .='}';
	}

	/*-------------- Copyright Alignment ----------------*/

	$vw_automobile_lite_copyright_alingment = get_theme_mod('vw_automobile_lite_copyright_alingment');
	if($vw_automobile_lite_copyright_alingment != false){
		$custom_css .='.footer-2 p{';
			$custom_css .='text-align: '.esc_html($vw_automobile_lite_copyright_alingment).';';
		$custom_css .='}';
	}
	$vw_automobile_lite_copyright_padding_top_bottom = get_theme_mod('vw_automobile_lite_copyright_padding_top_bottom');
	if($vw_automobile_lite_copyright_padding_top_bottom != false){
		$custom_css .='.footer-2{';
			$custom_css .='padding-top: '.esc_html($vw_automobile_lite_copyright_padding_top_bottom).'; padding-bottom: '.esc_html($vw_automobile_lite_copyright_padding_top_bottom).';';
		$custom_css .='}';
	}

	/*------------- Top Bar Settings ------------------*/

	$vw_automobile_lite_topbar_padding_top_bottom = get_theme_mod('vw_automobile_lite_topbar_padding_top_bottom');
	if($vw_automobile_lite_topbar_padding_top_bottom != false){
		$custom_css .='.con_details{';
			$custom_css .='padding-top: '.esc_html($vw_automobile_lite_topbar_padding_top_bottom).'; padding-bottom: '.esc_html($vw_automobile_lite_topbar_padding_top_bottom).';';
		$custom_css .='}';
	}

	/*------------------ Search Settings -----------------*/
	
	$vw_automobile_lite_search_padding_top_bottom = get_theme_mod('vw_automobile_lite_search_padding_top_bottom');
	$vw_automobile_lite_search_padding_left_right = get_theme_mod('vw_automobile_lite_search_padding_left_right');
	$vw_automobile_lite_search_font_size = get_theme_mod('vw_automobile_lite_search_font_size');
	$vw_automobile_lite_search_border_radius = get_theme_mod('vw_automobile_lite_search_border_radius');
	if($vw_automobile_lite_search_padding_top_bottom != false || $vw_automobile_lite_search_padding_left_right != false || $vw_automobile_lite_search_font_size != false || $vw_automobile_lite_search_border_radius != false){
		$custom_css .='.search-box i{';
			$custom_css .='padding-top: '.esc_html($vw_automobile_lite_search_padding_top_bottom).'; padding-bottom: '.esc_html($vw_automobile_lite_search_padding_top_bottom).';padding-left: '.esc_html($vw_automobile_lite_search_padding_left_right).';padding-right: '.esc_html($vw_automobile_lite_search_padding_left_right).';font-size: '.esc_html($vw_automobile_lite_search_font_size).';border-radius: '.esc_html($vw_automobile_lite_search_border_radius).'px;';
		$custom_css .='}';
	}