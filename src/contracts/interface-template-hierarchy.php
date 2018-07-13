<?php
/**
 * Template hierarchy contract.
 *
 * Defines the interface that template classes must use.
 *
 * @package   HybridCore
 * @author    Justin Tadlock <justintadlock@gmail.com>
 * @copyright Copyright (c) 2008 - 2018, Justin Tadlock
 * @link      https://themehybrid.com/hybrid-core
 * @license   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

namespace Hybrid\Contracts;

/**
 * Template interface.
 *
 * @since  5.0.0
 * @access public
 */
interface TemplateHierarchy {

	/**
	 * Should return an array of template file names without the file
	 * extension (`.php`).
	 *
	 * @since  5.0.0
	 * @access public
	 * @return array
	 */
	public function hierarchy();
}