$(document).ready(function() {
	console.log('ra');
	$('.admin-avt').click(function(event) {
		/* Act on the event */
		event.preventDefault();
		$('.admin-info').toggleClass('ra');;
	});;

	 // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar").toggleClass("active");
    });

    $('.them').click(function(event) {
		$('.modal_them').addClass('fade');
	});
	$('.chinh_sua').click(function(event) {
		$('.modal_sua').addClass('fade');
	});
	$('.chi_tiet').click(function(event) {
		$('.modal_chitiet').addClass('fade');
	});

});