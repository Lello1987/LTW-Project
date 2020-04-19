$().ready(function() {
    $("#form").validate({
        // REGOLE DI VALIDAZIONE
        rules : {
            // login - nome del campo di input da validare
            username : {
              // USERNAME E' UN CAMPO OBBLIGATORIO
              required : true
            },
            pwd : {
              // PASSWORD E' UN CAMPO OBBLIGATORIO
                required : true,
            },
        },
        // MESSAGGI DI ERRORE
        messages: {
            username: "Il campo username è obbligatorio",
            pwd: {
                required: "Il campo password è obbligatorio",
            },
        },
        submitHandler: function(form) {
            form.submit();
        }
    });
});
