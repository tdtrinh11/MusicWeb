$(document).ready(function() {
	$('.them').click(function(event) {
		$('.modal_them').addClass('fade');
	});
	$('.chinh_sua').click(function(event) {
		$('.modal_sua').addClass('fade');
	});
	$('.chi_tiet').click(function(event) {
		$('.modal_chitiet').addClass('fade');
	});

	$('._1casi').hover(function() {
		$(this).children('.xemthem').addClass('hienthi');
	}, function() {
		$(this).children('.xemthem').removeClass('hienthi');
	});;
	// $(window).resize(function(event) {
	// 	console.log('resize');
	// });;
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