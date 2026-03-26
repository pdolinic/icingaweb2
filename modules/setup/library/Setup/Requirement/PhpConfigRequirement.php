<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Module\Setup\Requirement;

use Icinga\Application\Platform;
use Icinga\Module\Setup\Requirement;

class PhpConfigRequirement extends Requirement
{
    protected function evaluate()
    {
        list($configDirective, $value) = $this->getCondition();
        $configValue = Platform::getPhpConfig($configDirective);
        $this->setStateText(
            $configValue
                ? sprintf(mt('setup', 'The PHP config `%s\' is set to "%s".'), $configDirective, $configValue)
                : sprintf(mt('setup', 'The PHP config `%s\' is not defined.'), $configDirective)
        );
        return is_bool($value) ? $configValue == $value : $configValue === $value;
    }
}
