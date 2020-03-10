<?php
/**
 * Sayara Automotive: Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function sayara_automotive_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'sayara_automotive_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'sayara-automotive' ),
	    'description' => __( 'Description of what this panel does.', 'sayara-automotive' ),
	) );

	// font array
	$font_array = array(
        '' => 'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' => 'Acme',
        'Anton' => 'Anton',
        'Architects Daughter' => 'Architects Daughter',
        'Arimo' => 'Arimo',
        'Arsenal' => 'Arsenal', 
        'Arvo' => 'Arvo',
        'Alegreya' => 'Alegreya',
        'Alfa Slab One' => 'Alfa Slab One',
        'Averia Serif Libre' => 'Averia Serif Libre',
        'Bangers' => 'Bangers', 
        'Boogaloo' => 'Boogaloo',
        'Bad Script' => 'Bad Script',
        'Bitter' => 'Bitter',
        'Bree Serif' => 'Bree Serif',
        'BenchNine' => 'BenchNine', 
        'Cabin' => 'Cabin', 
        'Cardo' => 'Cardo',
        'Courgette' => 'Courgette',
        'Cherry Swash' => 'Cherry Swash',
        'Cormorant Garamond' => 'Cormorant Garamond',
        'Crimson Text' => 'Crimson Text',
        'Cuprum' => 'Cuprum', 
        'Cookie' => 'Cookie', 
        'Chewy' => 'Chewy', 
        'Days One' => 'Days One', 
        'Dosis' => 'Dosis',
        'Droid Sans' => 'Droid Sans',
        'Economica' => 'Economica',
        'Fredoka One' => 'Fredoka One',
        'Fjalla One' => 'Fjalla One',
        'Francois One' => 'Francois One',
        'Frank Ruhl Libre' => 'Frank Ruhl Libre',
        'Gloria Hallelujah' => 'Gloria Hallelujah',
        'Great Vibes' => 'Great Vibes',
        'Handlee' => 'Handlee', 
        'Hammersmith One' => 'Hammersmith One',
        'Inconsolata' => 'Inconsolata', 
        'Indie Flower' => 'Indie Flower', 
        'IM Fell English SC' => 'IM Fell English SC', 
        'Julius Sans One' => 'Julius Sans One',
        'Josefin Slab' => 'Josefin Slab', 
        'Josefin Sans' => 'Josefin Sans', 
        'Kanit' => 'Kanit', 
        'Lobster' => 'Lobster', 
        'Lato' => 'Lato',
        'Lora' => 'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather', 
        'Monda' => 'Monda',
        'Montserrat' => 'Montserrat',
        'Muli' => 'Muli', 
        'Marck Script' => 'Marck Script',
        'Noto Serif' => 'Noto Serif',
        'Open Sans' => 'Open Sans', 
        'Overpass' => 'Overpass',
        'Overpass Mono' => 'Overpass Mono',
        'Oxygen' => 'Oxygen', 
        'Orbitron' => 'Orbitron', 
        'Patua One' => 'Patua One', 
        'Pacifico' => 'Pacifico',
        'Padauk' => 'Padauk', 
        'Playball' => 'Playball',
        'Playfair Display' => 'Playfair Display', 
        'PT Sans' => 'PT Sans',
        'Philosopher' => 'Philosopher',
        'Permanent Marker' => 'Permanent Marker',
        'Poiret One' => 'Poiret One', 
        'Quicksand' => 'Quicksand', 
        'Quattrocento Sans' => 'Quattrocento Sans', 
        'Raleway' => 'Raleway', 
        'Rubik' => 'Rubik', 
        'Rokkitt' => 'Rokkitt', 
        'Russo One' => 'Russo One', 
        'Righteous' => 'Righteous', 
        'Slabo' => 'Slabo', 
        'Source Sans Pro' => 'Source Sans Pro', 
        'Shadows Into Light Two' =>'Shadows Into Light Two', 
        'Shadows Into Light' => 'Shadows Into Light', 
        'Sacramento' => 'Sacramento', 
        'Shrikhand' => 'Shrikhand', 
        'Tangerine' => 'Tangerine',
        'Ubuntu' => 'Ubuntu', 
        'VT323' => 'VT323', 
        'Varela Round' => 'Varela Round', 
        'Vampiro One' => 'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' => 'Volkhov', 
        'Yanone Kaffeesatz' => 'Yanone Kaffeesatz',
    );
    
	//Color / Fonts Settings
	$wp_customize->add_section( 'sayara_automotive_typography', array(
    	'title'      => __( 'Color / Fonts Settings', 'sayara-automotive' ),
		'panel' => 'sayara_automotive_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'sayara_automotive_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_paragraph_color', array(
		'label' => __('Paragraph Color', 'sayara-automotive'),
		'section' => 'sayara_automotive_typography',
		'settings' => 'sayara_automotive_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('sayara_automotive_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sayara_automotive_paragraph_font_family', array(
	    'section'  => 'sayara_automotive_typography',
	    'label'    => __( 'Paragraph Fonts','sayara-automotive'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('sayara_automotive_paragraph_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','sayara-automotive'),
		'section'	=> 'sayara_automotive_typography',
		'setting'	=> 'sayara_automotive_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'sayara_automotive_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_atag_color', array(
		'label' => __('"a" Tag Color', 'sayara-automotive'),
		'section' => 'sayara_automotive_typography',
		'settings' => 'sayara_automotive_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('sayara_automotive_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sayara_automotive_atag_font_family', array(
	    'section'  => 'sayara_automotive_typography',
	    'label'    => __( '"a" Tag Fonts','sayara-automotive'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'sayara_automotive_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_li_color', array(
		'label' => __('"li" Tag Color', 'sayara-automotive'),
		'section' => 'sayara_automotive_typography',
		'settings' => 'sayara_automotive_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('sayara_automotive_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sayara_automotive_li_font_family', array(
	    'section'  => 'sayara_automotive_typography',
	    'label'    => __( '"li" Tag Fonts','sayara-automotive'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'sayara_automotive_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_h1_color', array(
		'label' => __('H1 Color', 'sayara-automotive'),
		'section' => 'sayara_automotive_typography',
		'settings' => 'sayara_automotive_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('sayara_automotive_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sayara_automotive_h1_font_family', array(
	    'section'  => 'sayara_automotive_typography',
	    'label'    => __( 'H1 Fonts','sayara-automotive'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('sayara_automotive_h1_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_h1_font_size',array(
		'label'	=> __('H1 Font Size','sayara-automotive'),
		'section'	=> 'sayara_automotive_typography',
		'setting'	=> 'sayara_automotive_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'sayara_automotive_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_h2_color', array(
		'label' => __('h2 Color', 'sayara-automotive'),
		'section' => 'sayara_automotive_typography',
		'settings' => 'sayara_automotive_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('sayara_automotive_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sayara_automotive_h2_font_family', array(
	    'section'  => 'sayara_automotive_typography',
	    'label'    => __( 'h2 Fonts','sayara-automotive'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('sayara_automotive_h2_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_h2_font_size',array(
		'label'	=> __('h2 Font Size','sayara-automotive'),
		'section'	=> 'sayara_automotive_typography',
		'setting'	=> 'sayara_automotive_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'sayara_automotive_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_h3_color', array(
		'label' => __('h3 Color', 'sayara-automotive'),
		'section' => 'sayara_automotive_typography',
		'settings' => 'sayara_automotive_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('sayara_automotive_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sayara_automotive_h3_font_family', array(
	    'section'  => 'sayara_automotive_typography',
	    'label'    => __( 'h3 Fonts','sayara-automotive'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('sayara_automotive_h3_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_h3_font_size',array(
		'label'	=> __('h3 Font Size','sayara-automotive'),
		'section'	=> 'sayara_automotive_typography',
		'setting'	=> 'sayara_automotive_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'sayara_automotive_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_h4_color', array(
		'label' => __('h4 Color', 'sayara-automotive'),
		'section' => 'sayara_automotive_typography',
		'settings' => 'sayara_automotive_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('sayara_automotive_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sayara_automotive_h4_font_family', array(
	    'section'  => 'sayara_automotive_typography',
	    'label'    => __( 'h4 Fonts','sayara-automotive'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('sayara_automotive_h4_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_h4_font_size',array(
		'label'	=> __('h4 Font Size','sayara-automotive'),
		'section'	=> 'sayara_automotive_typography',
		'setting'	=> 'sayara_automotive_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'sayara_automotive_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_h5_color', array(
		'label' => __('h5 Color', 'sayara-automotive'),
		'section' => 'sayara_automotive_typography',
		'settings' => 'sayara_automotive_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('sayara_automotive_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sayara_automotive_h5_font_family', array(
	    'section'  => 'sayara_automotive_typography',
	    'label'    => __( 'h5 Fonts','sayara-automotive'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('sayara_automotive_h5_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_h5_font_size',array(
		'label'	=> __('h5 Font Size','sayara-automotive'),
		'section'	=> 'sayara_automotive_typography',
		'setting'	=> 'sayara_automotive_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'sayara_automotive_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_h6_color', array(
		'label' => __('h6 Color', 'sayara-automotive'),
		'section' => 'sayara_automotive_typography',
		'settings' => 'sayara_automotive_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('sayara_automotive_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control(
	    'sayara_automotive_h6_font_family', array(
	    'section'  => 'sayara_automotive_typography',
	    'label'    => __( 'h6 Fonts','sayara-automotive'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('sayara_automotive_h6_font_size',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_h6_font_size',array(
		'label'	=> __('h6 Font Size','sayara-automotive'),
		'section'	=> 'sayara_automotive_typography',
		'setting'	=> 'sayara_automotive_h6_font_size',
		'type'	=> 'text'
	));
	
	// Add the Theme Color Option section.
	$wp_customize->add_section( 'sayara_automotive_theme_color_option', array( 
		'panel' => 'sayara_automotive_panel_id',
		'title' => esc_html__( 'Theme Color Option', 'sayara-automotive' )
	));

  	$wp_customize->add_setting( 'sayara_automotive_theme_color_first', array(
	    'default' => '#dd0004',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_theme_color_first', array(
  		'label' => __( 'Color Option', 'sayara-automotive' ),
	    'description' => __('One can change complete theme color on just one click.', 'sayara-automotive'),
	    'section' => 'sayara_automotive_theme_color_option',
	    'settings' => 'sayara_automotive_theme_color_first',
  	)));

  	$wp_customize->add_setting( 'sayara_automotive_theme_color_second', array(
	    'default' => '#153655',
	    'sanitize_callback' => 'sanitize_hex_color'
  	));
  	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'sayara_automotive_theme_color_second', array(
  		'label' => __( 'Color Option', 'sayara-automotive' ),
	    'description' => __('One can change complete theme color on just one click.', 'sayara-automotive'),
	    'section' => 'sayara_automotive_theme_color_option',
	    'settings' => 'sayara_automotive_theme_color_second',
  	)));

  	//Layout Settings
	$wp_customize->add_section( 'sayara_automotive_width_layout', array(
    	'title'      => __( 'Layout Settings', 'sayara-automotive' ),
		'panel' => 'sayara_automotive_panel_id'
	) );

	$wp_customize->add_setting('sayara_automotive_theme_options',array(
    'default' => __('Default','sayara-automotive'),
        'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control('sayara_automotive_theme_options',array(
        'type' => 'select',
        'label' => __('Container Box','sayara-automotive'),
        'description' => __('Here you can change the Width layout. ','sayara-automotive'),
        'section' => 'sayara_automotive_width_layout',
        'choices' => array(
            'Default' => __('Default','sayara-automotive'),
            'Wide Layout' => __('Wide Layout','sayara-automotive'),
            'Box Layout' => __('Box Layout','sayara-automotive'),
        ),
	) );

	// Button Settings
	$wp_customize->add_section( 'sayara_automotive_button_option', array(
		'title' => 'Button',
		'panel' => 'sayara_automotive_panel_id',
	));

	$wp_customize->add_setting('sayara_automotive_top_bottom_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_top_bottom_padding',array(
		'label'	=> __('Top and Bottom Padding ','sayara-automotive'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'sayara_automotive_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting('sayara_automotive_left_right_padding',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_left_right_padding',array(
		'label'	=> __('Left and Right Padding','sayara-automotive'),
		'input_attrs' => array(
            'step'             => 1,
			'min'              => 0,
			'max'              => 50,
        ),
		'section'=> 'sayara_automotive_button_option',
		'type'=> 'number'
	));

	$wp_customize->add_setting( 'sayara_automotive_border_radius', array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	) );
	$wp_customize->add_control( 'sayara_automotive_border_radius', array(
		'label'       => esc_html__( 'Button Border Radius','sayara-automotive' ),
		'section'     => 'sayara_automotive_button_option',
		'type'        => 'number',
		'input_attrs' => array(
			'step'             => 1,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_section( 'sayara_automotive_general_option', array(
    	'title'      => __( 'Sidebar Settings', 'sayara-automotive' ),
		'panel' => 'sayara_automotive_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('sayara_automotive_layout_settings',array(
        'default' => __('Right Sidebar','sayara-automotive'),
        'sanitize_callback' => 'sayara_automotive_sanitize_choices'	        
	));
	$wp_customize->add_control('sayara_automotive_layout_settings',array(
        'type' => 'radio',
        'label'     => __('Theme Sidebar Layouts', 'sayara-automotive'),
        'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'sayara-automotive'),
        'section' => 'sayara_automotive_general_option',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','sayara-automotive'),
            'Right Sidebar' => __('Right Sidebar','sayara-automotive'),
            'One Column' => __('Full Width','sayara-automotive'),
            'Grid Layout' => __('Grid Layout','sayara-automotive')
        ),
	));

	//Contact Details section
	$wp_customize->add_section('sayara_automotive_contact_details',array(
		'title'	=> __('Contact Details Section','sayara-automotive'),
		'description'	=> __('Add Header Content here','sayara-automotive'),
		'priority'	=> null,
		'panel' => 'sayara_automotive_panel_id',
	));

	//Show /Hide Topbar
	$wp_customize->add_setting( 'sayara_automotive_show_hide_topbar',array(
		'default' => 'true',
      	'sanitize_callback'	=> 'sanitize_text_field'
    ) );
    $wp_customize->add_control('sayara_automotive_show_hide_topbar',array(
    	'type' => 'checkbox',
        'label' => __( 'Show / Hide Top Header','sayara-automotive' ),
        'section' => 'sayara_automotive_contact_details'
    ));

	$wp_customize->add_setting('sayara_automotive_location_head',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_location_head',array(
		'label'	=> __('Add Location Text','sayara-automotive'),
		'section'	=> 'sayara_automotive_contact_details',
		'setting'	=> 'sayara_automotive_location_head',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('sayara_automotive_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('sayara_automotive_address',array(
		'label'	=> __('Add Location','sayara-automotive'),
		'section'	=> 'sayara_automotive_contact_details',
		'setting'	=> 'sayara_automotive_address',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('sayara_automotive_contact_head',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_contact_head',array(
		'label'	=> __('Add Contact Text','sayara-automotive'),
		'section'	=> 'sayara_automotive_contact_details',
		'setting'	=> 'sayara_automotive_contact_head',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('sayara_automotive_contact',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('sayara_automotive_contact',array(
		'label'	=> __('Add Contact no. and Mail Address','sayara-automotive'),
		'section'	=> 'sayara_automotive_contact_details',
		'setting'	=> 'sayara_automotive_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('sayara_automotive_time_head',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_time_head',array(
		'label'	=> __('Add Time Text','sayara-automotive'),
		'section'	=> 'sayara_automotive_contact_details',
		'setting'	=> 'sayara_automotive_time_head',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('sayara_automotive_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('sayara_automotive_time',array(
		'label'	=> __('Add Time','sayara-automotive'),
		'section'	=> 'sayara_automotive_contact_details',
		'setting'	=> 'sayara_automotive_time',
		'type'		=> 'text'
	));

	//Social Icons
	$wp_customize->add_section( 'sayara_automotive_social_icon' , array(
    	'title'      => __( 'Social Icons', 'sayara-automotive' ),
		'priority'   => null,
		'panel' => 'sayara_automotive_panel_id'
	) );

	$wp_customize->add_setting('sayara_automotive_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('sayara_automotive_facebook_url',array(
		'label'	=> __('Add Facebook link','sayara-automotive'),
		'section'	=> 'sayara_automotive_social_icon',
		'setting'	=> 'sayara_automotive_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('sayara_automotive_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('sayara_automotive_twitter_url',array(
		'label'	=> __('Add Twitter link','sayara-automotive'),
		'section'	=> 'sayara_automotive_social_icon',
		'setting'	=> 'sayara_automotive_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('sayara_automotive_google_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('sayara_automotive_google_url',array(
		'label'	=> __('Add Google link','sayara-automotive'),
		'section'	=> 'sayara_automotive_social_icon',
		'setting'	=> 'sayara_automotive_google_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('sayara_automotive_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('sayara_automotive_youtube_url',array(
		'label'	=> __('Add Youtube link','sayara-automotive'),
		'section'	=> 'sayara_automotive_social_icon',
		'setting'	=> 'sayara_automotive_youtube_url',
		'type'	=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'sayara_automotive_slider' , array(
    	'title'      => __( 'Slider Settings', 'sayara-automotive' ),
		'priority'   => null,
		'panel' => 'sayara_automotive_panel_id'
	) );

	$wp_customize->add_setting('sayara_automotive_slider_arrows',array(
        'default' => 'true',
        'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_slider_arrows',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide slider','sayara-automotive'),
      	'section' => 'sayara_automotive_slider',
	));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'sayara_automotive_slide_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'sayara_automotive_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'sayara_automotive_slide_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'sayara-automotive' ),
			'section'  => 'sayara_automotive_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	//content layout

    $wp_customize->add_setting('sayara_automotive_slider_content_option',array(
    'default' => __('Left','sayara-automotive'),
        'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control('sayara_automotive_slider_content_option',array(
        'type' => 'select',
        'label' => __('Slider Content Layout','sayara-automotive'),
        'section' => 'sayara_automotive_slider',
        'choices' => array(
            'Center' => __('Center','sayara-automotive'),
            'Left' => __('Left','sayara-automotive'),
            'Right' => __('Right','sayara-automotive'),
        ),
	) );

    //Slider excerpt
	$wp_customize->add_setting( 'sayara_automotive_slider_excerpt_number', array(
		'default'              => 20,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'sayara_automotive_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','sayara-automotive' ),
		'section'     => 'sayara_automotive_slider',
		'type'        => 'range',
		'settings'    => 'sayara_automotive_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('sayara_automotive_slider_opacity_color',array(
      'default'              => 0.3,
      'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control( 'sayara_automotive_slider_opacity_color', array(
	'label'       => esc_html__( 'Slider Image Opacity','sayara-automotive' ),
	'section'     => 'sayara_automotive_slider',
	'type'        => 'select',
	'settings'    => 'sayara_automotive_slider_opacity_color',
	'choices' => array(
      '0' =>  esc_attr('0','sayara-automotive'),
      '0.1' =>  esc_attr('0.1','sayara-automotive'),
      '0.2' =>  esc_attr('0.2','sayara-automotive'),
      '0.3' =>  esc_attr('0.3','sayara-automotive'),
      '0.4' =>  esc_attr('0.4','sayara-automotive'),
      '0.5' =>  esc_attr('0.5','sayara-automotive'),
      '0.6' =>  esc_attr('0.6','sayara-automotive'),
      '0.7' =>  esc_attr('0.7','sayara-automotive'),
      '0.8' =>  esc_attr('0.8','sayara-automotive'),
      '0.9' =>  esc_attr('0.9','sayara-automotive')
	),
	));

	// About Us
	$wp_customize->add_section('sayara_automotive_about',array(
		'title'	=> __('About Us','sayara-automotive'),
		'description'	=> __('Add About Us Section below.','sayara-automotive'),
		'panel' => 'sayara_automotive_panel_id',
	));

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	$pst[]='Select';  
	foreach($post_list as $post){
		$pst[$post->post_title] = $post->post_title;
	}

	for ( $count = 1; $count < 4; $count++ ) {

		$wp_customize->add_setting( 'sayara_automotive_tab_pages' . $count, array(
			'sanitize_callback' => 'sanitize_text_field'
		));
		$wp_customize->add_control( 'sayara_automotive_tab_pages' . $count, array(
			'label'    => __( 'Select Post', 'sayara-automotive' ),
			'section'  => 'sayara_automotive_about',
			'type'    => 'select',
			'choices' => $pst,
		));
	}

	//Blog Post
	$wp_customize->add_section('sayara_automotive_blog_post',array(
		'title'	=> __('Post Settings','sayara-automotive'),
		'panel' => 'sayara_automotive_panel_id',
	));	

	$wp_customize->add_setting('sayara_automotive_date_hide',array(
       'default' => 'false',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('sayara_automotive_date_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Date','sayara-automotive'),
       'section' => 'sayara_automotive_blog_post'
    ));

    $wp_customize->add_setting('sayara_automotive_comment_hide',array(
       'default' => 'false',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('sayara_automotive_comment_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Comments','sayara-automotive'),
       'section' => 'sayara_automotive_blog_post'
    ));

    $wp_customize->add_setting('sayara_automotive_author_hide',array(
       'default' => 'false',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('sayara_automotive_author_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Author','sayara-automotive'),
       'section' => 'sayara_automotive_blog_post'
    ));

    $wp_customize->add_setting('sayara_automotive_tags_hide',array(
       'default' => 'false',
       'sanitize_callback'	=> 'sanitize_text_field'
    ));
    $wp_customize->add_control('sayara_automotive_tags_hide',array(
       'type' => 'checkbox',
       'label' => __('Post Tags','sayara-automotive'),
       'section' => 'sayara_automotive_blog_post'
    ));

    //Blog layout
    $wp_customize->add_setting('sayara_automotive_blog_post_layout',array(
        'default' => __('Default','sayara-automotive'),
        'sanitize_callback' => 'sayara_automotive_sanitize_choices'
    ));
    $wp_customize->add_control('sayara_automotive_blog_post_layout',array(
        'type' => 'radio',
        'label' => __('Post Layout Option','sayara-automotive'),
        'section' => 'sayara_automotive_blog_post',
        'choices' => array(
            'Default' => __('Default','sayara-automotive'),
            'Center' => __('Center','sayara-automotive'),
            'Image and Content' => __('Image and Content','sayara-automotive'),
        ),
	) );

    $wp_customize->add_setting( 'sayara_automotive_excerpt_number', array(
		'default'              => 20,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'sayara_automotive_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','sayara-automotive' ),
		'section'     => 'sayara_automotive_blog_post',
		'type'        => 'number',
		'settings'    => 'sayara_automotive_excerpt_number',
		'input_attrs' => array(
			'step'             => 2,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	$wp_customize->add_setting('sayara_automotive_button_text',array(
		'default'=> 'READ MORE',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_button_text',array(
		'label'	=> __('Add Button Text','sayara-automotive'),
		'section'=> 'sayara_automotive_blog_post',
		'type'=> 'text'
	));

	//Footer
	$wp_customize->add_section( 'sayara_automotive_footer' , array(
    	'title'  => __( 'Footer Section', 'sayara-automotive' ),
		'priority'   => null,
		'panel' => 'sayara_automotive_panel_id'
	) );

	$wp_customize->add_setting('sayara_automotive_footer_widget',array(
        'default'           => '4',
        'sanitize_callback' => 'sayara_automotive_sanitize_choices',
    ));
    $wp_customize->add_control('sayara_automotive_footer_widget',array(
        'type'        => 'radio',
        'label'       => __('No. of Footer widget area', 'sayara-automotive'),
        'section'     => 'sayara_automotive_footer',
        'description' => __('Select the number of footer widget areas and after that, go to Appearance > Widgets and add your widgets in the footer.', 'sayara-automotive'),
        'choices' => array(
            '1'     => __('One', 'sayara-automotive'),
            '2'     => __('Two', 'sayara-automotive'),
            '3'     => __('Three', 'sayara-automotive'),
            '4'     => __('Four', 'sayara-automotive')
        ),
    )); 

	$wp_customize->add_setting('sayara_automotive_hide_show_scroll',array(
        'default' => 'true',
        'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('sayara_automotive_hide_show_scroll',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide Scroll To Top','sayara-automotive'),
      	'section' => 'sayara_automotive_footer',
	));

	$wp_customize->add_setting('sayara_automotive_footer_options',array(
        'default' => __('Right align','sayara-automotive'),
        'sanitize_callback' => 'sayara_automotive_sanitize_choices'
	));
	$wp_customize->add_control('sayara_automotive_footer_options',array(
        'type' => 'select',
        'label' => __('Scroll To Top','sayara-automotive'),
        'description' => __('Here you can change the Footer layout. ','sayara-automotive'),
        'section' => 'sayara_automotive_footer',
        'choices' => array(
            'Left align' => __('Left align','sayara-automotive'),
            'Right align' => __('Right align','sayara-automotive'),
            'Center align' => __('Center align','sayara-automotive'),
        ),
	) );

	$wp_customize->add_setting('sayara_automotive_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('sayara_automotive_footer_text',array(
		'label'	=> __('Add Copyright Text','sayara-automotive'),
		'section'	=> 'sayara_automotive_footer',
		'setting'	=> 'sayara_automotive_footer_text',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'sayara_automotive_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'sayara_automotive_customize_partial_blogdescription',
	) );
	
}
add_action( 'customize_register', 'sayara_automotive_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Sayara Automotive 1.0
 * @see sayara-automotive_customize_register()
 *
 * @return void
 */
function sayara_automotive_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Sayara Automotive 1.0
 * @see sayara-automotive_customize_register()
 *
 * @return void
 */
function sayara_automotive_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function sayara_automotive_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'footer-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Sayara_Automotive_Customize {

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
		$manager->register_section_type( 'Sayara_Automotive_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Sayara_Automotive_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Sayara Automotive Pro', 'sayara-automotive' ),
					'pro_text' => esc_html__( 'Go Pro', 'sayara-automotive' ),
					'pro_url'  => esc_url('https://www.themeseye.com/wordpress/automotive-wordpress-theme/'),
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

		wp_enqueue_script( 'sayara-automotive-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'sayara-automotive-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Sayara_Automotive_Customize::get_instance();