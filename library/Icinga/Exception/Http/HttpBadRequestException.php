<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Exception\Http;

/**
 * Exception thrown for sending a HTTP 400 response w/ a custom message
 */
class HttpBadRequestException extends BaseHttpException
{
    protected $statusCode = 400;
}
