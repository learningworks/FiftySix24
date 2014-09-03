/*
* Site JS
*
* @author				LearningWorks Ltd
* @url					http://learningworks.co.nz
* @copyright			2014 Learning Works
*/


/*
*	Initialise on load
*/
jQuery(document).ready(function($) {
	
	/*
	*	Call initialising functions
	*/
	initMobileNav();
	initModuleExample();


});


/*
*	GENERAL FUNCTIONS
*/


// VALIDATES INPUT IS FORMATTED AS EMAIL
function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

// SMOOTH SCROLL
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
        || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 300);
            return false;
        }
    }
});


/*
*	Initialises module mobile nav
*	Handles the opening and closing of the mobile navigation drawer
*
*	@return void
*/
function initMobileNav() {

	//OPEN/CLOSES THE MOBILE NAV
	function toggleMobileNav(event) {
		event.preventDefault();
		event.stopPropagation();
		
		$('body').toggleClass('mobile-nav--is-open');
		window.scrollTo(0,0);
	}

	$('.mobile-nav-handler--toggle').on('click', toggleMobileNav);
	//CLOSES MOBILE NAV
	$('.mobile-nav-handler--close').on('click', toggleMobileNav);
}



/*
*	Initialises component example
*	All components should have their own initialising function
*	To include any event handlers, local functions etc.
*
*	@return void
*/
function initModuleExample() {
	//CHECK IF MODULE EXISTS ON THE PAGE
	if(!!$('.module-example').length) {
		//TODO
		// add code here
	}
}