<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Forms;

use Icinga\Application\Hook\ConfigFormEventsHook;
use Icinga\Web\Form;

class ActionForm extends Form
{
    /**
     * The icon shown on the button
     *
     * @var string
     */
    protected $icon = 'arrows-cw';

    /**
     * Set the icon to show on the button
     *
     * @param   string  $name
     *
     * @return  $this
     */
    public function setIcon($name)
    {
        $this->icon = (string) $name;
        return $this;
    }

    public function init()
    {
        $this->setAttrib('class', 'inline');
        $this->setUidDisabled(true);
        $this->setDecorators(['FormElements', 'Form']);
    }

    public function createElements(array $formData)
    {
        $this->addElement(
            'hidden',
            'identifier',
            [
                'required'      => true,
                'decorators'    => ['ViewHelper']
            ]
        );
        $this->addElement(
            'button',
            'btn_submit',
            [
                'escape'        => false,
                'type'          => 'submit',
                'class'         => 'link-button spinner',
                'value'         => 'btn_submit',
                'decorators'    => ['ViewHelper'],
                'label'         => $this->getView()->icon($this->icon),
                'title'         => $this->getDescription()
            ]
        );
    }

    public function isValid($formData)
    {
        $valid = parent::isValid($formData);

        if ($valid) {
            $valid = ConfigFormEventsHook::runIsValid($this);
        }

        return $valid;
    }

    public function onSuccess()
    {
        ConfigFormEventsHook::runOnSuccess($this);
    }
}
