<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Application\Logger;

use Icinga\Data\ConfigObject;

/**
 * Abstract class for writers that write messages to a log
 */
abstract class LogWriter
{
    /**
     * @var ConfigObject
     */
    protected $config;

    /**
     * Create a new log writer initialized with the given configuration
     */
    public function __construct(ConfigObject $config)
    {
        $this->config = $config;
    }

    /**
     * Log a message with the given severity
     */
    abstract public function log($severity, $message);
}
