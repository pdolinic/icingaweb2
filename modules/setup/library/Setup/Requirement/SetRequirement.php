<?php

// SPDX-FileCopyrightText: 2021 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Module\Setup\Requirement;

use Icinga\Module\Setup\Requirement;

/**
 * Add requirement field
 *
 * @package Icinga\Module\Setup\Requirement
 */
class SetRequirement extends Requirement
{
    protected function evaluate()
    {
        $condition = $this->getCondition();

        if ($condition->getState()) {
            $this->setStateText(sprintf(
                mt('setup', '%s is available.'),
                $this->getAlias() ?: $this->getTitle()
            ));
            return true;
        }

        $this->setStateText(sprintf(
            mt('setup', '%s is missing.'),
            $this->getAlias() ?: $this->getTitle()
        ));

        return false;
    }
}
