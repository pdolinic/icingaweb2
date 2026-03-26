<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Web\View;

use Icinga\Authentication\Auth;
use Icinga\Web\Widget;

$this->addHelperFunction('auth', function () {
    return Auth::getInstance();
});

$this->addHelperFunction('widget', function ($name, $options = null) {
    return Widget::create($name, $options);
});
