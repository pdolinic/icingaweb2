<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Web\Form\Validator;

use Icinga\Application\Icinga;
use Zend_Validate_Abstract;
use Icinga\Web\Url;

/**
 * Validator that checks whether a textfield doesn't contain an external URL
 */
class InternalUrlValidator extends Zend_Validate_Abstract
{
    /**
     * {@inheritdoc}
     */
    public function isValid($value)
    {
        $url = Url::fromPath($value);
        if ($url->getRelativeUrl() === '' || $url->isExternal()) {
            $this->_error('IS_EXTERNAL');

            return false;
        }

        return true;
    }

    /**
     * {@inheritdoc}
     */
    protected function _error($messageKey, $value = null)
    {
        if ($messageKey === 'IS_EXTERNAL') {
            $this->_messages[$messageKey] = t('The url must not be external.');
        } else {
            parent::_error($messageKey, $value);
        }
    }
}
