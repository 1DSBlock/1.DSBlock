$(function() {
	$('#addNew').click(function() {
		location.href = 'add';
	});
	
	$('.delete-item').click(function(e) {
		e.preventDefault();
		var id = $(this).data('id');
		
		var message = "Are you sure?";
		eModal.confirm(message, null)
		       .then(function() {
		    	   location.href = 'delete/' + id;
		       }, null);
	});
	
	$('.edit-item').click(function(e) {
	   location.href = 'edit/' + id;
	});
});