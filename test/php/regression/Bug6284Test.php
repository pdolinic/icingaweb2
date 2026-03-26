<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Tests\Icinga\Regression;

use Icinga\Test\BaseTestCase;
use Icinga\Web\Url;

/**
 * Regression-Test for bug #6284
 *
 * href-helper drops URL fragments.
 *
 * @see https://dev.icinga.com/issues/6284
 */
class Bug6284Test extends BaseTestCase
{
    public function testWhetherUrlFromPathDoesNotDropFragments()
    {
        $url = 'some/route/with#anchor';
        $this->assertEquals($url, Url::fromPath($url)->getRelativeUrl());
    }
}
