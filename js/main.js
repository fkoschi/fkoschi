$(document).ready(function(){

	$('#fullPage').fullpage({

		//Navigation
		navigation: true,

		//After Load
		afterLoad: function(anchorLink,index){

			// set up skill chart when page 3 is loaded
			if( index == 3){
				$.getScript('js/mySkillsChart.js');
			}
		}		
		
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

	// Info Button TopLeft clickeds
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

	// leave a message at the contact section
	$('#send_feedback').on('click',function(){

	});

	// Wookmark 
	// $('#tiles').wookmark({
	// 	itemWidth: 210,
	// 	offset: 4,
	// 	// fillEmptySpace: true
	// });
	
	// Instantiate wookmark after all images have been loaded
      var wookmark;

	  // Init lightbox
      $('#tiles').magnificPopup({
        delegate: 'li:not(.inactive) a',
        type: 'image',
        gallery: {
          enabled: false
        }
      });
	  
      imagesLoaded('#tiles', function() {
        wookmark = new Wookmark('#tiles', {
          fillEmptySpace: false // Optional, fill the bottom of each column with widths of flexible height

        });
      });  

	// Setup filter buttons when jQuery is available
      var $filters = $('#filters li');

      /**
       * When a filter is clicked, toggle it's active state and refresh.
       */
      function onClickFilter(e) {
        var $item = $(e.currentTarget),
            activeFilters = [],
            filterType = $item.data('filter');

        if (filterType === 'all') {
          $filters.removeClass('active');
        } else {
          $item.toggleClass('active');

          // Collect active filter strings
          $filters.filter('.active').each(function() {
            activeFilters.push($(this).data('filter'));
          });
        }

        wookmark.filter(activeFilters, 'or');
      }

      // Capture filter click events.
      $('#filters').on('click.wookmark-filter', 'li', onClickFilter);
});