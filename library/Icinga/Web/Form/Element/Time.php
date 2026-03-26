<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Web\Form\Element;

use Icinga\Web\Form\FormElement;

/**
 * A time input control
 */
class Time extends FormElement
{
    /**
     * Form view helper to use for rendering
     *
     * @var string
     */
    public $helper = 'formTime';
}
