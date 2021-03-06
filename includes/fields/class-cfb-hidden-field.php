<?php
/**
 * Hidden Field Type
 *
 * @package    C7_Form_Builder
 * @subpackage C7_Form_Builder/Fields
 * @author     Chetan Chauhan <chetanchauhan1991@gmail.com>
 * @license    GPL-2.0+
 * @link       https://github.com/chetanchauhan/c7-form-builder/
 * @copyright  2014-2015 Chetan Chauhan
 * @since      1.0.0
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Class CFB_Hidden_Field
 *
 * @package    C7_Form_Builder
 * @subpackage C7_Form_Builder/Fields
 * @author     Chetan Chauhan <chetanchauhan1991@gmail.com>
 */
class CFB_Hidden_Field extends CFB_Field {

	/**
	 * @var string
	 */
	protected $_input_type = 'hidden';

	/**
	 * @return array
	 */
	protected function get_default_args(){
		return array( 'view' => array( 'type' => 'hidden' ) );
	}

	/**
	 * @return false|CFB_Storage
	 */
	public function get_storage(){
		return false;
	}

	/**
	 * @return bool
	 */
	public function can_repeat(){
		return false;
	}

	/**
	 * @return string
	 */
	public function get_type(){
		return 'hidden';
	}

}
