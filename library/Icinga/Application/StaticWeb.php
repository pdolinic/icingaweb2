<?php

// SPDX-FileCopyrightText: 2020 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Application;

require_once dirname(__FILE__) . '/EmbeddedWeb.php';

class StaticWeb extends EmbeddedWeb
{
    protected function bootstrap()
    {
        return $this
            ->setupErrorHandling()
            ->loadLibraries()
            ->loadConfig()
            ->setupLogging()
            ->setupLogger()
            ->setupRequest()
            ->setupResponse();
    }
}
