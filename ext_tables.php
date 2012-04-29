<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin($_EXTKEY, 'Default', 'TYPO3camp Stuttgart 2012');

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'TYPO3camp Stuttgart 2012');

t3lib_extMgm::allowTableOnStandardPages('tx_t3cs12_domain_model_foo');
$TCA['tx_t3cs12_domain_model_foo'] = array (
	'ctrl' => array (
		'title'    => 'Foo',
		'label' => 'title',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden'
			),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/Foo.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/icon_tx_blogexample_domain_model_blog.gif'
	)
);
?>