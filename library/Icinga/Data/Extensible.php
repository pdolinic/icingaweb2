<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Data;

use Icinga\Exception\StatementException;

/**
 * Interface for data insertion
 */
interface Extensible
{
    /**
     * Insert the given data for the given target
     *
     * @param   string  $target
     * @param   array   $data
     *
     * @throws  StatementException
     */
    public function insert($target, array $data);
}
