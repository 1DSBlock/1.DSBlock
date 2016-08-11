$(function() {
	$('.categories-list').hide();
	$('#link').parent().addClass('link-group').hide();

	var $radio = $('input[type=radio][name=type]:checked');
	if ($radio.val() == 0) {
    	$('.articles-list').show();
		$('.categories-list').hide();
		$('.link-group').hide();
    }
    else if ($radio.val() == 1) {
    	$('.articles-list').hide();
		$('.categories-list').show();
		$('.link-group').hide();
    } else if ($radio.val() == 2) {
    	$('.articles-list').hide();
		$('.categories-list').hide();
		$('.link-group').show();
    }

	$('input[type=radio][name=type]').change(function() {
        if (this.value == 0) {
        	$('.articles-list').show();
    		$('.categories-list').hide();
    		$('.link-group').hide();
        }
        else if (this.value == 1) {
        	$('.articles-list').hide();
    		$('.categories-list').show();
    		$('.link-group').hide();
        } else if (this.value == 2) {
        	$('.articles-list').hide();
    		$('.categories-list').hide();
    		$('.link-group').show();
        }
    });
});
