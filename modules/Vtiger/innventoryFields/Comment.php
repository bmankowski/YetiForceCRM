<?php

/**
 * Inventory Comment Field Class
 * @package YetiForce.Fields
 * @license licenses/License.html
 * @author Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */
class Vtiger_Comment_InventoryField extends Vtiger_Basic_InventoryField
{

	protected $name = 'Comment';
	protected $defaultLabel = 'LBL_COMMENT';
	protected $columnName = 'comment';
	protected $dbType = 'varchar(500)';

}
