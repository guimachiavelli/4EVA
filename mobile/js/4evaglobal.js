$(document).ready(function() {

/*	$('#vai-genero').click(function(){
		$('#inizio').fadeOut();
		$('#genero').fadeIn();
		
		return false;
	});
*/	
	$('#vai-genero').click(function() {
   		$('#inizio').hide();
		$('#genero').fadeIn();
		
		return false;
		
//		alert('vaffanculo');
    });
	
});

addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);

function hideURLbar(){ window.scrollTo(0,1); }