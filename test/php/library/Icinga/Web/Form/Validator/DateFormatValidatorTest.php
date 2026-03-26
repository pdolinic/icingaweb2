<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Tests\Icinga\Web\Form\Validator;

use Icinga\Test\BaseTestCase;
use Icinga\Web\Form\Validator\DateFormatValidator;

class DateFormatValidatorTest extends BaseTestCase
{
    public function testValidateCorrectInput()
    {
        $validator = new DateFormatValidator();
        $this->assertTrue(
            $validator->isValid(
                'Y-m-d',
                'Asserting a valid date format to result in correct validation'
            )
        );
    }

    public function testValidateInorrectInput()
    {
        $validator = new DateFormatValidator();
        $this->assertFalse(
            $validator->isValid(
                'Y-m-d h:m:s',
                'Asserting a date format combined with time to result in a validation error'
            )
        );
    }
}
