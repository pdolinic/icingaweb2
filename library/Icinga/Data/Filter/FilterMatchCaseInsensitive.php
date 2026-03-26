<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Data\Filter;

class FilterMatchCaseInsensitive extends FilterMatch
{
    public function __construct($column, $sign, $expression)
    {
        parent::__construct($column, $sign, $expression);
        $this->caseSensitive = false;
    }
}
