<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Security;

use Icinga\Exception\IcingaException;

/**
 * Exception thrown when a caller does not have the permissions required to access a resource
 */
class SecurityException extends IcingaException
{
}
