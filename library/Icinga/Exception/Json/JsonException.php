<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Exception\Json;

use Icinga\Exception\IcingaException;

/**
 * Exception thrown by {@link \Icinga\Util\Json} on failure
 */
abstract class JsonException extends IcingaException
{
}
