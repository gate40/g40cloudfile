<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Cloudfile',
	array(
		'File' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'File' => '',
		
	)
);

?>