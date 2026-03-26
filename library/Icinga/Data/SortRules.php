<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Data;

interface SortRules
{
    /**
     * Return some sort rules
     *
     * @return  array
     */
    public function getSortRules();
}
