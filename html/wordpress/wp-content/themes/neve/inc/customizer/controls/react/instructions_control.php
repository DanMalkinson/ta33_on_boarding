<?php
/**
 * Created on:      2020-08-12
 *
 * @package Neve
 */

namespace Neve\Customizer\Controls\React;

/**
 * Customizer section.
 *
 * @package    WordPress
 * @subpackage Customize
 * @since      4.1.0
 * @see        WP_Customize_Section
 */
class Instructions_Control extends \WP_Customize_Control {

	/**
	 * Type of this section.
	 *
	 * @var string
	 */
	public $type = 'hfg_instructions';
	/**
	 * Default options schema.
	 *
	 * @var array
	 */
	public $default_options = [
		'description' => '',
		'image'       => '',
		'quickLinks'  => [],
	];

	/**
	 * Options passed to control.
	 *
	 * @var array
	 */
	public $options = [];



	/**
	 * Gather the parameters passed to client JavaScript via JSON.
	 *
	 * @since 4.1.0
	 *
	 * @return array The array to be exported to the client as JSON.
	 */
	public function json() {
		$json            = parent::json();
		$json['options'] = wp_parse_args( $this->options, $this->default_options );

		return $json;
	}
}


