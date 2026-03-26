<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Util;

use FilterIterator;

/**
 * Class EnumeratingFilterIterator
 *
 * FilterIterator with continuous numeric key (index)
 */
abstract class EnumeratingFilterIterator extends FilterIterator
{
    /**
     * @var int
     */
    private $index;

    public function rewind(): void
    {
        parent::rewind();
        $this->index = 0;
    }

    public function key(): int
    {
        return $this->index++;
    }
}
