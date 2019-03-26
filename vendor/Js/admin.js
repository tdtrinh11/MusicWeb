$(document).ready(function() {
	
	$('.admin-avt').click(function(event) {
		/* Act on the event */
		$(this).next().toggleClass('ra');
	});;

	 // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar").toggleClass("active");
    });

});