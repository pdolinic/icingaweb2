<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Web\Widget\Dashboard;

use Icinga\Web\Widget\AbstractWidget;

abstract class UserWidget extends AbstractWidget
{
    /**
     * Flag if widget is created by an user
     *
     * @var bool
     */
    protected $userWidget = false;

    /**
     * Set the user widget flag
     *
     * @param boolean $userWidget
     */
    public function setUserWidget($userWidget = true)
    {
        $this->userWidget = (bool) $userWidget;
    }

    /**
     * Getter for user widget flag
     *
     * @return boolean
     */
    public function isUserWidget()
    {
        return $this->userWidget;
    }
}
