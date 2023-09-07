( function( $ ) {
	"use strict";
	
	var count = 2;
	var total = ajax_portfolio_infinite_scroll_data.max_num;

	//console.log('totalNumber: ' + total);
	var flag = 1;

	$(window).on('scroll', function(){
	    if ( $(window).scrollTop() + $(window).height() >= $('.portfolio-infinite-scrolling').offset().top + $('.portfolio-infinite-scrolling').height() ) {
	        if ( count > total ) {
	            return false;
	        } else {
	        	if( flag == 1 ){
	        		//console.log('pageNumber: ' + count);
	            	loadContent(count);
	            }
	        }
	        if( flag == 1 ){
	        	flag = 0;
	        	count++;
	        }
	    }
	});

	function loadContent(pageNumber) {
	    $.ajax({
	        url: ajax_portfolio_infinite_scroll_data.url,
	        type:'POST',
	        data: "action=infinite_scroll_el&page_no="+ pageNumber + '&post_type=portfolio' + '&page_id=' + ajax_portfolio_infinite_scroll_data.page_id + '&order_by=' + ajax_portfolio_infinite_scroll_data.order_by + '&order=' + ajax_portfolio_infinite_scroll_data.order + '&per_page=' + ajax_portfolio_infinite_scroll_data.per_page + '&source=' + ajax_portfolio_infinite_scroll_data.source + '&temp=' + ajax_portfolio_infinite_scroll_data.temp + '&cat_ids=' + ajax_portfolio_infinite_scroll_data.cat_ids,
	        success: function(html){
	        	//html = html.replace(/scroll-animate/g, 'scroll-animate animate__active animate__animated');
	     
	            var $html = $(html);
	            var $container = $('.portfolio-infinite-scrolling');

	            $html.imagesLoaded(function(){
					$container.append($html);
					$container.isotope('appended', $html );
					$container.isotope('layout');
					
					$('.scroll-animate').scrolla({
						once: true,
						mobile: true
					});
				});

	            flag = 1;
	        }
	    });
	    return false;
	}
} )( jQuery );