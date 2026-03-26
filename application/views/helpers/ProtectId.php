<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

/**
 * Class Zend_View_Helper_Util
 */
class Zend_View_Helper_ProtectId extends Zend_View_Helper_Abstract
{
    public function protectId($id)
    {
        return Zend_Controller_Front::getInstance()->getRequest()->protectId($id);
    }
}
