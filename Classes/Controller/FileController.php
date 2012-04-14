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
class Tx_G40cloudfile_Controller_FileController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * fileRepository
	 *
	 * @var Tx_G40cloudfile_Domain_Repository_FileRepository
	 */
	protected $fileRepository;

	/**
	 * bucketRepository
	 *
	 * @var Tx_G40cloudfile_Domain_Repository_BucketRepository
	 */
	protected $bucketRepository;

	/**
	 * injectFileRepository
	 *
	 * @param Tx_G40cloudfile_Domain_Repository_FileRepository $fileRepository
	 * @return void
	 */
	public function injectFileRepository(Tx_G40cloudfile_Domain_Repository_FileRepository $fileRepository) {
		        $this->fileRepository = $fileRepository;
	}

	/**
	 * injectBucketRepository
	 *
	 * @param Tx_G40cloudfile_Domain_Repository_BucketRepository $bucketRepository
	 * @return void
	 */
	public function injectBucketRepository(Tx_G40cloudfile_Domain_Repository_BucketRepository $bucketRepository) {
		        $this->bucketRepository = $bucketRepository;
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$files = $this->fileRepository->findAll();
		$this->view->assign('files', $files);
        $buckets = $this->bucketRepository->findAll();
        $this->view->assign('buckets',$buckets);
	}

	/**
	 * action show
	 *
	 * @param $file
	 * @return void
	 */
	public function showAction(Tx_G40cloudfile_Domain_Model_File $file) {
		$this->view->assign('file', $file);
	}

}
?>