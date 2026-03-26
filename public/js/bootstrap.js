// SPDX-FileCopyrightText: 2023 Icinga GmbH <https://icinga.com>
// SPDX-License-Identifier: GPL-3.0-or-later

;(function () {
    let html = document.documentElement;
    window.name = html.dataset.icingaWindowName;
    window.icinga = new Icinga({
        baseUrl: html.dataset.icingaBaseUrl,
        locale: html.lang,
        timezone: html.dataset.icingaTimezone
    });

    if (! ('icingaIsIframe' in document.documentElement.dataset)) {
        html.classList.replace('no-js', 'js');
    }

    if (window.getComputedStyle) {
        let matched;
        let element = document.getElementById('layout');
        let name = window
            .getComputedStyle(html)['font-family']
            .replace(/['",]/g, '');

        if (null !== (matched = name.match(/^([a-z]+)-layout$/))) {
            element.classList.replace('default-layout', name);
            if ('object' === typeof window.console) {
                window.console.log('Icinga Web 2: setting initial layout to ' + name);
            }
        }
    }
})();
