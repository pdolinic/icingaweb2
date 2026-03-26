<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

namespace Icinga\Data;

/**
 * Interface for retrieving data
 */
interface Fetchable
{
    /**
     * Retrieve an array containing all rows of the result set
     *
     * @return  array
     */
    public function fetchAll();

    /**
     * Fetch the first row of the result set
     *
     * @return  mixed
     */
    public function fetchRow();

    /**
     * Fetch the first column of all rows of the result set as an array
     *
     * @return  array
     */
    public function fetchColumn();

    /**
     * Fetch the first column of the first row of the result set
     *
     * @return  string
     */
    public function fetchOne();

    /**
     * Fetch all rows of the result set as an array of key-value pairs
     *
     * The first column is the key, the second column is the value.
     *
     * @return  array
     */
    public function fetchPairs();
}
