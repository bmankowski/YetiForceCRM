<?php

/**
 * List view test class.
 *
 * @package   Tests
 *
 * @copyright YetiForce Sp. z o.o.
 * @license   YetiForce Public License 4.0 (licenses/LicenseEN.txt or yetiforce.com)
 * @author    Mariusz Krzaczkowski <m.krzaczkowski@yetiforce.com>
 */

namespace Tests\Init;

use Facebook\WebDriver\WebDriverBy;

/**
 * @internal
 * @coversNothing
 */
final class SettingsTest extends \Tests\GuiBase
{
	/**
	 * Testing marketplace view.
	 *
	 * @return void
	 */
	public function testMarketplace(): void
	{
		$this->url('index.php?parent=Settings&module=Vtiger&view=Index');
		$this->findError();
		static::assertSame('Settings', $this->driver->findElement(WebDriverBy::id('parent'))->getAttribute('value'));
		static::assertSame('Vtiger', $this->driver->findElement(WebDriverBy::id('module'))->getAttribute('value'));
		static::assertSame('Index', $this->driver->findElement(WebDriverBy::id('view'))->getAttribute('value'));
	}

	/**
	 * Testing dashboard view.
	 *
	 * @return void
	 */
	public function testDashboard(): void
	{
		$this->url('index.php?parent=Settings&module=YetiForce&view=Shop');
		$this->findError();
		static::assertSame('Settings', $this->driver->findElement(WebDriverBy::id('parent'))->getAttribute('value'));
		static::assertSame('YetiForce', $this->driver->findElement(WebDriverBy::id('module'))->getAttribute('value'));
		static::assertSame('Shop', $this->driver->findElement(WebDriverBy::id('view'))->getAttribute('value'));
	}
}
