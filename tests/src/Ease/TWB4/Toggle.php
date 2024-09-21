<?php

declare(strict_types=1);

/**
 * This file is part of the Ease TWBootstrap4 Widgets package
 *
 * https://github.com/VitexSoftware/php-ease-twbootstrap4-widgets
 *
 * (c) Vítězslav Dvořák <http://vitexsoftware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Test\Ease\TWB4;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2017-11-11 at 19:37:36.
 */
class Toggle extends \PHPUnit\Framework\TestCase  // \Test\Ease\Html\CheckboxTagTest
{
    protected TWBSwitch $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new TWBSwitch('test');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
    }

    /**
     * @covers \Ease\ui\TWBSwitch::setProperties
     */
    public function testSetProperties(): void
    {
        $this->object->setProperties(['test' => true]);
    }

    /**
     * @covers \Ease\ui\TWBSwitch::finalize
     */
    public function testFinalize(): void
    {
        $this->object->finalize();
    }
}
