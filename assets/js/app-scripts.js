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
      // Get the modal
  var modal = document.getElementById('modalAppderma');
    // Get the button that opens the modal
  var btn = document.getElementById("myAppdermaBtn");
    // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];
    // When the user clicks on the button, open the modal
  btn.onclick = function() {
    modal.style.display = "block";
  }
    // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
      modal.style.display = "none";
  }
// When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
