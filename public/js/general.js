$(document).ready(() => {
    function get_data() {
        var action = 'perder-peso';
        $.ajax({
                url: 'http://127.0.0.1:8000/' + action,
                method: 'GET',
                cache: false,
                dataType: 'json',
                beforeSend: function() {

                }
            })
            .done(res => {
                alert("Ya tengo al variable");
            });
    }
});