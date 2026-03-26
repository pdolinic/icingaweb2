<?php

// SPDX-FileCopyrightText: 2019 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Authentication;

use Icinga\Application\Icinga;
use Icinga\Repository\IniRepository;

class RolesConfig extends IniRepository
{
    protected $sortRules = ['name' => ['order' => 'asc']];

    protected $configs = [
        'roles' => [
            'name'      => 'roles',
            'keyColumn' => 'name'
        ]
    ];

    protected function initializeQueryColumns()
    {
        $columns = [
            'roles' => [
                'parent',
                'name',
                'users',
                'groups',
                'refusals',
                'permissions',
                'unrestricted',
                'application/share/users',
                'application/share/groups'
            ]
        ];

        $moduleManager = Icinga::app()->getModuleManager();
        foreach ($moduleManager->listInstalledModules() as $moduleName) {
            foreach ($moduleManager->getModule($moduleName, false)->getProvidedRestrictions() as $restriction) {
                $columns['roles'][] = $restriction->name;
            }
        }

        return $columns;
    }

    protected function initializeSearchColumns(): array
    {
        return ['name'];
    }
}
