$(document).ready(function() {

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


	// $(document).on('change', '.anh_sk', function(event) {
	// 	var src = $(this).val();
	// 	var mang = new Array();
	//     mang = src.split("\\");
	//     src1 = mang[mang.length - 1];
	//     $(this).next('input').val(src1);
	//     src = "http://localhost:81/MusicWeb/vendor/Image_News/" + mang[mang.length - 1];
	//     console.log(src);

	//     var img = $(this).next('input').next('.thongtin').children('img');
	// 	$(img).attr('src', src);
	// });

});