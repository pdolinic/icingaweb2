<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Data\Filter;

class FilterLessThan extends FilterExpression
{
    public function __toString()
    {
        return $this->column . ' < ' . $this->expression;
    }

    public function toQueryString()
    {
        return $this->column . '<' . $this->expression;
    }

    public function matches($row)
    {
        if (! isset($row->{$this->column})) {
            return false;
        }

        return (string) $row->{$this->column} < (string) $this->expression;
    }
}
