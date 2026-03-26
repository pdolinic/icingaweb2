<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Data\Filter;

/**
 * Filter list AND
 *
 * Binary AND, all contained filters must succeed
 */
class FilterAnd extends FilterChain
{
    protected $operatorName = 'AND';

    protected $operatorSymbol = '&';

    /**
     * Whether the given row object matches this filter
     *
     * @object $row
     * @return boolean
     */
    public function matches($row)
    {
        foreach ($this->filters as $filter) {
            if (! $filter->matches($row)) {
                return false;
            }
        }
        return true;
    }

    public function andFilter(Filter $filter)
    {
        return $this->addFilter($filter);
    }

    public function orFilter(Filter $filter)
    {
        return Filter::matchAny($this, $filter);
    }
}
