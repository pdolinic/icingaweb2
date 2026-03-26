<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Authentication;

use Icinga\User;

interface Authenticatable
{
    /**
     * Authenticate a user
     *
     * @param   User    $user
     * @param   string  $password
     *
     * @return  bool
     *
     * @throws  \Icinga\Exception\AuthenticationException If authentication errors
     */
    public function authenticate(User $user, $password);
}
