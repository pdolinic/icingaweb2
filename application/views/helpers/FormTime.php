<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

/**
 * Render time input controls
 */
class Zend_View_Helper_FormTime extends Zend_View_Helper_FormElement
{
    /**
     * Render the time input control
     *
     * @param   string  $name
     * @param   int     $value
     * @param   array   $attribs
     *
     * @return  string  The rendered time input control
     */
    public function formTime($name, $value = null, $attribs = null)
    {
        $info = $this->_getInfo($name, $value, $attribs);

        extract($info);  // name, id, value, attribs, options, listsep, disable
        /** @var string $id  */
        /** @var bool $disable  */

        $disabled = '';
        if ($disable) {
            $disabled = ' disabled="disabled"';
        }

        /** @var \Icinga\Web\View $view */
        $view = $this->view;

        $html5 = sprintf(
            '<input type="time" name="%s" id="%s" value="%s"%s%s%s',
            $view->escape($name),
            $view->escape($id),
            $view->escape($value),
            $disabled,
            $this->_htmlAttribs($attribs),
            $this->getClosingBracket()
        );

        return $html5;
    }
}
