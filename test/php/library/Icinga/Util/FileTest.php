<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Tests\Icinga\Util;

use Icinga\Util\File;
use Icinga\Test\BaseTestCase;

class FileTest extends BaseTestCase
{
    public function testWhetherWritingToNonWritableFilesThrowsAnException()
    {
        $this->expectException(\Icinga\Exception\NotWritableError::class);

        $file = new File('/dev/null');
        $file->fwrite('test');
    }

    public function testWhetherTruncatingNonWritableFilesThrowsAnException()
    {
        $this->expectException(\Icinga\Exception\NotWritableError::class);

        $file = new File('/dev/null');
        $file->ftruncate(0);
    }
}
