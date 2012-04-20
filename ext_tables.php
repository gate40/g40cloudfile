<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Cloudfile',
	'Cloud File Manager'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Cloud File Manager');

// Include flex forms
$extensionName = t3lib_div::underscoredToUpperCamelCase($_EXTKEY);
$pluginSignature = strtolower($extensionName) . '_cloudfile';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
t3lib_extMgm::addPiFlexFormValue($pluginSignature, 'FILE:EXT:'.$_EXTKEY.'/Configuration/FlexForms/setup.xml');

t3lib_extMgm::addLLrefForTCAdescr('tx_g40cloudfile_domain_model_category', 'EXT:g40cloudfile/Resources/Private/Language/locallang_csh_tx_g40cloudfile_domain_model_category.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_g40cloudfile_domain_model_category');
$TCA['tx_g40cloudfile_domain_model_category'] = array(
    'ctrl' => array(
        'title'	=> 'LLL:EXT:g40cloudfile/Resources/Private/Language/locallang_db.xml:tx_g40cloudfile_domain_model_category',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'dividers2tabs' => TRUE,
        'versioningWS' => 2,
        'versioning_followPages' => TRUE,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Category.php',
        'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_g40cloudfile_domain_model_category.gif'
    ),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_g40cloudfile_domain_model_bucket', 'EXT:g40cloudfile/Resources/Private/Language/locallang_csh_tx_g40cloudfile_domain_model_bucket.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_g40cloudfile_domain_model_bucket');
$TCA['tx_g40cloudfile_domain_model_bucket'] = array(
    'ctrl' => array(
        'title'	=> 'LLL:EXT:g40cloudfile/Resources/Private/Language/locallang_db.xml:tx_g40cloudfile_domain_model_bucket',
        'label' => 'name',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'dividers2tabs' => TRUE,
        'versioningWS' => 2,
        'versioning_followPages' => TRUE,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Bucket.php',
        'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_g40cloudfile_domain_model_bucket.gif'
    ),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_g40cloudfile_domain_model_file', 'EXT:g40cloudfile/Resources/Private/Language/locallang_csh_tx_g40cloudfile_domain_model_file.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_g40cloudfile_domain_model_file');
$TCA['tx_g40cloudfile_domain_model_file'] = array(
    'ctrl' => array(
        'title'	=> 'LLL:EXT:g40cloudfile/Resources/Private/Language/locallang_db.xml:tx_g40cloudfile_domain_model_file',
        'label' => 'description',
        'label_alt' => 'filename',
        'label_alt_force' => TRUE,
        //'label_userFunc' => 'Tx_G40cloudfile_Domain_Repository_FileRepository->concatLabel',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'dividers2tabs' => TRUE,
        'versioningWS' => 2,
        'versioning_followPages' => TRUE,
        'origUid' => 't3_origuid',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => array(
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ),
        'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/File.php',
        'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_g40cloudfile_domain_model_file.gif'
    ),
);

?>