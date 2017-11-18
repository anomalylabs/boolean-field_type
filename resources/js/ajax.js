(function (window, document) {

    let switches = Array.from(
        document.querySelectorAll(
            '[data-provides="anomaly.field_type.boolean"].switch__checkbox--ajax'
        )
    );

    switches.forEach(function ($switch) {

        $switch.addEventListener('click', function (e) {

            let request = new XMLHttpRequest();

            request.open('POST', REQUEST_ROOT_PATH + '/admin/boolean-field_type/toggle', true);
            request.setRequestHeader('Content-Type', 'application/json');

            request.send(JSON.stringify({
                _token: CSRF_TOKEN,
                checked: e.target.checked,
                entry: e.target.dataset.entry,
                field: e.target.dataset.field,
                stream: e.target.dataset.stream,
                namespace: e.target.dataset.namespace
            }));

        });
    });
})(window, document);
