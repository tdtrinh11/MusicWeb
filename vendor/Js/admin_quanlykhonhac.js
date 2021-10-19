$(document).ready(function() {
	// console.log(;);
	var width = screen.width;
	if(width <= 1118){
		$('.chinh_sua').html("<i class='fa fa-pencil' aria-hidden='true'></i>");
		$('.chi_tiet').html("<i class='fa fa-info' aria-hidden='true'></i>");
		$('.xoa').html("<i class='fa fa-times' aria-hidden='true'>");
	}
	if(width <= 1024){
		$('.th_tl').attr('hidden', 'true');
		$('.the_loai').attr('hidden', 'true');
	}
	if (width <= 870) {
		$('.th_ha').attr('hidden', 'true');
		$('.hinh_anh').attr('hidden', 'true');
	}
	// $(document).on('click', '.them', function(event) {
	// 	$('.modal_them').addClass('fade');
	// });
	// $(document).on('click', '.chinh_sua', function(event) {
	// 	$('.modal_sua').addClass('fade');
	// });
	// $(document).on('click', '.chi_tiet', function(event) {
	// 	$('.modal_chitiet').addClass('fade');
	// });
	
	// $('.them').click(function(event) {
	// 	$('.modal_them').addClass('fade');
	// });
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
	$(document).on('click', '.admin-avt', function(event) {
		event.preventDefault();
		$(this).next().toggleClass('ra');
	});
	// $('.admin-avt').click(function(event) {
	// 	$(this).next().toggleClass('ra');
	// });;

	 // Opens the sidebar menu
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#sidebar").toggleClass("active");
    });


    $(window).resize(function(event) {
    	var window_width = $(this).width();
    	if(window_width <= 1118){
			$('.chinh_sua').html("<i class='fa fa-pencil' aria-hidden='true'></i>");
			$('.chi_tiet').html("<i class='fa fa-info' aria-hidden='true'></i>");
			$('.xoa').html("<i class='fa fa-times' aria-hidden='true'>");
		}
		if(window_width <= 1024){
			$('.th_tl').attr('hidden', 'true');
			$('.the_loai').attr('hidden', 'true');
		}
		if (window_width <= 870) {
			$('.th_ha').attr('hidden', 'true');
			$('.hinh_anh').attr('hidden', 'true');
		}
		if(window_width > 1118){
			$('.chinh_sua').html("Chỉnh sửa <i class='fa fa-pencil' aria-hidden='true'></i>");
			$('.chi_tiet').html("Chi tiết <i class='fa fa-info' aria-hidden='true'></i>");
			$('.xoa').html("Xóa <i class='fa fa-times' aria-hidden='true'>");
			$('.th_tl').removeAttr('hidden');
			$('.the_loai').removeAttr('hidden');
			$('.th_ha').removeAttr('hidden');
			$('.hinh_anh').removeAttr('hidden');
		}
    });

    $(document).on('click', '.chinh_sua', function(event) {
    	event.preventDefault();
    	console.log($(this).parent('.chuc_nang').parent('tr').find('.sid'));
    	var sid = $(this).parent('.chuc_nang').parent('tr').find('.sid')[0].innerText;
    	console.log(sid);
    	var loi_bai_hat = $(this).parent('.chuc_nang').parent('tr').find('.loi_bai_hat')[0].innerText;
    	var audio = $(this).parent('.chuc_nang').parent('tr').find('audio')[0].src;
    	var hinh_anh = $(this).parent('.chuc_nang').parent('tr').find('img')[0].src;
    	var the_loai = $(this).parent('.chuc_nang').parent('tr').find('.the_loai')[0].innerText;
    	var ten_nhac_si = $(this).parent('.chuc_nang').parent('tr').find('.ten_nhac_si')[0].innerText;
    	var ten_ca_si = $(this).parent('.chuc_nang').parent('tr').find('.ten_ca_si')[0].innerText;
    	var ten_bai_hat = $(this).parent('.chuc_nang').parent('tr').find('.ten_bai_hat')[0].innerText;

    	$('.tbh_sua').val(ten_bai_hat);
    	$('.tcs_sua').val(ten_ca_si);
    	$('.tns_sua').val(ten_nhac_si);
    	$('.tl_sua').val(the_loai);
    	$('.lyric_sua').val(loi_bai_hat);
    	console.log($('.audio_bd')[0]);
    	$('.audio_bd')[0].src = audio;
    	$('.img_bd')[0].src = hinh_anh;
    	$('.themnhac.chinhsua').find('form')[0]['attributes']['action'].value = "http://127.0.0.1:4001/MusicWeb/index.php/Admin_quanlykhonhac/ChinhSuaBaiHat/"+sid;
    });

    $(document).on('click', '.chi_tiet', function(event) {
    	var loi_bai_hat = $(this).parent('.chuc_nang').parent('tr').find('.loi_bai_hat')[0].innerText;
    	var audio = $(this).parent('.chuc_nang').parent('tr').find('audio')[0].src;
    	var hinh_anh = $(this).parent('.chuc_nang').parent('tr').find('img')[0].src;
    	var the_loai = $(this).parent('.chuc_nang').parent('tr').find('.the_loai')[0].innerText;
    	var ten_nhac_si = $(this).parent('.chuc_nang').parent('tr').find('.ten_nhac_si')[0].innerText;
    	var ten_ca_si = $(this).parent('.chuc_nang').parent('tr').find('.ten_ca_si')[0].innerText;
    	var ten_bai_hat = $(this).parent('.chuc_nang').parent('tr').find('.ten_bai_hat')[0].innerText;

    	$('.tbh_ct')[0].innerText = ten_bai_hat;
    	$('.tcs_ct')[0].innerText = ten_ca_si;
    	$('.tns_ct')[0].innerText = ten_nhac_si;
    	$('.tl_ct')[0].innerText = the_loai;
    	$('.img_ct')[0].src = hinh_anh;
    	$('.audio_ct')[0].src = audio;
    	$('.lbh_ct')[0].innerText = loi_bai_hat;

    	
    });
});