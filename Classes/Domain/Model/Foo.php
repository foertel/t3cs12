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

class Tx_T3cs12_Domain_Model_Foo extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * @var string
	 * [at]validate T3cs12:MyOwnValidator
	 */
	protected $title;
	
	/**
	 * @var Tx_T3cs12_Domain_Model_Author
	 * @lazy
	 */
	protected $author;

	/**
	 * @param string $title
	 * @return Tx_T3cs12_Domain_Model_Foo this
	 */
	public function setTitle($title) {
		$this->title = $title;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getTitle() {
		return $this->title;
	}
}
?>