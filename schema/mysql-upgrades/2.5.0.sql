-- SPDX-FileCopyrightText: 2018 Icinga GmbH <https://icinga.com>
-- SPDX-License-Identifier: GPL-3.0-or-later

ALTER TABLE `icingaweb_group_membership` MODIFY COLUMN `username` varchar(254) COLLATE utf8_unicode_ci NOT NULL;
ALTER TABLE `icingaweb_user` MODIFY COLUMN `name` varchar(254) COLLATE utf8_unicode_ci NOT NULL;
ALTER TABLE `icingaweb_user_preference` MODIFY COLUMN `username` varchar(254) COLLATE utf8_unicode_ci NOT NULL;
