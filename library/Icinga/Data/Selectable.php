<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Data;

/**
 * Interface for classes providing a data source to fetch data from
 */
interface Selectable
{
    /**
     * Provide a data source to fetch data from
     *
     * @return Queryable
     */
    public function select();
}
