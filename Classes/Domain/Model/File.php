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
class Tx_G40cloudfile_Domain_Model_File extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * filename
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $filename;

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * text1
	 *
	 * @var string
	 */
	protected $text1;

	/**
	 * text2
	 *
	 * @var string
	 */
	protected $text2;

	/**
	 * text3
	 *
	 * @var string
	 */
	protected $text3;

	/**
	 * fileCategory
	 *
	 * @var Tx_G40cloudfile_Domain_Model_Category
	 */
	protected $fileCategory;

	/**
	 * fileBucket
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_G40cloudfile_Domain_Model_Bucket>
	 */
	protected $fileBucket;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->fileBucket = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Returns the filename
	 *
	 * @return string $filename
	 */
	public function getFilename() {
		return $this->filename;
	}

	/**
	 * Sets the filename
	 *
	 * @param string $filename
	 * @return void
	 */
	public function setFilename($filename) {
		$this->filename = $filename;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the text1
	 *
	 * @return string $text1
	 */
	public function getText1() {
		return $this->text1;
	}

	/**
	 * Sets the text1
	 *
	 * @param string $text1
	 * @return void
	 */
	public function setText1($text1) {
		$this->text1 = $text1;
	}

	/**
	 * Returns the text2
	 *
	 * @return string $text2
	 */
	public function getText2() {
		return $this->text2;
	}

	/**
	 * Sets the text2
	 *
	 * @param string $text2
	 * @return void
	 */
	public function setText2($text2) {
		$this->text2 = $text2;
	}

	/**
	 * Returns the text3
	 *
	 * @return string $text3
	 */
	public function getText3() {
		return $this->text3;
	}

	/**
	 * Sets the text3
	 *
	 * @param string $text3
	 * @return void
	 */
	public function setText3($text3) {
		$this->text3 = $text3;
	}

	/**
	 * Returns the fileCategory
	 *
	 * @return Tx_G40cloudfile_Domain_Model_Category $fileCategory
	 */
	public function getFileCategory() {
		return $this->fileCategory;
	}

	/**
	 * Sets the fileCategory
	 *
	 * @param Tx_G40cloudfile_Domain_Model_Category $fileCategory
	 * @return void
	 */
	public function setFileCategory(Tx_G40cloudfile_Domain_Model_Category $fileCategory) {
		$this->fileCategory = $fileCategory;
	}

	/**
	 * Adds a Bucket
	 *
	 * @param Tx_G40cloudfile_Domain_Model_Bucket $fileBucket
	 * @return void
	 */
	public function addFileBucket(Tx_G40cloudfile_Domain_Model_Bucket $fileBucket) {
		$this->fileBucket->attach($fileBucket);
	}

	/**
	 * Removes a Bucket
	 *
	 * @param Tx_G40cloudfile_Domain_Model_Bucket $fileBucketToRemove The Bucket to be removed
	 * @return void
	 */
	public function removeFileBucket(Tx_G40cloudfile_Domain_Model_Bucket $fileBucketToRemove) {
		$this->fileBucket->detach($fileBucketToRemove);
	}

	/**
	 * Returns the fileBucket
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_G40cloudfile_Domain_Model_Bucket> $fileBucket
	 */
	public function getFileBucket() {
		return $this->fileBucket;
	}

	/**
	 * Sets the fileBucket
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_G40cloudfile_Domain_Model_Bucket> $fileBucket
	 * @return void
	 */
	public function setFileBucket(Tx_Extbase_Persistence_ObjectStorage $fileBucket) {
		$this->fileBucket = $fileBucket;
	}

}
?>