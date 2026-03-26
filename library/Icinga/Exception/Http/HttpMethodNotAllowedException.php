<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Exception\Http;

/**
 * Exception thrown if the HTTP method is not allowed
 */
class HttpMethodNotAllowedException extends BaseHttpException
{
    protected $statusCode = 405;

    /**
     * Get the allowed HTTP methods
     *
     * @return string
     */
    public function getAllowedMethods()
    {
        $headers = $this->getHeaders();
        return isset($headers['Allow']) ? $headers['Allow'] : null;
    }

    /**
     * Set the allowed HTTP methods
     *
     * @param   string $allowedMethods
     *
     * @return  $this
     */
    public function setAllowedMethods($allowedMethods)
    {
        $this->setHeader('Allow', (string) $allowedMethods);
        return $this;
    }
}
