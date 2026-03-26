<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Data;

interface FilterColumns
{
    /**
     * Return a filterable's filter columns with their optional label as key
     *
     * @return  array
     */
    public function getFilterColumns();

    /**
     * Return a filterable's search columns
     *
     * @return  array
     */
    public function getSearchColumns();
}
