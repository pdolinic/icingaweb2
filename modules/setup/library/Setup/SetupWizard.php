<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Module\Setup;

/**
 * Interface for wizards providing a setup and requirements
 */
interface SetupWizard
{
    /**
     * Return the setup for this wizard
     *
     * @return  Setup
     */
    public function getSetup();

    /**
     * Return the requirements of this wizard
     *
     * @return  RequirementSet
     */
    public function getRequirements();
}
