<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Data;

use Icinga\Data\Filter\Filter;
use Icinga\Exception\StatementException;

/**
 * Interface for data deletion
 */
interface Reducible
{
    /**
     * Delete entries in the given target, optionally limiting the affected entries by using a filter
     *
     * @param string $target
     * @param ?Filter $filter
     *
     * @throws StatementException
     */
    public function delete($target, ?Filter $filter = null);
}
