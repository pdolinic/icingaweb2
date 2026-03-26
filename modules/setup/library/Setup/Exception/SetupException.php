<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Module\Setup\Exception;

use Icinga\Exception\IcingaException;

/**
 * Class SetupException
 *
 * Used to indicate that a setup should be aborted.
 */
class SetupException extends IcingaException
{
    /**
     * {@inheritdoc}
     */
    public function __construct()
    {
        parent::__construct('Setup abortion');
    }
}
