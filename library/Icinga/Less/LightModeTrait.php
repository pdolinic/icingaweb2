<?php

// SPDX-FileCopyrightText: 2022 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Less;

trait LightModeTrait
{
    /** @var LightMode */
    private $lightMode;

    /**
     * @return LightMode
     */
    public function getLightMode()
    {
        return $this->lightMode;
    }

    /**
     * @param LightMode $lightMode
     *
     * @return $this
     */
    public function setLightMode(LightMode $lightMode)
    {
        $this->lightMode = $lightMode;

        return $this;
    }
}
