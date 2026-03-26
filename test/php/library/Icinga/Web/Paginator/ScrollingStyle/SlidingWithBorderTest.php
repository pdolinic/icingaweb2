<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Tests\Icinga\Web\Paginator\ScrollingStyle;

use Icinga\Application\Icinga;
use Mockery;
use Zend_Paginator;
use Icinga\Test\BaseTestCase;

class SlidingWithborderTest extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();

        require_once realpath(
            Icinga::app()->getLibraryDir('Icinga')
            . '/Web/Paginator/ScrollingStyle/SlidingWithBorder.php'
        );
    }

    public function testGetPages2()
    {
        $scrollingStyle = new \Icinga_Web_Paginator_ScrollingStyle_SlidingWithBorder();
        $paginator = new Zend_Paginator($this->getPaginatorAdapter());

        $pages = $scrollingStyle->getPages($paginator);
        $this->assertIsArray($pages);
        $this->assertCount(10, $pages);
        $this->assertEquals('...', $pages[8]);
    }

    public function testGetPages3()
    {
        $scrollingStyle = new \Icinga_Web_Paginator_ScrollingStyle_SlidingWithBorder();
        $paginator = new Zend_Paginator($this->getPaginatorAdapter());
        $paginator->setCurrentPageNumber(9);

        $pages = $scrollingStyle->getPages($paginator);
        $this->assertIsArray($pages);
        $this->assertCount(10, $pages);
        $this->assertEquals('...', $pages[3]);
        $this->assertEquals('...', $pages[12]);
    }

    protected function getPaginatorAdapter()
    {
        return Mockery::mock('\Zend_Paginator_Adapter_Interface')->shouldReceive('count')->andReturn(1000)->getMock();
    }
}
