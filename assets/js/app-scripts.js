jQuery(document).ready(function () {
    jQuery ('.js-wpv-filter-form').validate({ // initialize the plugin
      errorPlacement: function (error, element) {
        error.insertBefore(element);
          },
        rules: {
            'wpv-lesion-o-patologia[]': {
                required: true,
                maxlength: 10
            }
        },
        messages: {
            'wpv-lesion-o-patologia[]': {
                required: "Debes Seleccionar por lo menos una",
                maxlength: "No Puedes seleccionar mas de {10} cajas"
            }
        },
    });
});
