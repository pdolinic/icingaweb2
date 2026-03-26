<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Data\Filter;

use Icinga\Exception\IcingaException;

/**
 * Filter Exception Class
 *
 * Filter Exceptions should be thrown on filter parse errors or similar
 */
class FilterException extends IcingaException
{
}
