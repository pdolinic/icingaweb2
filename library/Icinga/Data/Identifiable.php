<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Data;

/**
 * Interface for objects that are identifiable by an ID of any type
 */
interface Identifiable
{
    /**
     * Get the ID associated with this Identifiable object
     *
     * @return mixed
     */
    public function getId();
}
