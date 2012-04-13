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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_G40cloudfile_Domain_Model_Event.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Cloud File Manager
 *
 * @author Daniel Frei <df@gate40.net>
 */
class Tx_G40cloudfile_Domain_Model_EventTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_G40cloudfile_Domain_Model_Event
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_G40cloudfile_Domain_Model_Event();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setNameForStringSetsName() { 
		$this->fixture->setName('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getName()
		);
	}
	
	/**
	 * @test
	 */
	public function getProjectNrReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setProjectNrForStringSetsProjectNr() { 
		$this->fixture->setProjectNr('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getProjectNr()
		);
	}
	
	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() { 
		$this->fixture->setDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getBucketsReturnsInitialValueForObjectStorageContainingTx_G40cloudfile_Domain_Model_Bucket() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getBuckets()
		);
	}

	/**
	 * @test
	 */
	public function setBucketsForObjectStorageContainingTx_G40cloudfile_Domain_Model_BucketSetsBuckets() { 
		$bucket = new Tx_G40cloudfile_Domain_Model_Bucket();
		$objectStorageHoldingExactlyOneBuckets = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneBuckets->attach($bucket);
		$this->fixture->setBuckets($objectStorageHoldingExactlyOneBuckets);

		$this->assertSame(
			$objectStorageHoldingExactlyOneBuckets,
			$this->fixture->getBuckets()
		);
	}
	
	/**
	 * @test
	 */
	public function addBucketToObjectStorageHoldingBuckets() {
		$bucket = new Tx_G40cloudfile_Domain_Model_Bucket();
		$objectStorageHoldingExactlyOneBucket = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneBucket->attach($bucket);
		$this->fixture->addBucket($bucket);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneBucket,
			$this->fixture->getBuckets()
		);
	}

	/**
	 * @test
	 */
	public function removeBucketFromObjectStorageHoldingBuckets() {
		$bucket = new Tx_G40cloudfile_Domain_Model_Bucket();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($bucket);
		$localObjectStorage->detach($bucket);
		$this->fixture->addBucket($bucket);
		$this->fixture->removeBucket($bucket);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getBuckets()
		);
	}
	
	/**
	 * @test
	 */
	public function getCategoriesReturnsInitialValueForObjectStorageContainingTx_G40cloudfile_Domain_Model_Category() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getCategories()
		);
	}

	/**
	 * @test
	 */
	public function setCategoriesForObjectStorageContainingTx_G40cloudfile_Domain_Model_CategorySetsCategories() { 
		$category = new Tx_G40cloudfile_Domain_Model_Category();
		$objectStorageHoldingExactlyOneCategories = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCategories->attach($category);
		$this->fixture->setCategories($objectStorageHoldingExactlyOneCategories);

		$this->assertSame(
			$objectStorageHoldingExactlyOneCategories,
			$this->fixture->getCategories()
		);
	}
	
	/**
	 * @test
	 */
	public function addCategoryToObjectStorageHoldingCategories() {
		$category = new Tx_G40cloudfile_Domain_Model_Category();
		$objectStorageHoldingExactlyOneCategory = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCategory->attach($category);
		$this->fixture->addCategory($category);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneCategory,
			$this->fixture->getCategories()
		);
	}

	/**
	 * @test
	 */
	public function removeCategoryFromObjectStorageHoldingCategories() {
		$category = new Tx_G40cloudfile_Domain_Model_Category();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($category);
		$localObjectStorage->detach($category);
		$this->fixture->addCategory($category);
		$this->fixture->removeCategory($category);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getCategories()
		);
	}
	
}
?>