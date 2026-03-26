<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Data\Filter;

class FilterMatchNot extends FilterExpression
{
    public function matches($row)
    {
        return !parent::matches($row);
    }
}
