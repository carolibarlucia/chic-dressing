<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Elementor fonts.
 *
 * Elementor fonts handler class is responsible for registering the supported
 * fonts used by Elementor.
 *
 * @since 1.0.0
 */
class Fonts {

	/**
	 * The system font name.
	 */
	const SYSTEM = 'system';

	/**
	 * The google font name.
	 */
	const GOOGLE = 'googlefonts';

	/**
	 * The google early access font name.
	 */
	const EARLYACCESS = 'earlyaccess';

	/**
	 * The local font name.
	 */
	const LOCAL = 'local';

	private static $fonts;

	/**
	 * Font groups.
	 *
	 * Used to hold font types/groups.
	 *
	 * @since 1.9.4
	 * @access private
	 * @static
	 *
	 * @var null|array
	 */
	private static $font_groups;

	/**
	 * Get font Groups.
	 *
	 * Retrieve the list of font groups.
	 *
	 * @since 1.9.4
	 * @access public
	 * @static
	 *
	 * @return array Supported font groups/types.
	 */
	public static function get_font_groups() {
		if ( null === self::$font_groups ) {
			$font_groups = [
				self::SYSTEM => esc_html__( 'System', 'elementor' ),
				self::GOOGLE => esc_html__( 'Google', 'elementor' ),
				self::EARLYACCESS => esc_html__( 'Google Early Access', 'elementor' ),
			];

			/**
			 * Font groups.
			 *
			 * Filters the fonts groups used by Elementor.
			 *
			 * @since 1.9.4
			 *
			 * @param array $font_groups Font groups.
			 */
			$font_groups = apply_filters( 'elementor/fonts/groups', $font_groups );

			self::$font_groups = $font_groups;
		}

		return self::$font_groups;
	}

	/**
	 * Get fonts.
	 *
	 * Retrieve the list of supported fonts.
	 *
	 * @since 1.0.0
	 * @access public
	 * @static
	 *
	 * @return array Supported fonts.
	 */
	public static function get_fonts() {
		if ( null === self::$fonts ) {
			$additional_fonts = [];

			/**
			 * Additional fonts.
			 *
			 * Filters the fonts used by Elementor to add additional fonts.
			 *
			 * @since 1.9.4
			 *
			 * @param array $additional_fonts Additional Elementor fonts.
			 */
			$additional_fonts = apply_filters( 'elementor/fonts/additional_fonts', $additional_fonts );

			self::$fonts = array_replace( self::get_native_fonts(), $additional_fonts );
		}

		return self::$fonts;
	}

	/**
	 * Get Elementor native fonts.
	 *
	 * Retrieve the list of supported fonts.
	 *
	 * @since 1.9.4
	 * @access private
	 * @static
	 *
	 * @return array Supported fonts.
	 */
	private static function get_native_fonts() {
		return [
			// System fonts.
			'Arial' => self::SYSTEM,
			'Tahoma' => self::SYSTEM,
			'Verdana' => self::SYSTEM,
			'Helvetica' => self::SYSTEM,
			'Times New Roman' => self::SYSTEM,
			'Trebuchet MS' => self::SYSTEM,
			'Georgia' => self::SYSTEM,

			// Google Fonts (last update: 17/01/2022).
			
		];
	}

	/**
	 * Get font type.
	 *
	 * Retrieve the font type for a given font.
	 *
	 * @since 1.0.0
	 * @access public
	 * @static
	 *
	 * @param string $name Font name.
	 *
	 * @return string|false Font type, or false if font doesn't exist.
	 */
	public static function get_font_type( $name ) {
		$fonts = self::get_fonts();

		if ( empty( $fonts[ $name ] ) ) {
			return false;
		}

		return $fonts[ $name ];
	}

	/**
	 * Get fonts by group.
	 *
	 * Retrieve all the fonts belong to specific group.
	 *
	 * @since 1.0.0
	 * @access public
	 * @static
	 *
	 * @param array $groups Optional. Font group. Default is an empty array.
	 *
	 * @return array Font type, or false if font doesn't exist.
	 */
	public static function get_fonts_by_groups( $groups = [] ) {
		return array_filter( self::get_fonts(), function( $font ) use ( $groups ) {
			return in_array( $font, $groups );
		} );
	}

	public static function get_font_display_setting() {
		return get_option( 'elementor_font_display', 'auto' );
	}
}
