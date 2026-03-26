<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Data;

/**
 * Interface for specifying data sources
 */
interface Queryable
{
    /**
     * Set the target and fields to query
     *
     * @param string $target
     * @param ?array $fields
     *
     * @return Fetchable
     */
    public function from($target, ?array $fields = null);
}
