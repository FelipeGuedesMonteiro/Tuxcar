<?php
/**
 * Automobile Car Dealer Theme Customizer
 * @package Automobile Car Dealer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function automobile_car_dealer_customize_register( $wp_customize ) {	

	//add home page setting pannel
	$wp_customize->add_panel( 'automobile_car_dealer_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'automobile-car-dealer' ),
	    'description' => __( 'Description of what this panel does.', 'automobile-car-dealer' ),
	) );

	//layout setting
	$wp_customize->add_section( 'automobile_car_dealer_option', array(
    	'title'      => __( 'Layout Settings', 'automobile-car-dealer' ),
		'priority'   => null,
		'panel' => 'automobile_car_dealer_panel_id'
	) );

	$wp_customize->add_setting('automobile_car_dealer_preloader',array(
       'default' => 'true',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('automobile_car_dealer_preloader',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Preloader','automobile-car-dealer'),
       'section' => 'automobile_car_dealer_option'
    ));

	$wp_customize->add_setting('automobile_car_dealer_width_layout_options',array(
        'default' => __('Default','automobile-car-dealer'),
        'sanitize_callback' => 'automobile_car_dealer_sanitize_choices'
	));
	$wp_customize->add_control('automobile_car_dealer_width_layout_options',array(
        'type' => 'radio',
        'label' => __('Container Box','automobile-car-dealer'),
        'description' => __('Here you can change the Width layout. ','automobile-car-dealer'),
        'section' => 'automobile_car_dealer_option',
        'choices' => array(
            'Default' => __('Default','automobile-car-dealer'),
            'Container Layout' => __('Container Layout','automobile-car-dealer'),
            'Box Layout' => __('Box Layout','automobile-car-dealer'),
        ),
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('automobile_car_dealer_layout_options',array(
        'default' => __('Right Sidebar','automobile-car-dealer'),
        'sanitize_callback' => 'automobile_car_dealer_sanitize_choices'	        
	) );
	$wp_customize->add_control('automobile_car_dealer_layout_options',array(
        'type' => 'radio',
        'label' => __('Do you want this section','automobile-car-dealer'),
        'section' => 'automobile_car_dealer_option',
        'choices' => array(
            'One Column' => __('One Column','automobile-car-dealer'),
            'Three Columns' => __('Three Columns','automobile-car-dealer'),
            'Four Columns' => __('Four Columns','automobile-car-dealer'),
            'Grid Layout' => __('Grid Layout','automobile-car-dealer'),
            'Left Sidebar' => __('Left Sidebar','automobile-car-dealer'),
            'Right Sidebar' => __('Right Sidebar','automobile-car-dealer')
        ),
	)  );


	$font_array = array(
		''                       => 'No Fonts',
		'Abril Fatface'          => 'Abril Fatface',
		'Acme'                   => 'Acme',
		'Anton'                  => 'Anton',
		'Architects Daughter'    => 'Architects Daughter',
		'Arimo'                  => 'Arimo',
		'Arsenal'                => 'Arsenal',
		'Arvo'                   => 'Arvo',
		'Alegreya'               => 'Alegreya',
		'Alfa Slab One'          => 'Alfa Slab One',
		'Averia Serif Libre'     => 'Averia Serif Libre',
		'Bangers'                => 'Bangers',
		'Boogaloo'               => 'Boogaloo',
		'Bad Script'             => 'Bad Script',
		'Bitter'                 => 'Bitter',
		'Bree Serif'             => 'Bree Serif',
		'BenchNine'              => 'BenchNine',
		'Cabin'                  => 'Cabin',
		'Cardo'                  => 'Cardo',
		'Courgette'              => 'Courgette',
		'Cherry Swash'           => 'Cherry Swash',
		'Cormorant Garamond'     => 'Cormorant Garamond',
		'Crimson Text'           => 'Crimson Text',
		'Cuprum'                 => 'Cuprum',
		'Cookie'                 => 'Cookie',
		'Chewy'                  => 'Chewy',
		'Days One'               => 'Days One',
		'Dosis'                  => 'Dosis',
		'Droid Sans'             => 'Droid Sans',
		'Economica'              => 'Economica',
		'Fredoka One'            => 'Fredoka One',
		'Fjalla One'             => 'Fjalla One', 
		'Francois One'           => 'Francois One',
		'Frank Ruhl Libre'       => 'Frank Ruhl Libre',
		'Gloria Hallelujah'      => 'Gloria Hallelujah',
		'Great Vibes'            => 'Great Vibes',
		'Handlee'                => 'Handlee',
		'Hammersmith One'        => 'Hammersmith One',
		'Inconsolata'            => 'Inconsolata',
		'Indie Flower'           => 'Indie Flower', 
		'IM Fell English SC'     => 'IM Fell English SC',
		'Julius Sans One'        => 'Julius Sans One',
		'Josefin Slab'           => 'Josefin Slab',
		'Josefin Sans'           => 'Josefin Sans',
		'Kanit'                  => 'Kanit', 
		'Lobster'                => 'Lobster',
		'Lato'                   => 'Lato',
		'Lora'                   => 'Lora',
		'Libre Baskerville'      => 'Libre Baskerville',
		'Lobster Two'            => 'Lobster Two', 
		'Merriweather'           => 'Merriweather',
		'Monda'                  => 'Monda', 
		'Montserrat'             => 'Montserrat',
		'Muli'                   => 'Muli', 
		'Marck Script'           => 'Marck Script', 
		'Noto Serif'             => 'Noto Serif', 
		'Open Sans'              => 'Open Sans', 
		'Overpass'               => 'Overpass',
		'Overpass Mono'          => 'Overpass Mono',
		'Oxygen'                 => 'Oxygen', 
		'Orbitron'               => 'Orbitron',
		'Patua One'              => 'Patua One',
		'Pacifico'               => 'Pacifico',
		'Padauk'                 => 'Padauk',
		'Playball'               => 'Playball',
		'Playfair Display'       => 'Playfair Display', 
		'PT Sans'                => 'PT Sans',
		'Philosopher'            => 'Philosopher',
		'Permanent Marker'       => 'Permanent Marker',
		'Poiret One'             => 'Poiret One',
		'Quicksand'              => 'Quicksand',
		'Quattrocento Sans'      => 'Quattrocento Sans',
		'Raleway'                => 'Raleway',
		'Rubik'                  => 'Rubik', 
		'Rokkitt'                => 'Rokkitt',
		'Russo One'              => 'Russo One',
		'Righteous'              => 'Righteous',
		'Slabo'                  => 'Slabo', 
		'Source Sans Pro'        => 'Source Sans Pro',
		'Shadows Into Light Two' => 'Shadows Into Light Two', 
		'Shadows Into Light'     => 'Shadows Into Light',
		'Sacramento'             => 'Sacramento',
		'Shrikhand'              => 'Shrikhand',
		'Tangerine'              => 'Tangerine',
		'Ubuntu'                 => 'Ubuntu',
		'VT323'                  => 'VT323',
		'Varela Round'           => 'Varela Round',
		'Vampiro One'            => 'Vampiro One',
		'Vollkorn'               => 'Vollkorn', 
		'Volkhov'                => 'Volkhov',
		'Yanone Kaffeesatz'      => 'Yanone Kaffeesatz'
	);

	//Typography
	$wp_customize->add_section('automobile_car_dealer_typography', array(
		'title'    => __('Typography', 'automobile-car-dealer'),
		'panel'    => 'automobile_car_dealer_panel_id',
	));

	// This is Paragraph Color picker setting
	$wp_customize->add_setting('automobile_car_dealer_paragraph_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'automobile_car_dealer_paragraph_color', array(
		'label'    => __('Paragraph Color', 'automobile-car-dealer'),
		'section'  => 'automobile_car_dealer_typography',
		'settings' => 'automobile_car_dealer_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('automobile_car_dealer_paragraph_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'automobile_car_dealer_sanitize_choices',
	));
	$wp_customize->add_control('automobile_car_dealer_paragraph_font_family', array(
		'section' => 'automobile_car_dealer_typography',
		'label'   => __('Paragraph Fonts', 'automobile-car-dealer'),
		'type'    => 'select',
		'choices' => $font_array,
	));

	$wp_customize->add_setting('automobile_car_dealer_paragraph_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('automobile_car_dealer_paragraph_font_size', array(
		'label'   => __('Paragraph Font Size', 'automobile-car-dealer'),
		'section' => 'automobile_car_dealer_typography',
		'setting' => 'automobile_car_dealer_paragraph_font_size',
		'type'    => 'text',
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting('automobile_car_dealer_atag_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'automobile_car_dealer_atag_color', array(
		'label'    => __('"a" Tag Color', 'automobile-car-dealer'),
		'section'  => 'automobile_car_dealer_typography',
		'settings' => 'automobile_car_dealer_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('automobile_car_dealer_atag_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'automobile_car_dealer_sanitize_choices',
	));
	$wp_customize->add_control('automobile_car_dealer_atag_font_family', array(
		'section' => 'automobile_car_dealer_typography',
		'label'   => __('"a" Tag Fonts', 'automobile-car-dealer'),
		'type'    => 'select',
		'choices' => $font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting('automobile_car_dealer_li_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'automobile_car_dealer_li_color', array(
		'label'    => __('"li" Tag Color', 'automobile-car-dealer'),
		'section'  => 'automobile_car_dealer_typography',
		'settings' => 'automobile_car_dealer_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('automobile_car_dealer_li_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'automobile_car_dealer_sanitize_choices',
	));
	$wp_customize->add_control('automobile_car_dealer_li_font_family', array(
		'section' => 'automobile_car_dealer_typography',
		'label'   => __('"li" Tag Fonts', 'automobile-car-dealer'),
		'type'    => 'select',
		'choices' => $font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting('automobile_car_dealer_h1_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'automobile_car_dealer_h1_color', array(
		'label'    => __('H1 Color', 'automobile-car-dealer'),
		'section'  => 'automobile_car_dealer_typography',
		'settings' => 'automobile_car_dealer_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('automobile_car_dealer_h1_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'automobile_car_dealer_sanitize_choices',
	));
	$wp_customize->add_control('automobile_car_dealer_h1_font_family', array(
		'section' => 'automobile_car_dealer_typography',
		'label'   => __('H1 Fonts', 'automobile-car-dealer'),
		'type'    => 'select',
		'choices' => $font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('automobile_car_dealer_h1_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('automobile_car_dealer_h1_font_size', array(
		'label'   => __('H1 Font Size', 'automobile-car-dealer'),
		'section' => 'automobile_car_dealer_typography',
		'setting' => 'automobile_car_dealer_h1_font_size',
		'type'    => 'text',
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting('automobile_car_dealer_h2_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'automobile_car_dealer_h2_color', array(
		'label'    => __('h2 Color', 'automobile-car-dealer'),
		'section'  => 'automobile_car_dealer_typography',
		'settings' => 'automobile_car_dealer_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('automobile_car_dealer_h2_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'automobile_car_dealer_sanitize_choices',
	));
	$wp_customize->add_control( 'automobile_car_dealer_h2_font_family', array(
		'section' => 'automobile_car_dealer_typography',
		'label'   => __('h2 Fonts', 'automobile-car-dealer'),
		'type'    => 'select',
		'choices' => $font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('automobile_car_dealer_h2_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('automobile_car_dealer_h2_font_size', array(
		'label'   => __('h2 Font Size', 'automobile-car-dealer'),
		'section' => 'automobile_car_dealer_typography',
		'setting' => 'automobile_car_dealer_h2_font_size',
		'type'    => 'text',
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting('automobile_car_dealer_h3_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'automobile_car_dealer_h3_color', array(
		'label'    => __('h3 Color', 'automobile-car-dealer'),
		'section'  => 'automobile_car_dealer_typography',
		'settings' => 'automobile_car_dealer_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('automobile_car_dealer_h3_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'automobile_car_dealer_sanitize_choices',
	));
	$wp_customize->add_control( 'automobile_car_dealer_h3_font_family', array(
		'section' => 'automobile_car_dealer_typography',
		'label'   => __('h3 Fonts', 'automobile-car-dealer'),
		'type'    => 'select',
		'choices' => $font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('automobile_car_dealer_h3_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('automobile_car_dealer_h3_font_size', array(
		'label'   => __('h3 Font Size', 'automobile-car-dealer'),
		'section' => 'automobile_car_dealer_typography',
		'setting' => 'automobile_car_dealer_h3_font_size',
		'type'    => 'text',
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting('automobile_car_dealer_h4_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'automobile_car_dealer_h4_color', array(
		'label'    => __('h4 Color', 'automobile-car-dealer'),
		'section'  => 'automobile_car_dealer_typography',
		'settings' => 'automobile_car_dealer_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('automobile_car_dealer_h4_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'automobile_car_dealer_sanitize_choices',
	));
	$wp_customize->add_control( 'automobile_car_dealer_h4_font_family', array(
		'section' => 'automobile_car_dealer_typography',
		'label'   => __('h4 Fonts', 'automobile-car-dealer'),
		'type'    => 'select',
		'choices' => $font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('automobile_car_dealer_h4_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('automobile_car_dealer_h4_font_size', array(
		'label'   => __('h4 Font Size', 'automobile-car-dealer'),
		'section' => 'automobile_car_dealer_typography',
		'setting' => 'automobile_car_dealer_h4_font_size',
		'type'    => 'text',
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting('automobile_car_dealer_h5_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'automobile_car_dealer_h5_color', array(
		'label'    => __('h5 Color', 'automobile-car-dealer'),
		'section'  => 'automobile_car_dealer_typography',
		'settings' => 'automobile_car_dealer_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('automobile_car_dealer_h5_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'automobile_car_dealer_sanitize_choices',
	));
	$wp_customize->add_control( 'automobile_car_dealer_h5_font_family', array(
		'section' => 'automobile_car_dealer_typography',
		'label'   => __('h5 Fonts', 'automobile-car-dealer'),
		'type'    => 'select',
		'choices' => $font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('automobile_car_dealer_h5_font_size', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('automobile_car_dealer_h5_font_size', array(
		'label'   => __('h5 Font Size', 'automobile-car-dealer'),
		'section' => 'automobile_car_dealer_typography',
		'setting' => 'automobile_car_dealer_h5_font_size',
		'type'    => 'text',
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting('automobile_car_dealer_h6_color', array(
		'default'           => '',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'automobile_car_dealer_h6_color', array(
		'label'    => __('h6 Color', 'automobile-car-dealer'),
		'section'  => 'automobile_car_dealer_typography',
		'settings' => 'automobile_car_dealer_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('automobile_car_dealer_h6_font_family', array(
		'default'           => '',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'automobile_car_dealer_sanitize_choices',
	));
	$wp_customize->add_control('automobile_car_dealer_h6_font_family', array(
		'section' => 'automobile_car_dealer_typography',
		'label'   => __('h6 Fonts', 'automobile-car-dealer'),
		'type'    => 'select',
		'choices' => $font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('automobile_car_dealer_h6_font_size', array(
			'default'           => '',
		'sanitize_callback' => 'sanitize_text_field',
	));
	$wp_customize->add_control('automobile_car_dealer_h6_font_size', array(
		'label'   => __('h6 Font Size', 'automobile-car-dealer'),
		'section' => 'automobile_car_dealer_typography',
		'setting' => 'automobile_car_dealer_h6_font_size',
		'type'    => 'text',
	));

	//Global Color
	$wp_customize->add_section('automobile_car_dealer_global_color', array(
		'title'    => __('Theme Color Option', 'automobile-car-dealer'),
		'panel'    => 'automobile_car_dealer_panel_id',
	));

	$wp_customize->add_setting('automobile_car_dealer_first_color', array(
		'default'           => '#dd3333',
		'sanitize_callback' => 'sanitize_hex_color',
	));
	$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'automobile_car_dealer_first_color', array(
		'label'    => __('Highlight Color', 'automobile-car-dealer'),
		'section'  => 'automobile_car_dealer_global_color',
		'settings' => 'automobile_car_dealer_first_color',
	)));

	//Blog Post Settings
	$wp_customize->add_section('automobile_car_dealer_post_settings', array(
		'title'    => __('Post General Settings', 'automobile-car-dealer'),
		'panel'    => 'automobile_car_dealer_panel_id',
	));

	$wp_customize->add_setting('automobile_car_dealer_metafields_date',array(
       'default' => 'true',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('automobile_car_dealer_metafields_date',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Date ','automobile-car-dealer'),
       'section' => 'automobile_car_dealer_post_settings'
    ));

    $wp_customize->add_setting('automobile_car_dealer_metafields_author',array(
       'default' => 'true',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('automobile_car_dealer_metafields_author',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Author','automobile-car-dealer'),
       'section' => 'automobile_car_dealer_post_settings'
    ));

    $wp_customize->add_setting('automobile_car_dealer_metafields_comment',array(
       'default' => 'true',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('automobile_car_dealer_metafields_comment',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide Comments','automobile-car-dealer'),
       'section' => 'automobile_car_dealer_post_settings'
    ));

    //Post excerpt
	$wp_customize->add_setting( 'automobile_car_dealer_post_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'automobile_car_dealer_post_excerpt_number', array(
		'label'       => esc_html__( 'Blog Post Content Limit','automobile-car-dealer' ),
		'section'     => 'automobile_car_dealer_post_settings',
		'type'        => 'number',
		'settings'    => 'automobile_car_dealer_post_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('automobile_car_dealer_button_text',array(
		'default'=> 'VIEW MORE',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('automobile_car_dealer_button_text',array(
		'label'	=> __('Add Button Text','automobile-car-dealer'),
		'section'=> 'automobile_car_dealer_post_settings',
		'type'=> 'text'
	));

	//Social Icons(topbar)
	$wp_customize->add_section('automobile_car_dealer_topbar_header',array(
		'title'	=> __('Social Icon Section','automobile-car-dealer'),
		'description'	=> __('Add Social Link here','automobile-car-dealer'),
		'priority'	=> null,
		'panel' => 'automobile_car_dealer_panel_id',
	));

	$wp_customize->add_setting('automobile_car_dealer_cont_facebook',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('automobile_car_dealer_cont_facebook',array(
		'label'	=> __('Add Facebook link','automobile-car-dealer'),
		'section'	=> 'automobile_car_dealer_topbar_header',
		'setting'	=> 'automobile_car_dealer_cont_facebook',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('automobile_car_dealer_cont_twitter',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('automobile_car_dealer_cont_twitter',array(
		'label'	=> __('Add Twitter link','automobile-car-dealer'),
		'section'	=> 'automobile_car_dealer_topbar_header',
		'setting'	=> 'automobile_car_dealer_cont_twitter',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('automobile_car_dealer_google_plus',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('automobile_car_dealer_google_plus',array(
		'label'	=> __('Add Google Plus link','automobile-car-dealer'),
		'section'	=> 'automobile_car_dealer_topbar_header',
		'setting'	=> 'automobile_car_dealer_google_plus',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('automobile_car_dealer_pinterest',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('automobile_car_dealer_pinterest',array(
		'label'	=> __('Add Pinterest link','automobile-car-dealer'),
		'section'	=> 'automobile_car_dealer_topbar_header',
		'setting'	=> 'automobile_car_dealer_pinterest',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('automobile_car_dealer_tumblr',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('automobile_car_dealer_tumblr',array(
		'label'	=> __('Add Tumblr link','automobile-car-dealer'),
		'section'	=> 'automobile_car_dealer_topbar_header',
		'setting'	=> 'automobile_car_dealer_tumblr',
		'type'		=> 'url'
	));

	//Top Bar(topbar)
	$wp_customize->add_section('automobile_car_dealer_contact',array(
		'title'	=> __('Contact Us','automobile-car-dealer'),
		'description'	=> __('Add contact us here','automobile-car-dealer'),
		'priority'	=> null,
		'panel' => 'automobile_car_dealer_panel_id',
	));

	//Sticky Header
	$wp_customize->add_setting( 'automobile_car_dealer_sticky_header',array(
      	'sanitize_callback'	=> 'sanitize_text_field'
    ) );
    $wp_customize->add_control('automobile_car_dealer_sticky_header',array(
    	'type' => 'checkbox',
        'label' => __( 'Enable / Disable Sticky Header','automobile-car-dealer' ),
        'section' => 'automobile_car_dealer_contact'
    ));

	$wp_customize->add_setting('automobile_car_dealer_mail',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('automobile_car_dealer_mail',array(
		'label'	=> __('Email','automobile-car-dealer'),
		'section'	=> 'automobile_car_dealer_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('automobile_car_dealer_phone',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('automobile_car_dealer_phone',array(
		'label'	=> __('Phone No','automobile-car-dealer'),
		'section'	=> 'automobile_car_dealer_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('automobile_car_dealer_button_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('automobile_car_dealer_button_link',array(
		'label'	=> __('Appointment us url','automobile-car-dealer'),
		'section'	=> 'automobile_car_dealer_contact',
		'setting'	=> 'automobile_car_dealer_button_link',
		'type'		=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'automobile_car_dealer_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'automobile-car-dealer' ),
		'priority'   => null,
		'panel' => 'automobile_car_dealer_panel_id'
	) );

	$wp_customize->add_setting('automobile_car_dealer_slider_hide',array(
       'default' => 'false',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('automobile_car_dealer_slider_hide',array(
       'type' => 'checkbox',
       'label' => __('Show / Hide slider','automobile-car-dealer'),
       'section' => 'automobile_car_dealer_slidersettings',
    ));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'automobile_car_dealer_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'automobile_car_dealer_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'automobile_car_dealer_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'automobile-car-dealer' ),
			'section'  => 'automobile_car_dealer_slidersettings',
			'type'     => 'dropdown-pages'
		) );
	}

	//content layout
    $wp_customize->add_setting('automobile_car_dealer_slider_content_layout',array(
    'default' => __('Center','automobile-car-dealer'),
        'sanitize_callback' => 'automobile_car_dealer_sanitize_choices'
	));
	$wp_customize->add_control('automobile_car_dealer_slider_content_layout',array(
        'type' => 'radio',
        'label' => __('Slider Content Layout','automobile-car-dealer'),
        'section' => 'automobile_car_dealer_slidersettings',
        'choices' => array(
            'Center' => __('Center','automobile-car-dealer'),
            'Left' => __('Left','automobile-car-dealer'),
            'Right' => __('Right','automobile-car-dealer'),
        ),
	) );

	//Slider excerpt
	$wp_customize->add_setting( 'automobile_car_dealer_slider_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'automobile_car_dealer_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Content Limit','automobile-car-dealer' ),
		'section'     => 'automobile_car_dealer_slidersettings',
		'type'        => 'number',
		'settings'    => 'automobile_car_dealer_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('automobile_car_dealer_slider_opacity',array(
      'default'              => 0.7,
      'sanitize_callback' => 'automobile_car_dealer_sanitize_choices'
	));
	$wp_customize->add_control( 'automobile_car_dealer_slider_opacity', array(
	'label'       => esc_html__( 'Slider Image Opacity','automobile-car-dealer' ),
	'section'     => 'automobile_car_dealer_slidersettings',
	'type'        => 'select',
	'settings'    => 'automobile_car_dealer_slider_opacity',
	'choices' => array(
		'0' =>  esc_attr('0','automobile-car-dealer'),
		'0.1' =>  esc_attr('0.1','automobile-car-dealer'),
		'0.2' =>  esc_attr('0.2','automobile-car-dealer'),
		'0.3' =>  esc_attr('0.3','automobile-car-dealer'),
		'0.4' =>  esc_attr('0.4','automobile-car-dealer'),
		'0.5' =>  esc_attr('0.5','automobile-car-dealer'),
		'0.6' =>  esc_attr('0.6','automobile-car-dealer'),
		'0.7' =>  esc_attr('0.7','automobile-car-dealer'),
		'0.8' =>  esc_attr('0.8','automobile-car-dealer'),
		'0.9' =>  esc_attr('0.9','automobile-car-dealer')
	),
	));

	//About
	$wp_customize->add_section('automobile_car_dealer_project',array(
		'title'	=> __('Our Project Section','automobile-car-dealer'),
		'description'	=> __('Add Our Project sections below.','automobile-car-dealer'),
		'panel' => 'automobile_car_dealer_panel_id',
	));

	$wp_customize->add_setting('automobile_car_dealer_sec_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('automobile_car_dealer_sec_title',array(
		'label'	=> __('Title','automobile-car-dealer'),
		'section'	=> 'automobile_car_dealer_project',
		'type'		=> 'text'
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	$posts[]='Select';  
	foreach($post_list as $post){
		$posts[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('automobile_car_dealer_project_single_post',array(
		'default' =>'select post',
		'sanitize_callback' => 'automobile_car_dealer_sanitize_choices',
	));
	$wp_customize->add_control('automobile_car_dealer_project_single_post',array(
		'type'    => 'select',
		'choices' => $posts,
		'label' => __('Select post','automobile-car-dealer'),
		'section' => 'automobile_car_dealer_project',
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
	if($i==0){
	$default = $category->slug;
	$i++;
	}
	$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('automobile_car_dealer_project_category',array(
		'default'	=> 'select',
		'sanitize_callback' => 'automobile_car_dealer_sanitize_choices',
	));
	$wp_customize->add_control('automobile_car_dealer_project_category',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display Latest Post','automobile-car-dealer'),
		'section' => 'automobile_car_dealer_project',
	));

	//About excerpt
	$wp_customize->add_setting( 'automobile_car_dealer_about_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'automobile_car_dealer_about_excerpt_number', array(
		'label'       => esc_html__( 'Project Content Limit','automobile-car-dealer' ),
		'section'     => 'automobile_car_dealer_project',
		'type'        => 'number',
		'settings'    => 'automobile_car_dealer_about_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Category excerpt
	$wp_customize->add_setting( 'automobile_car_dealer_category_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'automobile_car_dealer_category_excerpt_number', array(
		'label'       => esc_html__( 'Category Content Limit','automobile-car-dealer' ),
		'section'     => 'automobile_car_dealer_project',
		'type'        => 'number',
		'settings'    => 'automobile_car_dealer_category_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );
	
	//footer text
	$wp_customize->add_section('automobile_car_dealer_footer_section',array(
		'title'	=> __('Footer Text','automobile-car-dealer'),
		'panel' => 'automobile_car_dealer_panel_id'
	));

	$wp_customize->add_setting('footer_widget_areas',array(
        'default'           => '3',
        'sanitize_callback' => 'automobile_car_dealer_sanitize_choices',
    ));
    $wp_customize->add_control('footer_widget_areas',array(
        'type'        => 'radio',
        'label'       => __('Footer widget area', 'automobile-car-dealer'),
        'section'     => 'automobile_car_dealer_footer_section',
        'description' => __('Select the number of widget areas you want in the footer. After that, go to Appearance > Widgets and add your widgets.', 'automobile-car-dealer'),
        'choices' => array(
            '1'     => __('One', 'automobile-car-dealer'),
            '2'     => __('Two', 'automobile-car-dealer'),
            '3'     => __('Three', 'automobile-car-dealer'),
            '4'     => __('Four', 'automobile-car-dealer')
        ),
    ));

    $wp_customize->add_setting('automobile_car_dealer_hide_show_scroll',array(
        'default' => 'true',
        'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('automobile_car_dealer_hide_show_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Enable / Disable Back To Top','automobile-car-dealer'),
      	'section' => 'automobile_car_dealer_footer_section',
	));

	$wp_customize->add_setting('automobile_car_dealer_footer_options',array(
        'default' => __('Right align','automobile-car-dealer'),
        'sanitize_callback' => 'automobile_car_dealer_sanitize_choices'
	));
	$wp_customize->add_control('automobile_car_dealer_footer_options',array(
        'type' => 'radio',
        'label' => __('Back To Top','automobile-car-dealer'),
        'section' => 'automobile_car_dealer_footer_section',
        'choices' => array(
            'Left align' => __('Left align','automobile-car-dealer'),
            'Right align' => __('Right align','automobile-car-dealer'),
            'Center align' => __('Center align','automobile-car-dealer'),
        ),
	) );
	
	$wp_customize->add_setting('automobile_car_dealer_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('automobile_car_dealer_footer_copy',array(
		'label'	=> __('Copyright Text','automobile-car-dealer'),
		'section'	=> 'automobile_car_dealer_footer_section',
		'description'	=> __('Add some text for footer like copyright etc.','automobile-car-dealer'),
		'type'		=> 'text'
	));
	
}

add_action( 'customize_register', 'automobile_car_dealer_customize_register' );	

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Automobile_Car_Dealer_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Automobile_Car_Dealer_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Automobile_Car_Dealer_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'title'   =>  esc_html__( 'Automobile Pro', 'automobile-car-dealer' ),
					'pro_text' => esc_html__( 'Go Pro', 'automobile-car-dealer' ),
					'pro_url'  => esc_url('https://www.buywptemplates.com/themes/premium-automotive-wordpress-theme'),
					'priority'   => 9
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'automobile-car-dealer-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'automobile-car-dealer-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}

	//Footer widget areas
		function automobile_car_dealer_sanitize_choices( $input ) {
		    $valid = array(
		        '1'     => __('One', 'automobile-car-dealer'),
		        '2'     => __('Two', 'automobile-car-dealer'),
		        '3'     => __('Three', 'automobile-car-dealer'),
		        '4'     => __('Four', 'automobile-car-dealer')
		    );
		    if ( array_key_exists( $input, $valid ) ) {
		        return $input;
		    } else {
		        return '';
		    }
		}
}

// Doing this customizer thang!
Automobile_Car_Dealer_Customize::get_instance();