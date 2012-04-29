<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2012 Felix Oertel <f@oer.tel>
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

class Tx_T3cs12_Controller_DefaultController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * @var Tx_T3cs12_Domain_Repository_FooRepositoryInterface
	 * @inject
	 */
	protected $fooRepository;

	/**
	 * @param Tx_T3cs12_Domain_Repository_FooRepositoryInterface $fooRepository
	 */
	public function injectFooRepository(Tx_T3cs12_Domain_Repository_FooRepositoryInterface $fooRepository) {
		$this->fooRepository = $fooRepository;
	}

	/**
	 * @return void
	 */
	public function initializeObject() {
		// $signalSlotDispatcher = $this->objectManager->get('Tx_Extbase_SignalSlot_DispatcherInterface');

		// $signalSlotDispatcher->connect('Tx_Extbase_Persistence_Backend', 'afterInsertObject', function ($payload) {
		// 	var_dump($payload);
		// });

		// $signalSlotDispatcher->connect('Tx_Extbase_Persistence_Backend', 'afterInsertObject', 'Tx_T3cs12_Slots_BarSlot', 'onInsertObject');
	}

	/**
	 * @return void
	 */
	public function initializeIndexAction() {
		// $this->arguments['foo']->getPropertyMappingConfiguration()->allowCreationForPath('/bar\.[0-9]+\.baz/');
		// $this->arguments['foo']->getPropertyMappingConfiguration()->allowModificationForPath('/bar\.[0-9]+\.baz/');
	}

	/**
	 * @param Tx_T3cs12_Domain_Model_Foo $foo
	 * @return void
	 */
	public function indexAction(Tx_T3cs12_Domain_Model_Foo $foo = NULL) {
		$this->view->assign('foos', $this->fooRepository->findAll());

		$this->forward('show', NULL, NULL, array('foo' => $foo));

		// Tx_Extbase_Utility_Debugger::var_dump($this->fooRepository);
	}

	/**
	 * @param Tx_T3cs12_Domain_Model_Foo $foo
	 * @return void
	 */
	public function showAction(Tx_T3cs12_Domain_Model_Foo $foo = NULL) {
		var_dump('show action:', $foo);

		// Tx_Extbase_Utility_Debugger::var_dump($this->fooRepository);
	}
}
?>