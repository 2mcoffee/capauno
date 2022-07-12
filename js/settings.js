$(document).ready(function() {
	$("#settings").on('submit', function(event) {
		event.preventDefault(); 
		var formData = $(this).serialize();
		$.ajax({
			type: 'POST',
			url: 'settings.php',
			dataType: "json",
			data: formData,
			success: function(response) { 
				//alert(response.success);
				location.reload();				
			},
			error: function(xhr, status, error){
				console.log(xhr); 
				alert(response.error); 
			}
		});
	});
});