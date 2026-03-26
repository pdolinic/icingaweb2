-- SPDX-FileCopyrightText: 2021 Icinga GmbH <https://icinga.com>
-- SPDX-License-Identifier: GPL-3.0-or-later

ALTER TABLE `icingaweb_rememberme`
    MODIFY random_iv varchar(32)  NOT NULL;
