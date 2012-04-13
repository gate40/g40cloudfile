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
 * Test case for class Tx_G40cloudfile_Domain_Model_File.
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
class Tx_G40cloudfile_Domain_Model_FileTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_G40cloudfile_Domain_Model_File
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_G40cloudfile_Domain_Model_File();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getFilenameReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFilenameForStringSetsFilename() { 
		$this->fixture->setFilename('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFilename()
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
	public function getText1ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setText1ForStringSetsText1() { 
		$this->fixture->setText1('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getText1()
		);
	}
	
	/**
	 * @test
	 */
	public function getText2ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setText2ForStringSetsText2() { 
		$this->fixture->setText2('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getText2()
		);
	}
	
	/**
	 * @test
	 */
	public function getText3ReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setText3ForStringSetsText3() { 
		$this->fixture->setText3('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getText3()
		);
	}
	
	/**
	 * @test
	 */
	public function getFileCategoryReturnsInitialValueForTx_G40cloudfile_Domain_Model_Category() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getFileCategory()
		);
	}

	/**
	 * @test
	 */
	public function setFileCategoryForTx_G40cloudfile_Domain_Model_CategorySetsFileCategory() { 
		$dummyObject = new Tx_G40cloudfile_Domain_Model_Category();
		$this->fixture->setFileCategory($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getFileCategory()
		);
	}
	
	/**
	 * @test
	 */
	public function getFileBucketReturnsInitialValueForObjectStorageContainingTx_G40cloudfile_Domain_Model_Bucket() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getFileBucket()
		);
	}

	/**
	 * @test
	 */
	public function setFileBucketForObjectStorageContainingTx_G40cloudfile_Domain_Model_BucketSetsFileBucket() { 
		$fileBucket = new Tx_G40cloudfile_Domain_Model_Bucket();
		$objectStorageHoldingExactlyOneFileBucket = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneFileBucket->attach($fileBucket);
		$this->fixture->setFileBucket($objectStorageHoldingExactlyOneFileBucket);

		$this->assertSame(
			$objectStorageHoldingExactlyOneFileBucket,
			$this->fixture->getFileBucket()
		);
	}
	
	/**
	 * @test
	 */
	public function addFileBucketToObjectStorageHoldingFileBucket() {
		$fileBucket = new Tx_G40cloudfile_Domain_Model_Bucket();
		$objectStorageHoldingExactlyOneFileBucket = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneFileBucket->attach($fileBucket);
		$this->fixture->addFileBucket($fileBucket);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneFileBucket,
			$this->fixture->getFileBucket()
		);
	}

	/**
	 * @test
	 */
	public function removeFileBucketFromObjectStorageHoldingFileBucket() {
		$fileBucket = new Tx_G40cloudfile_Domain_Model_Bucket();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($fileBucket);
		$localObjectStorage->detach($fileBucket);
		$this->fixture->addFileBucket($fileBucket);
		$this->fixture->removeFileBucket($fileBucket);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getFileBucket()
		);
	}
	
}
?>