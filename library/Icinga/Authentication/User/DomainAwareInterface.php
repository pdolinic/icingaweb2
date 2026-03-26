<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Authentication\User;

/**
 * Interface for user backends that are responsible for a specific domain
 */
interface DomainAwareInterface
{
    /**
     * Get the domain the backend is responsible for
     *
     * @return  string
     */
    public function getDomain();
}
