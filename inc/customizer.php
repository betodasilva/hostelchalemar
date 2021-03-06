<?php
/**
 * recantoalternativo Theme Customizer
 *
 * @package recantoalternativo
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function recantoalternativo_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'recantoalternativo_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'recantoalternativo_customize_partial_blogdescription',
		) );
	}

	/* Remove Default Sections
	───────────────────────────────────────────────────────*/
	$wp_customize->remove_section( 'nav' );
	$wp_customize->remove_section( 'static_front_page' );
	$wp_customize->remove_panel( 'widgets' );
	$wp_customize->remove_section( 'background_image' );
	$wp_customize->remove_section( 'header_image' );
	$wp_customize->remove_section( 'custom_css' );
	

	/* Front Page Section
	───────────────────────────────────────────────────────*/

	/* SECTIONS */

	//Front Page
	$wp_customize->add_section( 'about', array(
		'title'		=>	__( 'Pagina inicial: Sobre', 'recantoalternativo' ),
		'priority'	=>	30,
	) );
	$wp_customize->add_section( 'testimonials', array(
		'title'		=>	__( 'Pagina inicial: Depoimentos', 'recantoalternativo' ),
		'priority'	=>	31,
	) );



	// The Hotel
	$wp_customize->add_section( 'thehotel', array(
		'title'		=>	__( 'O Hotel: Hotel', 'recantoalternativo' ),
		'priority'	=>	32,
	) );

	$wp_customize->add_section( 'recreation', array(
		'title'		=>	__( 'O Hotel: Lazer', 'recantoalternativo' ),
		'priority'	=>	33,
	) );

	$wp_customize->add_section( 'ourlocation', array(
		'title'		=>	__( 'O Hotel: Localização', 'recantoalternativo' ),
		'priority'	=>	34,
	) );


	/* SETTINGS  */

	// About
	$wp_customize->add_setting( 'frontpage_about-title', array(
		'capability'	=>	'edit_theme_options',
		'type'			=>	'theme_mod',
	) );
	$wp_customize->add_setting( 'frontpage_about-text', array(
		'capability'	=>	'edit_theme_options',
		'type'			=>	'theme_mod',
	) );
	$wp_customize->add_setting( 'frontpage_about-img', array(
		'capability'	=>	'edit_theme_options',
		'type'			=>	'theme_mod',
	) );

	// Testimonials
	$wp_customize->add_setting( 'frontpage_testimonials-title', array(
		'capability'	=>	'edit_theme_options',
		'type'			=>	'theme_mod',
	) );
	$wp_customize->add_setting( 'frontpage_testimonials-text', array(
		'capability'	=>	'edit_theme_options',
		'type'			=>	'theme_mod',
	) );

	// The Hotel
	$wp_customize->add_setting( 'thehotel_hotel-title', array(
		'capability'	=>	'edit_theme_options',
		'type'			=>	'theme_mod',
	) );
	$wp_customize->add_setting( 'thehotel_hotel-text', array(
		'capability'	=>	'edit_theme_options',
		'type'			=>	'theme_mod',
	) );
	$wp_customize->add_setting( 'thehotel_hotel-img', array(
		'capability'	=>	'edit_theme_options',
		'type'			=>	'theme_mod',
	) );

	// Recreation
	$wp_customize->add_setting( 'thehotel_recreation-title', array(
		'capability'	=>	'edit_theme_options',
		'type'			=>	'theme_mod',
	) );
	$wp_customize->add_setting( 'thehotel_recreation-text', array(
		'capability'	=>	'edit_theme_options',
		'type'			=>	'theme_mod',
	) );
	$wp_customize->add_setting( 'thehotel_recreation-img', array(
		'capability'	=>	'edit_theme_options',
		'type'			=>	'theme_mod',
	) );


	// Our Location
	$wp_customize->add_setting( 'thehotel_ourlocation-title', array(
		'capability'	=>	'edit_theme_options',
		'type'			=>	'theme_mod',
	) );
	$wp_customize->add_setting( 'thehotel_ourlocation-text', array(
		'capability'	=>	'edit_theme_options',
		'type'			=>	'theme_mod',
	) );


	/* CONTROLS */
	
	// About
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'about-title', array(
		'label'			=>	_('Titulo'),
		'description'	=>	_('Titulo para a primeira seção da página inicial.'),
		'section'		=>	'about',
		'type'			=>	'text',
		'settings'		=>	'frontpage_about-title'
	) ) );

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'about-text', array(
		'label'			=>	_('Texto'),
		'description'	=>	_('Texto para a primeira seção da página inicial.'),
		'section'		=>	'about',
		'type'			=>	'textarea',
		'settings'		=>	'frontpage_about-text'
	) ) );

	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'about-img', array(
		'label'			=>	_('Imagem'),
		'description'	=>	_('Imagem para a seção sobre da página inicial'),
		'section'		=>	'about',
		'settings'		=>	'frontpage_about-img'
	) ) );

	//Testimonials
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'testimonials-title', array(
		'label'			=>	_('Titulo'),
		'description'	=>	_('Titulo que aparecerá na seção depoimentos'),
		'section'		=>	'testimonials',
		'type'			=>	'text',
		'settings'		=>	'frontpage_testimonials-title'
	) ) );

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'testimonials-text', array(
		'label'			=>	_('Texto'),
		'description'	=>	_('Texto para a seção de depoimentos'),
		'section'		=>	'testimonials',
		'type'			=>	'textarea',
		'settings'		=>	'frontpage_testimonials-text'
	) ) );

	// The Hotel
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'hotel-title', array(
		'label'			=>	_('Titulo'),
		'description'	=>	_('Titulo que aparecerá na seção o hotel'),
		'section'		=>	'thehotel',
		'type'			=>	'text',
		'settings'		=>	'thehotel_hotel-title'
	) ) );

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'hotel-text', array(
		'label'			=>	_('Texto'),
		'description'	=>	_('Texto para a seção de o hotel'),
		'section'		=>	'thehotel',
		'type'			=>	'textarea',
		'settings'		=>	'thehotel_hotel-text'
	) ) );

	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'hotel-img', array(
		'label'			=>	_('Imagem'),
		'description'	=>	_('Imagem para a seção sobre da página inicial'),
		'section'		=>	'thehotel',
		'settings'		=>	'thehotel_hotel-img'
	) ) );

	// Recreation
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'recreation-title', array(
		'label'			=>	_('Titulo'),
		'description'	=>	_('Titulo que aparecerá na seção o hotel'),
		'section'		=>	'recreation',
		'type'			=>	'text',
		'settings'		=>	'thehotel_recreation-title'
	) ) );

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'recreation-text', array(
		'label'			=>	_('Texto'),
		'description'	=>	_('Texto para a seção de o hotel'),
		'section'		=>	'recreation',
		'type'			=>	'textarea',
		'settings'		=>	'thehotel_recreation-text'
	) ) );

	$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'recreation-img', array(
		'label'			=>	_('Imagem'),
		'description'	=>	_('Imagem para a seção sobre da página inicial'),
		'section'		=>	'recreation',
		'settings'		=>	'thehotel_recreation-img'
	) ) );

	// Our Location
	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ourlocation-title', array(
		'label'			=>	_('Titulo'),
		'description'	=>	_('Titulo que aparecerá na seção o hotel'),
		'section'		=>	'ourlocation',
		'type'			=>	'text',
		'settings'		=>	'thehotel_ourlocation-title'
	) ) );

	$wp_customize->add_control( new WP_Customize_Control($wp_customize, 'ourlocation-text', array(
		'label'			=>	_('Texto'),
		'description'	=>	_('Texto para a seção de o hotel'),
		'section'		=>	'ourlocation',
		'type'			=>	'textarea',
		'settings'		=>	'thehotel_ourlocation-text'
	) ) );
}
add_action( 'customize_register', 'recantoalternativo_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function recantoalternativo_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function recantoalternativo_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function recantoalternativo_customize_preview_js() {
	wp_enqueue_script( 'recantoalternativo-customizer', get_template_directory_uri() . '/dist/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'recantoalternativo_customize_preview_js' );
