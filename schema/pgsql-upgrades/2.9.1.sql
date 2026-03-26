-- SPDX-FileCopyrightText: 2021 Icinga GmbH <https://icinga.com>
-- SPDX-License-Identifier: GPL-3.0-or-later

ALTER TABLE ONLY "icingaweb_rememberme"
    ALTER COLUMN random_iv type character varying(32);
