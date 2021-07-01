function ContinuarSeleccionarGenero() {

    if ($('#ATC').prop('checked')) {
        alert('los terminos fueron aceptados');
    }
    if ($('#AOS').prop('checked')) {
        alert('me gustaria recibir notificaciones');
    }

    $.ajax({
        method: 'GET',
        url: 'seleccionar-genero',
        data: {},
        success: function(response) {
            //if (response.success) {
            alert('satisfactorio');
            window.location.replace('Seleccionar-Genero');
            //}
        },
        error: function(e) {}
    });



}