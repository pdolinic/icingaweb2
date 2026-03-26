<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Web\Widget;

use Icinga\Forms\Control\LimiterControlForm;

/**
 * Limiter control widget
 */
class Limiter extends AbstractWidget
{
    /**
     * Default limit for this instance
     *
     * @var int|null
     */
    protected $defaultLimit;

    /**
     * Get the default limit
     *
     * @return int|null
     */
    public function getDefaultLimit()
    {
        return $this->defaultLimit;
    }

    /**
     * Set the default limit
     *
     * @param   int $defaultLimit
     *
     * @return  $this
     */
    public function setDefaultLimit($defaultLimit)
    {
        $this->defaultLimit = (int) $defaultLimit;
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function render()
    {
        $control = new LimiterControlForm();
        $control
            ->setDefaultLimit($this->defaultLimit)
            ->handleRequest();
        return (string)$control;
    }
}
