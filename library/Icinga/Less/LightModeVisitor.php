<?php

// SPDX-FileCopyrightText: 2022 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Less;

use Less_VisitorReplacing;

/**
 * Ensure that light mode calls have access to the environment in which the mode was defined
 */
class LightModeVisitor extends Less_VisitorReplacing
{
    use LightModeTrait;

    public $isPreVisitor = true;

    public function visitRulesetCall($c)
    {
        return LightModeCall::fromRulesetCall($c)->setLightMode($this->getLightMode());
    }

    public function run($node)
    {
        return $this->visitObj($node);
    }
}
