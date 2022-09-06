$(".toggle-button").click(function() {
    $("#show-data").toggle();
});

function eye(objButton)
        {
            if (objButton.innerHTML=='<i class="bi bi-eye"></i>') objButton.innerHTML = '<i class="bi bi-eye-slash"></i>';
            else objButton.innerHTML = '<i class="bi bi-eye"></i>';
        }
;