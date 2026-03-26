<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Util;

/**
 * Interface defining a factory which is configured at runtime
 */
interface ConfigAwareFactory
{
    /**
     * Set the factory's config
     *
     * @param   mixed   $config
     * @throws  \Icinga\Exception\ConfigurationError if the given config is not valid
     */
    public static function setConfig($config);
}
