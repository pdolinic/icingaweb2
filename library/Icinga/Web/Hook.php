<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Web;

use Icinga\Application\Hook as NewHookImplementation;

/**
 * Icinga Web Hook registry
 *
 * @deprecated It is highly recommended to use {@see Icinga\Application\Hook} instead. Though since this message
 *             (or rather the previous message) hasn't been visible for ages... This won't be removed anyway....
 */
class Hook extends NewHookImplementation
{
}
