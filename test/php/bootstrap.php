<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Test {

    use Icinga\Application\Test;

    $basePath = getenv('ICINGAWEB_BASEDIR') ?: realpath(dirname(__FILE__) . '/../..');
    $libraryPath = getenv('ICINGAWEB_ICINGA_LIB') ?: ($basePath . '/library/Icinga');
    $configPath = getenv('ICINGAWEB_CONFIGDIR') ?: $basePath . '/test/config';

    require $libraryPath . '/Application/Test.php';
    Test::start($basePath, $configPath);
}
