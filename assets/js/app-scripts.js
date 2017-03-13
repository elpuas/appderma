jQuery(document).ready(function () {
    jQuery ('.js-wpv-filter-form').validate({ // initialize the plugin
      errorPlacement: function (error, element) {
        error.insertBefore(element);
          },
        rules: {
          'wpv-condicion-de-la-piel[]': {
              required: true,
              maxlength: 3
          },
            'wpv-lesion-o-patologia[]': {
                required: true,
                maxlength: 10
            }
        },
        messages: {
            'wpv-condicion-de-la-piel[]': {
                required: "Debes Seleccionar por lo menos una",
                maxlength: "No Puedes seleccionar mas de {3} cajas"
            },
            'wpv-lesion-o-patologia[]': {
                required: "Debes Seleccionar por lo menos una",
                maxlength: "No Puedes seleccionar mas de {10} cajas"
            }

        },
    });
});
