(function (window, document) {

    Array.from(document.querySelectorAll('[data-provides="anomaly.field_type.boolean"]')).forEach(function ($switch) {

        $switch.addEventListener('click', function (e) {

            let request = new XMLHttpRequest();

            request.open('POST', REQUEST_ROOT_PATH + '/boolean-field_type/toggle', true);
            request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');

            request.send({
                _token: CSRF_TOKEN,
                checked: e.target.checked,
                entry: e.target.dataset.entry,
                field: e.target.dataset.field,
                stream: e.target.dataset.stream,
                namespace: e.target.dataset.namespace
            });

        });
    });
})(window, document);
