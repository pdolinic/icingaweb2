-- SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
-- SPDX-License-Identifier: GPL-3.0-or-later

ALTER TABLE "icingaweb_group_membership" ALTER COLUMN "username" TYPE character varying(254);
ALTER TABLE "icingaweb_user" ALTER COLUMN "name" TYPE character varying(254);
ALTER TABLE "icingaweb_user_preference" ALTER COLUMN "username" TYPE character varying(254);
