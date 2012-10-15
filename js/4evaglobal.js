$(document).ready(function() {

	$('#vai-genero').click(function() {
   		$('#inizio').hide();
		$('#genero').fadeIn();
		
		return false;

    });
	
	$("#4evaform").validate({
		
	});
	
});

addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);

function hideURLbar(){ window.scrollTo(0,1); }