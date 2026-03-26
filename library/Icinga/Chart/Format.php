<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Chart;

class Format
{
    /**
     * Format a number into a number-string as defined by the SVG-Standard
     *
     * @see http://www.w3.org/TR/SVG/types.html#DataTypeNumber
     *
     * @param $number
     *
     * @return string
     */
    public static function formatSVGNumber($number)
    {
        return number_format($number, 1, '.', '');
    }
}
