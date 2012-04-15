<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Cloudfile',
	array(
		'Category' => 'list',
		'File' => 'list',
		
	),
	// non-cacheable actions
	array(
		'Category' => '',
		'File' => '',
		
	)
);

?>