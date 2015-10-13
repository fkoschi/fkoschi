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
		showPopup();
				
	}, 1000);

	// Info Button TopLeft clicked
	$('i.fa-info-circle').on('click', function(){
		showPopup(450);
	});

	// close popup on icon click
	$('#close_popup').on('click', function(){
		var bPopup = $(this).parent().bPopup();
		bPopup.close();
	});

	function showPopup(speed){
		$('#popup').bPopup({
			modalColor: 'white'
			// 	easing: 'easeOutBack', 
   			//	speed: 450,
  			// 	transition: 'slideDown'
		});
	}

	// jump to contact section 
	$('span.get_me_to_contact').on('click',function(){
		$.fn.fullpage.moveTo(4);
	});
});