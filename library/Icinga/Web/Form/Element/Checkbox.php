<?php

// SPDX-FileCopyrightText: 2019 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Web\Form\Element;

class Checkbox extends \Zend_Form_Element_Checkbox
{
    public $helper = 'icingaCheckbox';
}
