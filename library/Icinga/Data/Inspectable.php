<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Data;

/**
 * An object for which the user can retrieve status information
 *
 * This interface is useful for providing summaries or diagnostic information about objects
 * to users.
 */
interface Inspectable
{
    /**
     * Inspect this object to gain extended information about its health
     *
     * @return Inspection           The inspection result
     */
    public function inspect();
}
