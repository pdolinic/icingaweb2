<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Module\Setup\Requirement;

use Icinga\Module\Setup\Requirement;

class ConfigDirectoryRequirement extends Requirement
{
    public function getTitle()
    {
        $title = parent::getTitle();
        if ($title === null) {
            return mt('setup', 'Read- and writable configuration directory');
        }

        return $title;
    }

    protected function evaluate()
    {
        $path = $this->getCondition();
        if (file_exists($path)) {
            $readable = is_readable($path);
            if ($readable && is_writable($path)) {
                $this->setStateText(sprintf(mt('setup', 'The directory %s is read- and writable.'), $path));
                return true;
            } else {
                $this->setStateText(sprintf(
                    $readable
                        ? mt('setup', 'The directory %s is not writable.')
                        : mt('setup', 'The directory %s is not readable.'),
                    $path
                ));
                return false;
            }
        } else {
            $this->setStateText(sprintf(mt('setup', 'The directory %s does not exist.'), $path));
            return false;
        }
    }
}
