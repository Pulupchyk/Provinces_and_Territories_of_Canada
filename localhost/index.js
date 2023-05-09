var modal = document.getElementById('id01');
window.onclick = function(event) {
	if (event.target == modal) {
		modal.style.display = "none";
	}
}
$(document).ready(function() {
	$('form').submit(function(event) {
		event.preventDefault();
		var formData = $(this).serialize();
		$.ajax({
			type: 'POST',
			url: 'index.php',
			data: formData,
			dataType: 'html',
			success: function(response) {
				if (response === 'success') {
					window.location.href = 'user.php';
				} else {
					alert(response);
				}
			},
			error: function(xhr, ajaxOptions, thrownError) {
				alert('Error ' + xhr.status + ': ' + thrownError);
			}
		});
	});
});