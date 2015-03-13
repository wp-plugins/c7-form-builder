<?php
/**
 * Number Field Type
 *
 * @package    C7_Form_Builder
 * @subpackage C7_Form_Builder/Fields
 * @author     Chetan Chauhan <chetanchauhan1991@gmail.com>
 * @license    GPL-2.0+
 * @link       https://github.com/chetanchauhan/c7-form-builder/
 * @copyright  2014 Chetan Chauhan
 * @since      1.0.0
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Class CFB_Number_Field
 *
 * @package    C7_Form_Builder
 * @subpackage C7_Form_Builder/Fields
 * @author     Chetan Chauhan <chetanchauhan1991@gmail.com>
 */
class CFB_Number_Field extends CFB_Field {

	/**
	 * @var string
	 */
	protected $_input_type = 'number';

	/**
	 * @var int
	 */
	public $max = 999999;

	/**
	 * @var int
	 */
	public $min = 0;

	/**
	 * @var int
	 */
	public $step = 1;

	/**
	 * @return void
	 */
	protected function initialize() {
		$this->attributes['max']  = $this->max;
		$this->attributes['min']  = $this->min;
		$this->attributes['step'] = $this->step;

		// Do not remove.
		parent::initialize();
	}

	/**
	 * @return string
	 */
	public function get_type(){
		return 'number';
	}

}
