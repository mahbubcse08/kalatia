<?php
/**
 * Iqra Education: Customizer
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function iqra_education_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'iqra_education_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'iqra-education' ),
	    'description' => __( 'Description of what this panel does.', 'iqra-education' ),
	) );

	$wp_customize->add_section( 'iqra_education_general_option', array(
    	'title'      => __( 'Sidebar Settings', 'iqra-education' ),
		'priority'   => 30,
		'panel' => 'iqra_education_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('iqra_education_layout_settings',array(
        'default' => __('Right Sidebar','iqra-education'),
        'sanitize_callback' => 'iqra_education_sanitize_choices'	        
	));

	$wp_customize->add_control('iqra_education_layout_settings',array(
        'type' => 'radio',
        'label'     => __('Theme Sidebar Layouts', 'iqra-education'),
        'description'   => __('This option work for blog page, blog single page, archive page and search page.', 'iqra-education'),
        'section' => 'iqra_education_general_option',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','iqra-education'),
            'Right Sidebar' => __('Right Sidebar','iqra-education'),
            'One Column' => __('Full Width','iqra-education'),
            'Grid Layout' => __('Grid Layout','iqra-education')
        ),
	));

	//Topbar section
	$wp_customize->add_section('iqra_education_contact_details',array(
		'title'	=> __('Topbar Section','iqra-education'),
		'description'	=> __('Add Header Content here','iqra-education'),
		'priority'	=> null,
		'panel' => 'iqra_education_panel_id',
	));

	$wp_customize->add_setting('iqra_education_contact_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('iqra_education_contact_number',array(
		'label'	=> __('Add Phone Number','iqra-education'),
		'section'	=> 'iqra_education_contact_details',
		'setting'	=> 'iqra_education_contact_number',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('iqra_education_email_address',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('iqra_education_email_address',array(
		'label'	=> __('Add Email','iqra-education'),
		'section'	=> 'iqra_education_contact_details',
		'setting'	=> 'iqra_education_email_address',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('iqra_education_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('iqra_education_time',array(
		'label'	=> __('Add Time','iqra-education'),
		'section'	=> 'iqra_education_contact_details',
		'setting'	=> 'iqra_education_time',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('iqra_education_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('iqra_education_facebook_url',array(
		'label'	=> __('Add Facebook link','iqra-education'),
		'section'	=> 'iqra_education_contact_details',
		'setting'	=> 'iqra_education_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('iqra_education_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('iqra_education_twitter_url',array(
		'label'	=> __('Add Twitter link','iqra-education'),
		'section'	=> 'iqra_education_contact_details',
		'setting'	=> 'iqra_education_twitter_url',
		'type'	=> 'url'
	));
	
	$wp_customize->add_setting('iqra_education_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('iqra_education_youtube_url',array(
		'label'	=> __('Add Youtube link','iqra-education'),
		'section'	=> 'iqra_education_contact_details',
		'setting'	=> 'iqra_education_youtube_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('iqra_education_google_plus_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('iqra_education_google_plus_url',array(
		'label'	=> __('Add Google Plus link','iqra-education'),
		'section'	=> 'iqra_education_contact_details',
		'setting'	=> 'iqra_education_google_plus_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('iqra_education_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('iqra_education_linkedin_url',array(
		'label'	=> __('Add Linkedin link','iqra-education'),
		'section'	=> 'iqra_education_contact_details',
		'setting'	=> 'iqra_education_linkedin_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('iqra_education_login_url',array(
		'default'=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('iqra_education_login_url',array(
		'label'	=> __('Add Login Button URL','iqra-education'),
		'section'=> 'iqra_education_contact_details',
		'type'=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'iqra_education_slider' , array(
    	'title'      => __( 'Slider Settings', 'iqra-education' ),
		'priority'   => null,
		'panel' => 'iqra_education_panel_id'
	) );

	$wp_customize->add_setting('iqra_education_slider_arrows',array(
        'default' => 'true',
        'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('iqra_education_slider_arrows',array(
     	'type' => 'checkbox',
      	'label' => __('Show / Hide slider','iqra-education'),
      	'section' => 'iqra_education_slider',
	));

	for ( $count = 1; $count <= 4; $count++ ) {

		$wp_customize->add_setting( 'iqra_education_slide_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'iqra_education_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'iqra_education_slide_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'iqra-education' ),
			'section'  => 'iqra_education_slider',
			'type'     => 'dropdown-pages'
		) );
	}

	//About
	$wp_customize->add_section('iqra_education_about',array(
		'title'	=> __('About Us','iqra-education'),
		'description'	=> __('Add About Us Section below.','iqra-education'),
		'panel' => 'iqra_education_panel_id',
	));

	$wp_customize->add_setting('iqra_education_title',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('iqra_education_title',array(
		'label'	=> __('Section Title','iqra-education'),
		'section'=> 'iqra_education_about',
		'setting'=> 'iqra_education_title',
		'type'=> 'text'
	));

	$wp_customize->add_setting( 'iqra_education_about_page', array(
		'default'           => '',
		'sanitize_callback' => 'iqra_education_sanitize_dropdown_pages'
	) );
	$wp_customize->add_control( 'iqra_education_about_page', array(
		'label'    => __( 'Select About Page', 'iqra-education' ),
		'section'  => 'iqra_education_about',
		'type'     => 'dropdown-pages'
	) );

	//Footer
	$wp_customize->add_section( 'iqra_education_footer' , array(
    	'title'      => __( 'Footer Text', 'iqra-education' ),
		'priority'   => null,
		'panel' => 'iqra_education_panel_id'
	) );

	$wp_customize->add_setting('iqra_education_footer_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('iqra_education_footer_text',array(
		'label'	=> __('Add Copyright Text','iqra-education'),
		'section'	=> 'iqra_education_footer',
		'setting'	=> 'iqra_education_footer_text',
		'type'		=> 'text'
	));


	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'iqra_education_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'iqra_education_customize_partial_blogdescription',
	) );
	
}
add_action( 'customize_register', 'iqra_education_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @since Iqra Education 1.0
 * @see iqra-education_customize_register()
 *
 * @return void
 */
function iqra_education_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @since Iqra Education 1.0
 * @see iqra-education_customize_register()
 *
 * @return void
 */
function iqra_education_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Return whether we're on a view that supports a one or two column layout.
 */
function iqra_education_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'footer-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Iqra_Education_Customize {

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
		$manager->register_section_type( 'Iqra_Education_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Iqra_Education_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Iqra Education Pro', 'iqra-education' ),
					'pro_text' => esc_html__( 'Go Pro', 'iqra-education' ),
					'pro_url'  => esc_url('https://www.themeseye.com/wordpress/education-wordpress-theme/'),
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

		wp_enqueue_script( 'iqra-education-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'iqra-education-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Iqra_Education_Customize::get_instance();