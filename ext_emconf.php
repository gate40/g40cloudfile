<?php

########################################################################
# Extension Manager/Repository config file for ext "g40cloudfile".
#
# Auto generated 17-04-2012 21:48
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Cloud File Manager',
	'description' => 'Lists Files stored in Buckets on Amazon S3 Simple Storage Service in a Table View',
	'category' => 'plugin',
	'author' => 'Daniel Frei',
	'author_email' => 'df@gate40.net',
	'author_company' => 'gate40 websolutions',
	'shy' => '',
	'priority' => '',
	'module' => '',
	'state' => 'beta',
	'internal' => '',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearCacheOnLoad' => 0,
	'lockType' => '',
	'version' => '0.1.0',
	'constraints' => array(
		'depends' => array(
			'extbase' => '1.3.0',
			'fluid' => '1.3.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:54:{s:21:"ExtensionBuilder.json";s:4:"5d50";s:6:"README";s:4:"ffdf";s:12:"ext_icon.gif";s:4:"e922";s:17:"ext_localconf.php";s:4:"8fa4";s:14:"ext_tables.php";s:4:"0490";s:14:"ext_tables.sql";s:4:"3c8d";s:41:"Classes/Controller/CategoryController.php";s:4:"b348";s:37:"Classes/Controller/FileController.php";s:4:"8d35";s:31:"Classes/Domain/Model/Bucket.php";s:4:"1fae";s:33:"Classes/Domain/Model/Category.php";s:4:"2e92";s:29:"Classes/Domain/Model/File.php";s:4:"c33c";s:46:"Classes/Domain/Repository/BucketRepository.php";s:4:"90b2";s:48:"Classes/Domain/Repository/CategoryRepository.php";s:4:"ef2e";s:44:"Classes/Domain/Repository/FileRepository.php";s:4:"39e6";s:44:"Configuration/ExtensionBuilder/settings.yaml";s:4:"ea4c";s:33:"Configuration/FlexForms/setup.xml";s:4:"632f";s:28:"Configuration/TCA/Bucket.php";s:4:"3b14";s:30:"Configuration/TCA/Category.php";s:4:"87d1";s:26:"Configuration/TCA/File.php";s:4:"0b5a";s:38:"Configuration/TypoScript/constants.txt";s:4:"7d42";s:34:"Configuration/TypoScript/setup.txt";s:4:"0d9a";s:40:"Resources/Private/Language/locallang.xml";s:4:"8327";s:80:"Resources/Private/Language/locallang_csh_tx_g40cloudfile_domain_model_bucket.xml";s:4:"1236";s:82:"Resources/Private/Language/locallang_csh_tx_g40cloudfile_domain_model_category.xml";s:4:"bb21";s:78:"Resources/Private/Language/locallang_csh_tx_g40cloudfile_domain_model_file.xml";s:4:"880b";s:43:"Resources/Private/Language/locallang_db.xml";s:4:"f227";s:38:"Resources/Private/Layouts/Default.html";s:4:"0e91";s:42:"Resources/Private/Partials/FormErrors.html";s:4:"f5bc";s:49:"Resources/Private/Partials/Bucket/Properties.html";s:4:"5f31";s:47:"Resources/Private/Partials/File/FormFields.html";s:4:"b69f";s:47:"Resources/Private/Partials/File/Properties.html";s:4:"c680";s:44:"Resources/Private/Templates/Bucket/List.html";s:4:"4e3b";s:44:"Resources/Private/Templates/Bucket/Show.html";s:4:"8240";s:46:"Resources/Private/Templates/Category/List.html";s:4:"0c16";s:42:"Resources/Private/Templates/File/Edit.html";s:4:"51e5";s:42:"Resources/Private/Templates/File/List.html";s:4:"92d4";s:41:"Resources/Private/Templates/File/New.html";s:4:"0792";s:42:"Resources/Private/Templates/File/Show.html";s:4:"c3df";s:40:"Resources/Public/CSS/tx_g40cloudfile.css";s:4:"6ea5";s:63:"Resources/Public/Icons/_tx_g40cloudfile_domain_model_bucket.gif";s:4:"f901";s:65:"Resources/Public/Icons/_tx_g40cloudfile_domain_model_category.gif";s:4:"905a";s:61:"Resources/Public/Icons/_tx_g40cloudfile_domain_model_file.gif";s:4:"905a";s:37:"Resources/Public/Icons/drive_disk.png";s:4:"d08c";s:35:"Resources/Public/Icons/relation.gif";s:4:"e615";s:62:"Resources/Public/Icons/tx_g40cloudfile_domain_model_bucket.gif";s:4:"a8e4";s:64:"Resources/Public/Icons/tx_g40cloudfile_domain_model_category.gif";s:4:"c673";s:60:"Resources/Public/Icons/tx_g40cloudfile_domain_model_file.gif";s:4:"fdb6";s:46:"Tests/Unit/Controller/BucketControllerTest.php";s:4:"0639";s:48:"Tests/Unit/Controller/CategoryControllerTest.php";s:4:"72c2";s:44:"Tests/Unit/Controller/FileControllerTest.php";s:4:"3cea";s:38:"Tests/Unit/Domain/Model/BucketTest.php";s:4:"3ba1";s:40:"Tests/Unit/Domain/Model/CategoryTest.php";s:4:"363d";s:36:"Tests/Unit/Domain/Model/FileTest.php";s:4:"09b7";s:14:"doc/manual.sxw";s:4:"8d2d";}',
);

?>