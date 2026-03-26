<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Web\Navigation;

/**
 * Dropdown navigation item
 *
 * @see \Icinga\Web\Navigation\Navigation For a usage example.
 */
class DropdownItem extends NavigationItem
{
    /**
     * {@inheritdoc}
     */
    public function init()
    {
        $this->children->setLayout(Navigation::LAYOUT_DROPDOWN);
    }
}
