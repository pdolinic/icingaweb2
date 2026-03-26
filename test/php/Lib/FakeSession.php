<?php

// SPDX-FileCopyrightText: 2023 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Tests\Icinga\Lib;

use Icinga\Web\Session\Session;

class FakeSession extends Session
{
    public function read()
    {
    }

    public function exists()
    {
    }

    public function purge()
    {
    }

    public function refreshId()
    {
    }

    public function getId()
    {
        return '1234567890';
    }
}
