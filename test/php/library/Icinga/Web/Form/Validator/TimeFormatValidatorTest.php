<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Tests\Icinga\Web\Form\Validator;

use Icinga\Test\BaseTestCase;
use Icinga\Web\Form\Validator\TimeFormatValidator;

class TimeFormatValidatorTest extends BaseTestCase
{
    public function testValidateCorrectInput()
    {
        $validator = new TimeFormatValidator();
        $this->assertTrue(
            $validator->isValid(
                'h-i-s',
                'Asserting a valid time format to result in correct validation'
            )
        );
    }

    public function testValidateInorrectInput()
    {
        $validator = new TimeFormatValidator();
        $this->assertFalse(
            $validator->isValid(
                'Y-m-d h:m:s',
                'Asserting a date format combined with time to result in a validation error'
            )
        );
    }
}
