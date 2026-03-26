<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Exception\Http;

interface HttpExceptionInterface
{
    /**
     * Return this exception's HTTP status code
     *
     * @return  int
     */
    public function getStatusCode();

    /**
     * Return this exception's HTTP response headers
     *
     * @return  array   An array where each key is a header name and the value its value
     */
    public function getHeaders();
}
