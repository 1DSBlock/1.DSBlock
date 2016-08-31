$(function() {
	// sidebar
	$('.' + controller).addClass('active');

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
		var id = $(this).data('id');
		location.href = 'edit/' + id;
	});

	$('.back').click(function() {
		window.history.back();
	});

	$('#search_by').val('fullname');
	$('#operator').val('equals_to');
	$('.search-panel-operator span#search_concept_2').text('=');
	$('.search-panel .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = $(this).attr("href").replace("#","");
		var concept = $(this).text();
		$('.search-panel span#search_concept').text(concept);
		$('.search-panel-operator .dropdown-menu li').hide();
		$('.search-panel-operator .dropdown-menu li.' + param).show();

		$('#search_by').val(param);
		$('#operator').val('equals_to');
		$('.search-panel-operator span#search_concept_2').text('=');
	});

	$('.search-panel-operator .dropdown-menu').find('a').click(function(e) {
		e.preventDefault();
		var param = $(this).attr("href").replace("#","");
		var concept = $(this).text();
		$('.search-panel-operator span#search_concept_2').text(concept);

		$('#operator').val(params);
	});
});
