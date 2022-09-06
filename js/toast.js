$(document).ready(function() {
    $("#sendmsg").on('submit', function(event) {
        event.preventDefault(); 
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'sendmsg.php', 
            dataType: "json",
                data: formData,
                success: function(response) { 
                    $('#MessageModal').modal('hide');
                    $('#liveToast').toast("show");
                    return false;
                },
                error: function(xhr, status, error){
                    console.log(xhr); 
                }
        });
    });
});