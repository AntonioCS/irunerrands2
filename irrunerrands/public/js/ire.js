var IRE = (function (module, $) {

    var init = function (obj) {
        for (var property in obj) {

            if (obj[property]['isSubModule'] && obj[property]['isSubModule'] === true) {
                module.debugInfo('Found sub module ' + property);
                init(obj[property]);
            }
            else if (property !== 'init' && property.indexOf('init') === 0 && typeof obj[property] === 'function') {
                module.debugInfo('Running ' + property);
                obj[property]();
            }
        }
    };

    module.init = function () {
        init(module);
    };

    module.isDev = function (url) {
        var url = url || document.URL;
        return /http(s)?:\/\/dev\..+/i.test(url);
    };

    module.debug = function (msg, type) {
        type = type || 'log';
        if (module.isDev() && typeof console === "object" && type in console) {
            console[type](msg);
        }
    };

    module.debugError = function (msg) {
        module.debug(msg, 'error');
    };
    module.debugInfo = function (msg) {
        module.debug(msg, 'info');
    };

    module.GET = (function () {
        var url = document.URL.split('?');
        var qstring = [];

        if (url.length > 1) {
            var t = url[1].split('&');
            for (var i = 0, m = t.length; i < m; i++) {
                var keyvalue = t[i].split('='),
                        key = unescape(keyvalue[0]).match(/[a-z_]+/gi), //return array
                        value = keyvalue[1];

                if (key) {
                    qstring[key.join('')] = value;
                }
            }
        }
        else {
            qstring = null;
        }

        return function (key) {
            if (qstring && qstring[key] !== undefined) {
                return qstring[key];
            }

            return null;
        };
    })();

    module.abort = function (emsg) {
        throw new Error(emsg);
    };

    module.hash = function () {
        if (window.location.hash) {
            return window.location.hash.substring(1);
        }

        return null;
    };

    return module;
}({}, jQuery));