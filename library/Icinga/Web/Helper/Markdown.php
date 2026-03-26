<?php

// SPDX-FileCopyrightText: 2019 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Web\Helper;

use Icinga\Web\Helper\Markdown\LinkTransformer;
use Parsedown;

class Markdown
{
    public static function line($content, $config = null)
    {
        if ($config === null) {
            $config = function (\HTMLPurifier_Config $config) {
                $config->set('HTML.Parent', 'span'); // Only allow inline elements

                LinkTransformer::attachTo($config);
            };
        }

        return HtmlPurifier::process(Parsedown::instance()->line($content), $config);
    }

    public static function text($content, $config = null)
    {
        if ($config === null) {
            $config = function (\HTMLPurifier_Config $config) {
                LinkTransformer::attachTo($config);
            };
        }

        return HtmlPurifier::process(Parsedown::instance()->text($content), $config);
    }
}
