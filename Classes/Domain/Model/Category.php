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
class Tx_G40cloudfile_Domain_Model_Category extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * sort
	 *
	 * @var integer
	 */
	protected $sort;

	/**
	 * label1
	 *
	 * @var string
	 */
	protected $label1;

	/**
	 * label2
	 *
	 * @var string
	 */
	protected $label2;

	/**
	 * label3
	 *
	 * @var string
	 */
	protected $label3;

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the sort
	 *
	 * @return integer $sort
	 */
	public function getSort() {
		return $this->sort;
	}

	/**
	 * Sets the sort
	 *
	 * @param integer $sort
	 * @return void
	 */
	public function setSort($sort) {
		$this->sort = $sort;
	}

	/**
	 * Returns the label1
	 *
	 * @return string $label1
	 */
	public function getLabel1() {
		return $this->label1;
	}

	/**
	 * Sets the label1
	 *
	 * @param string $label1
	 * @return void
	 */
	public function setLabel1($label1) {
		$this->label1 = $label1;
	}

	/**
	 * Returns the label2
	 *
	 * @return string $label2
	 */
	public function getLabel2() {
		return $this->label2;
	}

	/**
	 * Sets the label2
	 *
	 * @param string $label2
	 * @return void
	 */
	public function setLabel2($label2) {
		$this->label2 = $label2;
	}

	/**
	 * Returns the label3
	 *
	 * @return string $label3
	 */
	public function getLabel3() {
		return $this->label3;
	}

	/**
	 * Sets the label3
	 *
	 * @param string $label3
	 * @return void
	 */
	public function setLabel3($label3) {
		$this->label3 = $label3;
	}

}
?>