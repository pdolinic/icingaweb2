<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Web;

use Icinga\Application\Logger;
use Icinga\Authentication\Auth;
use Icinga\Exception\Json\JsonDecodeException;
use Icinga\Util\Json;

/**
 * Handle acknowledged application state messages via cookie
 */
class ApplicationStateCookie extends Cookie
{
    /** @var array */
    protected $acknowledgedMessages = [];

    public function __construct()
    {
        parent::__construct('icingaweb2-application-state');

        $this->setExpire(2147483648);

        if (isset($_COOKIE['icingaweb2-application-state'])) {
            try {
                $cookie = Json::decode($_COOKIE['icingaweb2-application-state'], true);
            } catch (JsonDecodeException $e) {
                Logger::error(
                    "Can't decode the application state cookie of user '%s'. An error occurred: %s",
                    Auth::getInstance()->getUser()->getUsername(),
                    $e
                );

                return;
            }

            if (isset($cookie['acknowledged-messages'])) {
                $this->setAcknowledgedMessages($cookie['acknowledged-messages']);
            }
        }
    }

    /**
     * Get the acknowledged messages
     *
     * @return  array
     */
    public function getAcknowledgedMessages()
    {
        return $this->acknowledgedMessages;
    }

    /**
     * Set the acknowledged messages
     *
     * @param   array $acknowledged
     *
     * @return  $this
     */
    public function setAcknowledgedMessages(array $acknowledged)
    {
        $this->acknowledgedMessages = $acknowledged;

        return $this;
    }

    public function getValue()
    {
        return Json::encode([
            'acknowledged-messages' => $this->getAcknowledgedMessages()
        ]);
    }
}
