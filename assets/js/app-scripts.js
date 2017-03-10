jQuery(document).ready(function () {
    jQuery ('.js-wpv-filter-form').validate({ // initialize the plugin
        rules: {
            'wpv-lesion-o-patologia[]': {
                required: true,
                maxlength: 2
            }
        },
        messages: {
            'wpv-lesion-o-patologia[]': {
                required: "You must check at least 1 box",
                maxlength: "Check no more than {0} boxes"
            }
        }
    });

});
