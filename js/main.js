$(document).ready(function(){

	$('#fullPage').fullpage({

		//Navigation
		navigation: true,		
		
	});

	$('a.page').on('click',function(){
		
		var page = $(this).attr('name');

		$.fn.fullpage.moveTo(page);
	});

	$('#anchor, #anchor i').on('click', function(){
		$.fn.fullpage.moveTo(1);
	})
	

	$('.rotate').textrotator({
		animation: 'spin',
		seperator: ',',
		speed: 2000
	});

	// Change Language via Click on Flag
	$('div.flags img').on('click',function(){
		// Language to set
		var language = $(this).attr('name');

		window.open('index.php?language='+language, '_self');		
	});

	setTimeout(function(){
				
	}, 1000);

	// Info Button TopLeft clicked
	$('i.fa-info-circle').on('click', function(){
		showPopup(450);
	});

	function showPopup(speed){
		$('#popup').bPopup({
			easing: 'easeOutBack', 
        	speed: 450,
        	transition: 'slideDown'
		});
	}

});