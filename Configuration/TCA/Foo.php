<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$TCA['tx_t3cs12_domain_model_foo'] = array(
	'ctrl' => $TCA['tx_t3cs12_domain_model_foo']['ctrl'],
	'columns' => array(
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
			'config' => array(
				'type' => 'check'
			)
		),
		'title' => array(
			'exclude' => 0,
			'label' => 'Titel',
			'config' => array(
				'type' => 'input',
				'size' => 20,
				'eval' => 'trim,required',
				'max' => 256
			),
		),
	),
	'types' => array(
		'1' => array('showitem' => 'hidden, title'),
	),
);