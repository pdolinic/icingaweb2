<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Module\Setup;

/**
 * Class to implement functionality for a single setup step
 */
abstract class Step
{
    /**
     * Apply this step's configuration changes
     *
     * @return  bool
     */
    abstract public function apply();

    /**
     * Return a HTML representation of this step's configuration changes supposed to be made
     *
     * @return  string
     */
    abstract public function getSummary();

    /**
     * Return a textual summary of all configuration changes made
     *
     * @return  ?array
     */
    abstract public function getReport();
}
