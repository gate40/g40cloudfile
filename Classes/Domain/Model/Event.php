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
class Tx_G40cloudfile_Domain_Model_Event extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $name;

	/**
	 * projectNr
	 *
	 * @var string
	 */
	protected $projectNr;

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description;

	/**
	 * buckets
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_G40cloudfile_Domain_Model_Bucket>
	 */
	protected $buckets;

	/**
	 * categories
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_G40cloudfile_Domain_Model_Category>
	 */
	protected $categories;

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
		$this->buckets = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->categories = new Tx_Extbase_Persistence_ObjectStorage();
	}

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
	 * Returns the projectNr
	 *
	 * @return string $projectNr
	 */
	public function getProjectNr() {
		return $this->projectNr;
	}

	/**
	 * Sets the projectNr
	 *
	 * @param string $projectNr
	 * @return void
	 */
	public function setProjectNr($projectNr) {
		$this->projectNr = $projectNr;
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
	 * Adds a Bucket
	 *
	 * @param Tx_G40cloudfile_Domain_Model_Bucket $bucket
	 * @return void
	 */
	public function addBucket(Tx_G40cloudfile_Domain_Model_Bucket $bucket) {
		$this->buckets->attach($bucket);
	}

	/**
	 * Removes a Bucket
	 *
	 * @param Tx_G40cloudfile_Domain_Model_Bucket $bucketToRemove The Bucket to be removed
	 * @return void
	 */
	public function removeBucket(Tx_G40cloudfile_Domain_Model_Bucket $bucketToRemove) {
		$this->buckets->detach($bucketToRemove);
	}

	/**
	 * Returns the buckets
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_G40cloudfile_Domain_Model_Bucket> $buckets
	 */
	public function getBuckets() {
		return $this->buckets;
	}

	/**
	 * Sets the buckets
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_G40cloudfile_Domain_Model_Bucket> $buckets
	 * @return void
	 */
	public function setBuckets(Tx_Extbase_Persistence_ObjectStorage $buckets) {
		$this->buckets = $buckets;
	}

	/**
	 * Adds a Category
	 *
	 * @param Tx_G40cloudfile_Domain_Model_Category $category
	 * @return void
	 */
	public function addCategory(Tx_G40cloudfile_Domain_Model_Category $category) {
		$this->categories->attach($category);
	}

	/**
	 * Removes a Category
	 *
	 * @param Tx_G40cloudfile_Domain_Model_Category $categoryToRemove The Category to be removed
	 * @return void
	 */
	public function removeCategory(Tx_G40cloudfile_Domain_Model_Category $categoryToRemove) {
		$this->categories->detach($categoryToRemove);
	}

	/**
	 * Returns the categories
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_G40cloudfile_Domain_Model_Category> $categories
	 */
	public function getCategories() {
		return $this->categories;
	}

	/**
	 * Sets the categories
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_G40cloudfile_Domain_Model_Category> $categories
	 * @return void
	 */
	public function setCategories(Tx_Extbase_Persistence_ObjectStorage $categories) {
		$this->categories = $categories;
	}

}
?>