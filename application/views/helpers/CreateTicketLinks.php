<?php

// SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

/**
 * Helper for creating ticket links from ticket hooks
 */
class Zend_View_Helper_CreateTicketLinks extends Zend_View_Helper_Abstract
{
    /**
     * Create ticket links form ticket hooks
     *
     * @param   string $text
     *
     * @return  string
     * @see     \Icinga\Application\Hook\TicketHook::createLinks()
     */
    public function createTicketLinks($text)
    {
        $tickets = $this->view->tickets;
        /** @var \Icinga\Application\Hook\TicketHook|array|null $tickets */
        return ! empty($tickets) ? $tickets->createLinks($text) : $text;
    }
}
