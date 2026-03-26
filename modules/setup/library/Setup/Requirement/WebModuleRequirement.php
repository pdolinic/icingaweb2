<?php

// SPDX-FileCopyrightText: 2020 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Module\Setup\Requirement;

use Icinga\Application\Icinga;
use Icinga\Module\Setup\Requirement;

class WebModuleRequirement extends Requirement
{
    protected function evaluate()
    {
        list($name, $op, $version) = $this->getCondition();

        $mm = Icinga::app()->getModuleManager();
        if (! $mm->hasInstalled($name)) {
            $this->setStateText(sprintf(mt('setup', '%s is not installed'), $this->getAlias()));
            return false;
        }

        $module = $mm->getModule($name, false);

        $moduleVersion = $module->getVersion();
        if ($moduleVersion[0] === 'v') {
            $moduleVersion = substr($moduleVersion, 1);
        }

        $this->setStateText(sprintf(mt('setup', '%s version: %s'), $this->getAlias(), $moduleVersion));
        return version_compare($moduleVersion, $version, $op);
    }
}
