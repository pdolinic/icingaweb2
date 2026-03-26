<?php

// SPDX-FileCopyrightText: 2021 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Util;

use Icinga\Less\Visitor;
use lessc;

class LessParser extends lessc
{
    public function __construct()
    {
        $this->setOption('plugins', [new Visitor()]);
    }
}
