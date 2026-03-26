<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Data;

use Icinga\Data\Filter\Filter;
use Icinga\Exception\StatementException;

/**
 * Interface for data updating
 */
interface Updatable
{
    /**
     * Update the target with the given data and optionally limit the affected entries by using a filter
     *
     * @param string $target
     * @param array $data
     * @param ?Filter $filter
     *
     * @throws StatementException
     */
    public function update($target, array $data, ?Filter $filter = null);
}
