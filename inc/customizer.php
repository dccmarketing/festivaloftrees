<?php
/**
 * Festival of Trees Theme Customizer
 *
 * Contains methods for customizing the theme customization screen.
 *
 * @link 		http://codex.wordpress.org/Theme_Customization_API
 * @since 		1.0.0
 * @package  	DocBlock
 */
class festival_of_trees_Customize {

   /**
	* This hooks into 'customize_register' (available as of WP 3.4) and allows
	* you to add new sections and controls to the Theme Customize screen.
	*
	* Note: To enable instant preview, we have to actually write a bit of custom
	* javascript. See live_preview() for more.
	*
	* @access 		public
	* @see 			add_action( 'customize_register', $func )
	* @param 		WP_Customize_Manager 		$wp_customize 		Theme Customizer object.
	* @link 		http://ottopress.com/2012/how-to-leverage-the-theme-customizer-in-your-own-themes/
	* @since 		1.0.0
	*/
	public static function register() $wp_customize ) {

/*
		// New Section
		$sectargs['title'] 			= __( 'New Section', 'festival-of-trees' );
		$sectargs['capability'] 	= 'edit_theme_options';
		$sectargs['description'] 	= __( 'New Customizer Section', 'festival-of-trees' );
		$wp_customize->add_section( 'new_section', $sectargs );



		// Add Settings
		$wp_customize->add_setting( 'color_field', array( 'normal', 'postMessage' )  );
		$wp_customize->add_setting( 'image_field', array( 'normal', 'postMessage' )  );



		// Add Controls

		// Text Field
		$settingargs['default'] 			= 'normal';
		$settingargs['transport'] 			= 'postMessage';
		$wp_customize->add_setting( 'text_field', $settingargs );

		$controlargs['label'] 				= __( 'Text Field', 'festival-of-trees' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'text_field';
		$wp_customize->add_control( 'text_field', $controlargs );



		// Checkbox Field
		$settingargs['default'] 			= 'true';
		$settingargs['transport'] 			= 'postMessage';
		$wp_customize->add_setting( 'checkbox_field', $settingargs );

		$controlargs['label'] 				= __( 'Checkbox Field', 'festival-of-trees' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'checkbox_field';
		$wp_customize->add_control( 'checkbox_field', $controlargs );



		// Radio Field
		$settingargs['default'] 			= 'choice1';
		$settingargs['transport'] 			= 'postMessage';
		$wp_customize->add_setting( 'radio_field', $settingargs );

		$controlargs['choices']['choice1'] 	= 'Choice 1';
		$controlargs['choices']['choice2'] 	= 'Choice 2';
		$controlargs['choices']['choice3'] 	= 'Choice 3';
		$controlargs['label'] 				= __( 'Radio Field', 'festival-of-trees' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'radio_field';
		$wp_customize->add_control( 'radio_field', $controlargs );



		// Select Field
		$settingargs['default'] 			= 'choice1';
		$settingargs['transport'] 			= 'postMessage';
		$wp_customize->add_setting( 'select_field', $settingargs );

		$controlargs['choices']['choice1'] 	= 'Choice 1';
		$controlargs['choices']['choice2'] 	= 'Choice 2';
		$controlargs['choices']['choice3'] 	= 'Choice 3';
		$controlargs['label'] 				= __( 'Select Field', 'festival-of-trees' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'select_field';
		$controlargs['type'] 				= 'dropdown-pages';
		$wp_customize->add_control( 'select_field', $controlargs );



		// Textarea Field
		function textarea_customizer( $wp_customize ) {

			class Example_Customize_Textarea_Control extends WP_Customize_Control {

				public $type = 'textarea';

				public function render_content() {

					?><label>
						<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
						<textarea rows="5" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea( $this->value() ); ?></textarea>
					</label><?php

				} // render_content()

			} // class

		} // textarea_customizer()

		$wp_customize->add_setting( 'textarea' );

		$controlargs['label'] 				= __( 'Textarea', 'festival-of-trees' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'textarea';
		$wp_customize->add_control( new Example_Customize_Textarea_Control( $wp_customize, 'textarea', $controlargs ) );



		// Page Select Field
		$settingargs['transport'] 			= 'postMessage';
		$wp_customize->add_setting( 'select_page_field', $settingargs );

		$controlargs['label'] 				= __( 'Select Page', 'festival-of-trees' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'select_page_field';
		$wp_customize->add_control( 'select_page_field', $controlargs );



		// Color Chooser Field
		$settingargs['default'] 			= '#ffffff';
		$settingargs['transport'] 			= 'postMessage';
		$wp_customize->add_setting( 'color_field', $settingargs );

		$controlargs['label'] 				= __( 'Color Field', 'festival-of-trees' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'color_field';
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'color_field', $controlargs ) );



		// File Upload Field
		$wp_customize->add_setting( 'file-upload' );

		$controlargs['label'] 				= __( 'File Upload', 'festival-of-trees' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'file-upload';
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'file-upload', $controlargs ) );



		// Image Upload Field
		$settingargs['default'] 			= '';
		$settingargs['transport'] 			= 'postMessage';
		$wp_customize->add_setting( 'image_field', $settingargs );

		$controlargs['label'] 				= __( 'Image Field', 'festival-of-trees' );
		$controlargs['section'] 			= 'new_section';
		$controlargs['settings'] 			= 'image_field';
		$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'image_field', $controlargs ) );
*/


		// Enable live preview JS
		$wp_customize->get_setting( 'blogname' )->transport 		= 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport 	= 'postMessage';
		$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
		$wp_customize->get_setting( 'text_field' )->transport		= 'postMessage';
		$wp_customize->get_setting( 'color_field' )->transport 		= 'postMessage';
		$wp_customize->get_setting( 'image_field' )->transport 		= 'postMessage';

	} // register()

	/**
	 * This will output the custom WordPress settings to the live theme's WP head.
	 *
	 * Used by hook: 'wp_head'
	 *
	 * @access 		public
	 * @see 		add_action( 'wp_head', $func )
	 * @since 		1.0.0
	 */
	public static function header_output() {

		?><!--Customizer CSS-->
		<style type="text/css"><?php

			$this->generate_css( '#site-title a', 'color', 'header_textcolor', '#' );
			$this->generate_css( 'body', 'background-color', 'background_color', '#' );
			$this->generate_css( 'a', 'color', 'link_textcolor' );

		?></style><!--/Customizer CSS--><?php

	} // header_output()

	/**
	 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
	 *
	 * Used by hook: 'customize_preview_init'
	 *
	 * @access 		public
	 * @see 		add_action( 'customize_preview_init', $func )
	 * @since 		1.0.0
	 * @uses 	wp_enqueue_script()
	 * @uses 	get_template_directory_uri()
	 */
	public static function live_preview() {

		wp_enqueue_script( 'festival_of_trees_customizer', get_template_directory_uri() . '/js/customizer.min.js', array( 'jquery', 'customize-preview' ), '20130508', true );

	} // live_preview()

	/**
	 * This will generate a line of CSS for use in header output. If the setting
	 * ($mod_name) has no defined value, the CSS will not be output.
	 *
	 * @access 		public
	 * @since 		1.0.0
	 * @param 		string 		$selector 		CSS selector
	 * @param 		string 		$style 			The name of the CSS *property* to modify
	 * @param 		string 		$mod_name 		The name of the 'theme_mod' option to fetch
	 * @param 		string 		$prefix 		Optional. Anything that needs to be output before the CSS property
	 * @param 		string 		$postfix 		Optional. Anything that needs to be output after the CSS property
	 * @param 		bool 		$echo 			Optional. Whether to print directly to the page (default: true).
	 * @uses 		get_theme_mod()
	 * @return 		string 						Returns a single line of CSS with selectors and a property.
	 */
	public static function generate_css( $selector, $style, $mod_name, $prefix='', $postfix='', $echo=true ) {

		$return = '';
		$mod 	= get_theme_mod( $mod_name );

		if ( ! empty( $mod ) ) {

			$return = sprintf('%s { %s:%s; }',
				$selector,
				$style,
				$prefix . $mod . $postfix
			);

			if ( $echo ) {

				echo $return;

			}

		}

		return $return;

	} // generate_css()

} // class

// Setup the Theme Customizer settings and controls...
add_action( 'customize_register' , array( 'festival_of_trees_Customize' , 'register' ) );

// Output custom CSS to live site
add_action( 'wp_head' , array( 'festival_of_trees_Customize' , 'header_output' ) );

// Enqueue live preview javascript in Theme Customizer admin screen
add_action( 'customize_preview_init' , array( 'festival_of_trees_Customize' , 'live_preview' ) );
