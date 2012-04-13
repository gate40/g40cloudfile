<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Daniel Frei <df@gate40.net>, gate40 websolutions
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package g40cloudfile
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_G40cloudfile_Domain_Model_TextLabel extends Tx_Extbase_DomainObject_AbstractValueObject {

	/**
	 * textLabel
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $textLabel;

	/**
	 * Returns the textLabel
	 *
	 * @return string $textLabel
	 */
	public function getTextLabel() {
		return $this->textLabel;
	}

	/**
	 * Sets the textLabel
	 *
	 * @param string $textLabel
	 * @return void
	 */
	public function setTextLabel($textLabel) {
		$this->textLabel = $textLabel;
	}

}
?>