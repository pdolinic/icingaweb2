<?php

// SPDX-FileCopyrightText: 2021 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Module\Migrate\Clicommands;

use Icinga\Application\Logger;
use Icinga\Cli\Command;

class NavigationCommand extends Command
{
    /**
     * Deprecated. Use `icingacli icingadb migrate navigation` instead.
     */
    public function indexAction(): void
    {
        Logger::error('Deprecated. Use `icingacli icingadb migrate navigation` instead.');
        exit(1);
    }
}
