<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Application;

require_once dirname(__FILE__) . '/Web.php';

use Exception;
use Icinga\Exception\ProgrammingError;

class LegacyWeb extends Web
{
    // IcingaWeb 1.x base dir
    protected $legacyBasedir;

    protected function bootstrap()
    {
        parent::bootstrap();
        throw new ProgrammingError('Not yet');
        // $this->setupIcingaLegacyWrapper();
    }

    /**
     * Get the Icinga-Web 1.x base path
     *
     * @throws Exception
     * @return self
     */
    public function getLecacyBasedir()
    {
        return $this->legacyBasedir;
    }
}
