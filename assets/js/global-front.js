/* global js for rtrrubbery */
(function( $ ) {

	// 		DOM ready
$( document ).ready(function() {

	// Action for shop dropdown menu when mouse hover on element
    $('.desktop ul.navbar-nav li.dropdown').hover(
	    function() {
			$(this).addClass('show');
			$(this).find('.dropdown-menu').eq(0).addClass('show');

	    }, 
	    function() {
			$(this).delay(800).removeClass('show');
			$(this).find('.dropdown-menu').eq(0).delay(800).removeClass('show');
	    }
    );

    
    $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }

        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');


        $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
            $('.menu-item-has-children .show').removeClass("show");
        });
        
        return false;
    });

    //Action that mark first word in widget header
    $('.site-footer .widget-title, .color-first-word, .sprocket-features-title a').each(function(){
	    var me = $(this);
	    me.html( me.text().replace(/(^\w+)/,'<span>$1</span>') );
	  });



    $("[data-fancybox]").fancybox({
    		fullScreen : {
    			autoStart : false,
    		}	
    });

 
});

	//		Page ready
window.onload = function() {
 
    
 
};


})( jQuery );
