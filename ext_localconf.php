<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Default',
	array('Default' => 'index,show',),
	array()
);

// $extbaseObjectContainer = t3lib_div::makeInstance('Tx_Extbase_Object_Container_Container'); // Singleton
// $extbaseObjectContainer->registerImplementation('Tx_T3cs12_Domain_Repository_FooRepositoryInterface', 'Tx_T3cs12_Domain_Repository_BetterFooRepository');
?>