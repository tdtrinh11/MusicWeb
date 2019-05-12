$(document).ready(function() {

	loadAjax();
	function loadAjax() {
		var width = screen.width;
		$.ajax({
			url: 'http://localhost:81/MusicWeb/Admin_quanlykhonhac/laydulieu',
			type: 'POST',
			dataType: 'json',
			success : function(res) {
				var template = "";
				var pagination ='';
				if(width > 1118)
				{
					for (var i = 0; i < res['tatcabaihat'].length; i++) 
					{
						template    +="<tr>"
						+"<td class='sid' hidden='true'>"+res['tatcabaihat'][i]['SID']+"</td>"
						+"<td class='ten_bai_hat'>"+res['tatcabaihat'][i]['song_name']+"</td>"
						+"<td class='ten_ca_si'>"+res['tatcabaihat'][i]['singer']+"</td>"
						+"<td class='ten_nhac_si' hidden='true'>"+res['tatcabaihat'][i]['artist']+"</td>"
						+"<td class='the_loai'>"+res['tatcabaihat'][i]['type']+"</td>"
						+"<td class='hinh_anh'><img src='http://localhost:81/MusicWeb/vendor/Image/"+res['tatcabaihat'][i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
						+"<td class='audio'>"
						+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+res['tatcabaihat'][i]['URL']+"' loop controls controlslist='nodownload'></audio>"
						+"</td>"
						+"<td class='loi_bai_hat' hidden='true'>"+res['tatcabaihat'][i]['lyric']+"</td>"
						+"<td colspan='3' class='chuc_nang'>"
						+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'>Chỉnh sửa<i class='fa fa-pencil' aria-hidden='true'></i></div>"
						+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'>Chi tiết<i class='fa fa-info' aria-hidden='true'></i></div>"
						+"<a class='btn btn-outline-danger xoa' href=''>Xóa<i class='fa fa-times' aria-hidden='true'></i></a>"
						+"</td>"
						+"</tr>";
					}
				}
				else if(width <= 1118 && width > 1024)
				{
					for (var i = 0; i < res['tatcabaihat'].length; i++) 
					{
						template    +="<tr>"
						+"<td class='sid' hidden='true'>"+res['tatcabaihat'][i]['SID']+"</td>"
						+"<td class='ten_bai_hat'>"+res['tatcabaihat'][i]['song_name']+"</td>"
						+"<td class='ten_ca_si'>"+res['tatcabaihat'][i]['singer']+"</td>"
						+"<td class='ten_nhac_si' hidden='true'>"+res['tatcabaihat'][i]['artist']+"</td>"
						+"<td class='the_loai'>"+res['tatcabaihat'][i]['type']+"</td>"
						+"<td class='hinh_anh'><img src='http://localhost:81/MusicWeb/vendor/Image/"+res['tatcabaihat'][i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
						+"<td class='audio'>"
						+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+res['tatcabaihat'][i]['URL']+"' loop controls controlslist='nodownload'></audio>"
						+"</td>"
						+"<td class='loi_bai_hat' hidden='true'>"+res['tatcabaihat'][i]['lyric']+"</td>"
						+"<td colspan='3' class='chuc_nang'>"
						+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'><i class='fa fa-pencil' aria-hidden='true'></i></div>"
						+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'><i class='fa fa-info' aria-hidden='true'></i></div>"
						+"<a class='btn btn-outline-danger xoa' href=''><i class='fa fa-times' aria-hidden='true'></i></a>"
						+"</td>"
						+"</tr>";
					}
				}
				else if(width <= 1024 && width > 870)
				{
					$('.th_tl').attr('hidden', 'true');
					for (var i = 0; i < res['tatcabaihat'].length; i++) 
					{
						template    +="<tr>"
						+"<td class='sid' hidden='true'>"+res['tatcabaihat'][i]['SID']+"</td>"
						+"<td class='ten_bai_hat'>"+res['tatcabaihat'][i]['song_name']+"</td>"
						+"<td class='ten_ca_si'>"+res['tatcabaihat'][i]['singer']+"</td>"
						+"<td class='ten_nhac_si' hidden='true'>"+res['tatcabaihat'][i]['artist']+"</td>"
						+"<td class='the_loai' hidden='true'>"+res['tatcabaihat'][i]['type']+"</td>"
						+"<td class='hinh_anh'><img src='http://localhost:81/MusicWeb/vendor/Image/"+res['tatcabaihat'][i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
						+"<td class='audio'>"
						+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+res['tatcabaihat'][i]['URL']+"' loop controls controlslist='nodownload'></audio>"
						+"</td>"
						+"<td class='loi_bai_hat' hidden='true'>"+res['tatcabaihat'][i]['lyric']+"</td>"
						+"<td colspan='3' class='chuc_nang'>"
						+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'><i class='fa fa-pencil' aria-hidden='true'></i></div>"
						+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'><i class='fa fa-info' aria-hidden='true'></i></div>"
						+"<a class='btn btn-outline-danger xoa' href=''><i class='fa fa-times' aria-hidden='true'></i></a>"
						+"</td>"
						+"</tr>";
					}
				}
				else
				{
					$('.th_tl').attr('hidden', 'true');
					$('.th_ha').attr('hidden', 'true');
					for (var i = 0; i < res['tatcabaihat'].length; i++) 
					{
						template    +="<tr>"
						+"<td class='sid' hidden='true'>"+res['tatcabaihat'][i]['SID']+"</td>"
						+"<td class='ten_bai_hat'>"+res['tatcabaihat'][i]['song_name']+"</td>"
						+"<td class='ten_ca_si'>"+res['tatcabaihat'][i]['singer']+"</td>"
						+"<td class='ten_nhac_si' hidden='true'>"+res['tatcabaihat'][i]['artist']+"</td>"
						+"<td class='the_loai' hidden='true'>"+res['tatcabaihat'][i]['type']+"</td>"
						+"<td class='hinh_anh' hidden='true'><img src='http://localhost:81/MusicWeb/vendor/Image/"+res['tatcabaihat'][i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
						+"<td class='audio'>"
						+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+res['tatcabaihat'][i]['URL']+"' loop controls controlslist='nodownload'></audio>"
						+"</td>"
						+"<td class='loi_bai_hat' hidden='true'>"+res['tatcabaihat'][i]['lyric']+"</td>"
						+"<td colspan='3' class='chuc_nang'>"
						+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'><i class='fa fa-pencil' aria-hidden='true'></i></div>"
						+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'><i class='fa fa-info' aria-hidden='true'></i></div>"
						+"<a class='btn btn-outline-danger xoa' href=''><i class='fa fa-times' aria-hidden='true'></i></a>"
						+"</td>"
						+"</tr>";
					}
				}
				

				for (var i = 0; i < res['sotrang']; i++) {
					pagination+="<li class='page-item pag_khonhac' data-page='"+(i+1)+"'><a class='page-link' href=''>"+(i+1)+"</a></li>";
				}
				$('ul.pagination').html(pagination);
				$('.pag_khonhac:first').addClass('active');
				$('tbody').html(template);
			}
		})
}

function dongModal() {
	$('#modalThem').modal('hide');
}
function dongModalEdit() {
	$('#modalChinhSua').modal('hide');
}
function openModal() {
	$('#modalThem').modal('show');
}

	// $(document).on('click', '.addSong', function(event) {
	// 	event.preventDefault();
	// 	dongModal();
	// });
	
	$(document).on('keyup', '.input_tim_bai_hat input', function(event) {
		var song_name = $(this).val();
		var length_input  = $(this).val().length;
		var width = screen.width;
		console.log(length_input);
		console.log(song_name);
		$.ajax({
			url: 'http://localhost:81/MusicWeb/Admin_quanlykhonhac/TimKiem',
			type: 'POST',
			dataType: 'json',
			data: {song_name : song_name},
			success: function(result){
				if(Number(length_input == 0)){
					loadAjax();
				}
				else{
					var sum = result.length;
					var sotrang = Math.ceil(sum/4);
					var template = '';
					var pagination ='';
					if(sum != 0){
						if (sotrang == 1) { // chỉ có một trang k có phân trang
							if(width > 1118)
							{
								for (var i = 0; i < result.length; i++) {
									template +="<tr>"
									+"<td class='sid' hidden='true'>"+result[i]['SID']+"</td>"
									+"<td class='ten_bai_hat'>"+result[i]['song_name']+"</td>"
									+"<td class='ten_ca_si'>"+result[i]['singer']+"</td>"
									+"<td class='ten_nhac_si' hidden='true'>"+result[i]['artist']+"</td>"
									+"<td class='the_loai'>"+result[i]['type']+"</td>"
									+"<td class='hinh_anh'><img src='http://localhost:81/MusicWeb/vendor/Image/"+result[i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
									+"<td class='audio'>"
									+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+result[i]['URL']+"' loop controls controlslist='nodownload'></audio>"
									+"</td>"
									+"<td class='loi_bai_hat' hidden='true'>"+result[i]['lyric']+"</td>"
									+"<td colspan='3' class='chuc_nang'>"
									+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'>Chỉnh sửa <i class='fa fa-pencil' aria-hidden='true'></i></div>"
									+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'>Chi tiết <i class='fa fa-info' aria-hidden='true'></i></div>"
									+"<a class='btn btn-outline-danger xoa' href=''>Xóa <i class='fa fa-times' aria-hidden='true'></i></a>"
									+"</td>"
									+"</tr>";

								}
							}
							else if(width <= 1118 && width > 1024)
							{
								for (var i = 0; i < result.length; i++) {
									template +="<tr>"
									+"<td class='sid' hidden='true'>"+result[i]['SID']+"</td>"
									+"<td class='ten_bai_hat'>"+result[i]['song_name']+"</td>"
									+"<td class='ten_ca_si'>"+result[i]['singer']+"</td>"
									+"<td class='ten_nhac_si' hidden='true'>"+result[i]['artist']+"</td>"
									+"<td class='the_loai'>"+result[i]['type']+"</td>"
									+"<td class='hinh_anh'><img src='http://localhost:81/MusicWeb/vendor/Image/"+result[i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
									+"<td class='audio'>"
									+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+result[i]['URL']+"' loop controls controlslist='nodownload'></audio>"
									+"</td>"
									+"<td class='loi_bai_hat' hidden='true'>"+result[i]['lyric']+"</td>"
									+"<td colspan='3' class='chuc_nang'>"
									+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'><i class='fa fa-pencil' aria-hidden='true'></i></div>"
									+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'><i class='fa fa-info' aria-hidden='true'></i></div>"
									+"<a class='btn btn-outline-danger xoa' href=''><i class='fa fa-times' aria-hidden='true'></i></a>"
									+"</td>"
									+"</tr>";

								}
							}
							else if(width <= 1024 && width > 870)
							{
								$('.th_tl').attr('hidden', 'true');
								for (var i = 0; i < result.length; i++) {
									template +="<tr>"
									+"<td class='sid' hidden='true'>"+result[i]['SID']+"</td>"
									+"<td class='ten_bai_hat'>"+result[i]['song_name']+"</td>"
									+"<td class='ten_ca_si'>"+result[i]['singer']+"</td>"
									+"<td class='ten_nhac_si' hidden='true'>"+result[i]['artist']+"</td>"
									+"<td class='the_loai' hidden='true'>"+result[i]['type']+"</td>"
									+"<td class='hinh_anh'><img src='http://localhost:81/MusicWeb/vendor/Image/"+result[i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
									+"<td class='audio'>"
									+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+result[i]['URL']+"' loop controls controlslist='nodownload'></audio>"
									+"</td>"
									+"<td class='loi_bai_hat' hidden='true'>"+result[i]['lyric']+"</td>"
									+"<td colspan='3' class='chuc_nang'>"
									+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'><i class='fa fa-pencil' aria-hidden='true'></i></div>"
									+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'><i class='fa fa-info' aria-hidden='true'></i></div>"
									+"<a class='btn btn-outline-danger xoa' href=''><i class='fa fa-times' aria-hidden='true'></i></a>"
									+"</td>"
									+"</tr>";

								}
							}
							else
							{
								$('.th_tl').attr('hidden', 'true');
								$('.th_ha').attr('hidden', 'true');
								for (var i = 0; i < result.length; i++) {
									template +="<tr>"
									+"<td class='sid' hidden='true'>"+result[i]['SID']+"</td>"
									+"<td class='ten_bai_hat'>"+result[i]['song_name']+"</td>"
									+"<td class='ten_ca_si'>"+result[i]['singer']+"</td>"
									+"<td class='ten_nhac_si' hidden='true'>"+result[i]['artist']+"</td>"
									+"<td class='the_loai' hidden='true'>"+result[i]['type']+"</td>"
									+"<td class='hinh_anh' hidden='true'><img src='http://localhost:81/MusicWeb/vendor/Image/"+result[i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
									+"<td class='audio'>"
									+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+result[i]['URL']+"' loop controls controlslist='nodownload'></audio>"
									+"</td>"
									+"<td class='loi_bai_hat' hidden='true'>"+result[i]['lyric']+"</td>"
									+"<td colspan='3' class='chuc_nang'>"
									+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'><i class='fa fa-pencil' aria-hidden='true'></i></div>"
									+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'><i class='fa fa-info' aria-hidden='true'></i></div>"
									+"<a class='btn btn-outline-danger xoa' href=''><i class='fa fa-times' aria-hidden='true'></i></a>"
									+"</td>"
									+"</tr>";

								}
							}
							$('ul.pagination').html('');

						}
						else{
							if(width > 1118)
							{
								for (var i = 0; i < 4; i++) {
									template +="<tr>"
									+"<td class='sid' hidden='true'>"+result[i]['SID']+"</td>"
									+"<td class='ten_bai_hat'>"+result[i]['song_name']+"</td>"
									+"<td class='ten_ca_si'>"+result[i]['singer']+"</td>"
									+"<td class='ten_nhac_si' hidden='true'>"+result[i]['artist']+"</td>"
									+"<td class='the_loai'>"+result[i]['type']+"</td>"
									+"<td class='hinh_anh'><img src='http://localhost:81/MusicWeb/vendor/Image/"+result[i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
									+"<td class='audio'>"
									+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+result[i]['URL']+"' loop controls controlslist='nodownload'></audio>"
									+"</td>"
									+"<td class='loi_bai_hat' hidden='true'>"+result[i]['lyric']+"</td>"
									+"<td colspan='3' class='chuc_nang'>"
									+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'>Chỉnh sửa <i class='fa fa-pencil' aria-hidden='true'></i></div>"
									+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'>Chi tiết <i class='fa fa-info' aria-hidden='true'></i></div>"
									+"<a class='btn btn-outline-danger xoa' href=''>Xóa <i class='fa fa-times' aria-hidden='true'></i></a>"
									+"</td>"
									+"</tr>";

								}
							}
							else if(width <= 1118 && width > 1024)
							{
								for (var i = 0; i < 4; i++) {
									template +="<tr>"
									+"<td class='sid' hidden='true'>"+result[i]['SID']+"</td>"
									+"<td class='ten_bai_hat'>"+result[i]['song_name']+"</td>"
									+"<td class='ten_ca_si'>"+result[i]['singer']+"</td>"
									+"<td class='ten_nhac_si' hidden='true'>"+result[i]['artist']+"</td>"
									+"<td class='the_loai'>"+result[i]['type']+"</td>"
									+"<td class='hinh_anh'><img src='http://localhost:81/MusicWeb/vendor/Image/"+result[i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
									+"<td class='audio'>"
									+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+result[i]['URL']+"' loop controls controlslist='nodownload'></audio>"
									+"</td>"
									+"<td class='loi_bai_hat' hidden='true'>"+result[i]['lyric']+"</td>"
									+"<td colspan='3' class='chuc_nang'>"
									+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'><i class='fa fa-pencil' aria-hidden='true'></i></div>"
									+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'><i class='fa fa-info' aria-hidden='true'></i></div>"
									+"<a class='btn btn-outline-danger xoa' href=''><i class='fa fa-times' aria-hidden='true'></i></a>"
									+"</td>"
									+"</tr>";

								}
							}
							else if(width <= 1024 && width > 870)
							{
								$('.th_tl').attr('hidden', 'true');
								for (var i = 0; i < 4; i++) {
									template +="<tr>"
									+"<td class='sid' hidden='true'>"+result[i]['SID']+"</td>"
									+"<td class='ten_bai_hat'>"+result[i]['song_name']+"</td>"
									+"<td class='ten_ca_si'>"+result[i]['singer']+"</td>"
									+"<td class='ten_nhac_si' hidden='true'>"+result[i]['artist']+"</td>"
									+"<td class='the_loai' hidden='true'>"+result[i]['type']+"</td>"
									+"<td class='hinh_anh'><img src='http://localhost:81/MusicWeb/vendor/Image/"+result[i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
									+"<td class='audio'>"
									+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+result[i]['URL']+"' loop controls controlslist='nodownload'></audio>"
									+"</td>"
									+"<td class='loi_bai_hat' hidden='true'>"+result[i]['lyric']+"</td>"
									+"<td colspan='3' class='chuc_nang'>"
									+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'><i class='fa fa-pencil' aria-hidden='true'></i></div>"
									+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'><i class='fa fa-info' aria-hidden='true'></i></div>"
									+"<a class='btn btn-outline-danger xoa' href=''><i class='fa fa-times' aria-hidden='true'></i></a>"
									+"</td>"
									+"</tr>";

								}
							}
							else
							{
								$('.th_tl').attr('hidden', 'true');
								$('.th_ha').attr('hidden', 'true');
								for (var i = 0; i < 4; i++) {
									template +="<tr>"
									+"<td class='sid' hidden='true'>"+result[i]['SID']+"</td>"
									+"<td class='ten_bai_hat'>"+result[i]['song_name']+"</td>"
									+"<td class='ten_ca_si'>"+result[i]['singer']+"</td>"
									+"<td class='ten_nhac_si' hidden='true'>"+result[i]['artist']+"</td>"
									+"<td class='the_loai' hidden='true'>"+result[i]['type']+"</td>"
									+"<td class='hinh_anh' hidden='true'><img src='http://localhost:81/MusicWeb/vendor/Image/"+result[i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
									+"<td class='audio'>"
									+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+result[i]['URL']+"' loop controls controlslist='nodownload'></audio>"
									+"</td>"
									+"<td class='loi_bai_hat' hidden='true'>"+result[i]['lyric']+"</td>"
									+"<td colspan='3' class='chuc_nang'>"
									+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'><i class='fa fa-pencil' aria-hidden='true'></i></div>"
									+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'><i class='fa fa-info' aria-hidden='true'></i></div>"
									+"<a class='btn btn-outline-danger xoa' href=''><i class='fa fa-times' aria-hidden='true'></i></a>"
									+"</td>"
									+"</tr>";

								}
							}

							for (var i = 0; i < sotrang; i++) {
								pagination+="<li class='page-item pag-tk' data-input = '"+song_name+"' data-page='"+(i+1)+"'><a class='page-link' href=''>"+(i+1)+"</a></li>";
							}
							$('ul.pagination').html(pagination);
							$('.pag-tk:first').addClass('active');
						}
						$('.timkiemloi').attr('hidden', 'true');
						$('tbody').html(template);

					}
					else{
						$('tbody').html('');
						$('.timkiemloi').removeAttr('hidden');
						$('ul.pagination').html('');
					}
				}
				


			}
		})
});

$(document).on('click', '.pag-tk', function(event) {
	event.preventDefault();
	$('.pag-tk').removeClass('active');
	$(this).addClass('active');
	var width = screen.width;

	var song_name = $(this)[0]['attributes']['data-input'].value;
	var trangso = $(this)[0]['attributes']['data-page'].value;


	$.ajax({
		url: 'http://localhost:81/MusicWeb/Admin_quanlykhonhac/TimKiem',
		type: 'POST',
		dataType: 'json',
		data:{
			'song_name' : song_name
		},
		success: function(result){
			var sum = Number(result.length);
			var batdau = (trangso -1) * 4;
			var ketthuc = batdau + 4;
			var template = '';
			if(ketthuc > sum){
				if(width > 1118)
				{
					for (var i = batdau; i < sum; i++) {
						template +="<tr>"
						+"<td class='sid' hidden='true'>"+result[i]['SID']+"</td>"
						+"<td class='ten_bai_hat'>"+result[i]['song_name']+"</td>"
						+"<td class='ten_ca_si'>"+result[i]['singer']+"</td>"
						+"<td class='ten_nhac_si' hidden='true'>"+result[i]['artist']+"</td>"
						+"<td class='the_loai'>"+result[i]['type']+"</td>"
						+"<td class='hinh_anh'><img src='http://localhost:81/MusicWeb/vendor/Image/"+result[i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
						+"<td class='audio'>"
						+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+result[i]['URL']+"' loop controls controlslist='nodownload'></audio>"
						+"</td>"
						+"<td class='loi_bai_hat' hidden='true'>"+result[i]['lyric']+"</td>"
						+"<td colspan='3' class='chuc_nang'>"
						+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'>Chỉnh sửa <i class='fa fa-pencil' aria-hidden='true'></i></div>"
						+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'>Chi tiết <i class='fa fa-info' aria-hidden='true'></i></div>"
						+"<a class='btn btn-outline-danger xoa' href=''>Xóa <i class='fa fa-times' aria-hidden='true'></i></a>"
						+"</td>"
						+"</tr>";

					}
				}
				else if(width <= 1118 && width > 1024)
				{
					for (var i = batdau; i < sum; i++) {
						template +="<tr>"
						+"<td class='sid' hidden='true'>"+result[i]['SID']+"</td>"
						+"<td class='ten_bai_hat'>"+result[i]['song_name']+"</td>"
						+"<td class='ten_ca_si'>"+result[i]['singer']+"</td>"
						+"<td class='ten_nhac_si' hidden='true'>"+result[i]['artist']+"</td>"
						+"<td class='the_loai'>"+result[i]['type']+"</td>"
						+"<td class='hinh_anh'><img src='http://localhost:81/MusicWeb/vendor/Image/"+result[i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
						+"<td class='audio'>"
						+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+result[i]['URL']+"' loop controls controlslist='nodownload'></audio>"
						+"</td>"
						+"<td class='loi_bai_hat' hidden='true'>"+result[i]['lyric']+"</td>"
						+"<td colspan='3' class='chuc_nang'>"
						+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'><i class='fa fa-pencil' aria-hidden='true'></i></div>"
						+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'><i class='fa fa-info' aria-hidden='true'></i></div>"
						+"<a class='btn btn-outline-danger xoa' href=''><i class='fa fa-times' aria-hidden='true'></i></a>"
						+"</td>"
						+"</tr>";

					}
				}
				else if(width <= 1024 && width > 870)
				{
					$('.th_tl').attr('hidden', 'true');
					for (var i = batdau; i < sum; i++) {
						template +="<tr>"
						+"<td class='sid' hidden='true'>"+result[i]['SID']+"</td>"
						+"<td class='ten_bai_hat'>"+result[i]['song_name']+"</td>"
						+"<td class='ten_ca_si'>"+result[i]['singer']+"</td>"
						+"<td class='ten_nhac_si' hidden='true'>"+result[i]['artist']+"</td>"
						+"<td class='the_loai' hidden='true'>"+result[i]['type']+"</td>"
						+"<td class='hinh_anh'><img src='http://localhost:81/MusicWeb/vendor/Image/"+result[i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
						+"<td class='audio'>"
						+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+result[i]['URL']+"' loop controls controlslist='nodownload'></audio>"
						+"</td>"
						+"<td class='loi_bai_hat' hidden='true'>"+result[i]['lyric']+"</td>"
						+"<td colspan='3' class='chuc_nang'>"
						+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'><i class='fa fa-pencil' aria-hidden='true'></i></div>"
						+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'><i class='fa fa-info' aria-hidden='true'></i></div>"
						+"<a class='btn btn-outline-danger xoa' href=''><i class='fa fa-times' aria-hidden='true'></i></a>"
						+"</td>"
						+"</tr>";

					}
				}
				else
				{
					$('.th_tl').attr('hidden', 'true');
					$('.th_ha').attr('hidden', 'true');
					for (var i = batdau; i < sum; i++) {
						template +="<tr>"
						+"<td class='sid' hidden='true'>"+result[i]['SID']+"</td>"
						+"<td class='ten_bai_hat'>"+result[i]['song_name']+"</td>"
						+"<td class='ten_ca_si'>"+result[i]['singer']+"</td>"
						+"<td class='ten_nhac_si' hidden='true'>"+result[i]['artist']+"</td>"
						+"<td class='the_loai' hidden='true'>"+result[i]['type']+"</td>"
						+"<td class='hinh_anh' hidden='true'><img src='http://localhost:81/MusicWeb/vendor/Image/"+result[i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
						+"<td class='audio'>"
						+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+result[i]['URL']+"' loop controls controlslist='nodownload'></audio>"
						+"</td>"
						+"<td class='loi_bai_hat' hidden='true'>"+result[i]['lyric']+"</td>"
						+"<td colspan='3' class='chuc_nang'>"
						+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'><i class='fa fa-pencil' aria-hidden='true'></i></div>"
						+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'><i class='fa fa-info' aria-hidden='true'></i></div>"
						+"<a class='btn btn-outline-danger xoa' href=''><i class='fa fa-times' aria-hidden='true'></i></a>"
						+"</td>"
						+"</tr>";

					}
				}

				$('tbody').html(template);
			}
			else{
				if(width > 1118)
				{
					for (var i = batdau; i < ketthuc; i++) {
						template +="<tr>"
						+"<td class='sid' hidden='true'>"+result[i]['SID']+"</td>"
						+"<td class='ten_bai_hat'>"+result[i]['song_name']+"</td>"
						+"<td class='ten_ca_si'>"+result[i]['singer']+"</td>"
						+"<td class='ten_nhac_si' hidden='true'>"+result[i]['artist']+"</td>"
						+"<td class='the_loai'>"+result[i]['type']+"</td>"
						+"<td class='hinh_anh'><img src='http://localhost:81/MusicWeb/vendor/Image/"+result[i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
						+"<td class='audio'>"
						+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+result[i]['URL']+"' loop controls controlslist='nodownload'></audio>"
						+"</td>"
						+"<td class='loi_bai_hat' hidden='true'>"+result[i]['lyric']+"</td>"
						+"<td colspan='3' class='chuc_nang'>"
						+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'>Chỉnh sửa <i class='fa fa-pencil' aria-hidden='true'></i></div>"
						+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'>Chi tiết <i class='fa fa-info' aria-hidden='true'></i></div>"
						+"<a class='btn btn-outline-danger xoa' href=''>Xóa <i class='fa fa-times' aria-hidden='true'></i></a>"
						+"</td>"
						+"</tr>";

					}
				}
				else if(width <= 1118 && width > 1024)
				{
					for (var i = batdau; i < ketthuc; i++) {
						template +="<tr>"
						+"<td class='sid' hidden='true'>"+result[i]['SID']+"</td>"
						+"<td class='ten_bai_hat'>"+result[i]['song_name']+"</td>"
						+"<td class='ten_ca_si'>"+result[i]['singer']+"</td>"
						+"<td class='ten_nhac_si' hidden='true'>"+result[i]['artist']+"</td>"
						+"<td class='the_loai'>"+result[i]['type']+"</td>"
						+"<td class='hinh_anh'><img src='http://localhost:81/MusicWeb/vendor/Image/"+result[i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
						+"<td class='audio'>"
						+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+result[i]['URL']+"' loop controls controlslist='nodownload'></audio>"
						+"</td>"
						+"<td class='loi_bai_hat' hidden='true'>"+result[i]['lyric']+"</td>"
						+"<td colspan='3' class='chuc_nang'>"
						+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'><i class='fa fa-pencil' aria-hidden='true'></i></div>"
						+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'><i class='fa fa-info' aria-hidden='true'></i></div>"
						+"<a class='btn btn-outline-danger xoa' href=''><i class='fa fa-times' aria-hidden='true'></i></a>"
						+"</td>"
						+"</tr>";

					}
				}
				else if(width <= 1024 && width > 870)
				{
					$('.th_tl').attr('hidden', 'true');
					for (var i = batdau; i < ketthuc; i++) {
						template +="<tr>"
						+"<td class='sid' hidden='true'>"+result[i]['SID']+"</td>"
						+"<td class='ten_bai_hat'>"+result[i]['song_name']+"</td>"
						+"<td class='ten_ca_si'>"+result[i]['singer']+"</td>"
						+"<td class='ten_nhac_si' hidden='true'>"+result[i]['artist']+"</td>"
						+"<td class='the_loai' hidden='true'>"+result[i]['type']+"</td>"
						+"<td class='hinh_anh'><img src='http://localhost:81/MusicWeb/vendor/Image/"+result[i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
						+"<td class='audio'>"
						+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+result[i]['URL']+"' loop controls controlslist='nodownload'></audio>"
						+"</td>"
						+"<td class='loi_bai_hat' hidden='true'>"+result[i]['lyric']+"</td>"
						+"<td colspan='3' class='chuc_nang'>"
						+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'><i class='fa fa-pencil' aria-hidden='true'></i></div>"
						+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'><i class='fa fa-info' aria-hidden='true'></i></div>"
						+"<a class='btn btn-outline-danger xoa' href=''><i class='fa fa-times' aria-hidden='true'></i></a>"
						+"</td>"
						+"</tr>";

					}
				}
				else
				{
					$('.th_tl').attr('hidden', 'true');
					$('.th_ha').attr('hidden', 'true');
					for (var i = batdau; i < ketthuc; i++) {
						template +="<tr>"
						+"<td class='sid' hidden='true'>"+result[i]['SID']+"</td>"
						+"<td class='ten_bai_hat'>"+result[i]['song_name']+"</td>"
						+"<td class='ten_ca_si'>"+result[i]['singer']+"</td>"
						+"<td class='ten_nhac_si' hidden='true'>"+result[i]['artist']+"</td>"
						+"<td class='the_loai' hidden='true'>"+result[i]['type']+"</td>"
						+"<td class='hinh_anh' hidden='true'><img src='http://localhost:81/MusicWeb/vendor/Image/"+result[i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
						+"<td class='audio'>"
						+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+result[i]['URL']+"' loop controls controlslist='nodownload'></audio>"
						+"</td>"
						+"<td class='loi_bai_hat' hidden='true'>"+result[i]['lyric']+"</td>"
						+"<td colspan='3' class='chuc_nang'>"
						+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'><i class='fa fa-pencil' aria-hidden='true'></i></div>"
						+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'><i class='fa fa-info' aria-hidden='true'></i></div>"
						+"<a class='btn btn-outline-danger xoa' href=''><i class='fa fa-times' aria-hidden='true'></i></a>"
						+"</td>"
						+"</tr>";

					}
				}
				$('tbody').html(template);
			}
		}
	})




});

$(document).on('click', '.pag_khonhac', function(event) {
	$('.pag_khonhac').removeClass('active');
	$(this).addClass('active');
	event.preventDefault();
	var width = screen.width;
	var sotrang = $(this).children('a')[0].innerText;
	console.log(sotrang);

	$.ajax({
		url: 'http://localhost:81/MusicWeb/Admin_quanlykhonhac/pageSong',
		type: 'POST',
		dataType: 'json',
		data: {sotrang: sotrang},
		success : function(res) {
			console.log(res['tatcabaihat']);
			var template = "";
			if(width > 1118)
			{
				for (var i = 0; i < res['tatcabaihat'].length; i++) {
					template    +="<tr>"
					+"<td class='sid' hidden='true'>"+res['tatcabaihat'][i]['SID']+"</td>"
					+"<td class='ten_bai_hat'>"+res['tatcabaihat'][i]['song_name']+"</td>"
					+"<td class='ten_ca_si'>"+res['tatcabaihat'][i]['singer']+"</td>"
					+"<td class='ten_nhac_si' hidden='true'>"+res['tatcabaihat'][i]['artist']+"</td>"
					+"<td class='the_loai'>"+res['tatcabaihat'][i]['type']+"</td>"
					+"<td class='hinh_anh'><img src='http://localhost:81/MusicWeb/vendor/Image/"+res['tatcabaihat'][i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
					+"<td class='audio'>"
					+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+res['tatcabaihat'][i]['URL']+"' loop controls controlslist='nodownload'></audio>"
					+"</td>"
					+"<td class='loi_bai_hat' hidden='true'>"+res['tatcabaihat'][i]['lyric']+"</td>"
					+"<td colspan='3' class='chuc_nang'>"
					+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'>Chỉnh sửa<i class='fa fa-pencil' aria-hidden='true'></i></div>"
					+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'>Chi tiết<i class='fa fa-info' aria-hidden='true'></i></div>"
					+"<a class='btn btn-outline-danger xoa' href=''>Xóa<i class='fa fa-times' aria-hidden='true'></i></a>"
					+"</td>"
					+"</tr>";
				}
			}
			else if(width <= 1118 && width > 1024)
			{
				for (var i = 0; i < res['tatcabaihat'].length; i++) {
					template    +="<tr>"
					+"<td class='sid' hidden='true'>"+res['tatcabaihat'][i]['SID']+"</td>"
					+"<td class='ten_bai_hat'>"+res['tatcabaihat'][i]['song_name']+"</td>"
					+"<td class='ten_ca_si'>"+res['tatcabaihat'][i]['singer']+"</td>"
					+"<td class='ten_nhac_si' hidden='true'>"+res['tatcabaihat'][i]['artist']+"</td>"
					+"<td class='the_loai'>"+res['tatcabaihat'][i]['type']+"</td>"
					+"<td class='hinh_anh'><img src='http://localhost:81/MusicWeb/vendor/Image/"+res['tatcabaihat'][i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
					+"<td class='audio'>"
					+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+res['tatcabaihat'][i]['URL']+"' loop controls controlslist='nodownload'></audio>"
					+"</td>"
					+"<td class='loi_bai_hat' hidden='true'>"+res['tatcabaihat'][i]['lyric']+"</td>"
					+"<td colspan='3' class='chuc_nang'>"
					+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'><i class='fa fa-pencil' aria-hidden='true'></i></div>"
					+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'><i class='fa fa-info' aria-hidden='true'></i></div>"
					+"<a class='btn btn-outline-danger xoa' href=''><i class='fa fa-times' aria-hidden='true'></i></a>"
					+"</td>"
					+"</tr>";
				}
			}
			else if(width <= 1024 && width > 870)
			{
				$('.th_tl').attr('hidden', 'true');
				for (var i = 0; i < res['tatcabaihat'].length; i++) {
					template    +="<tr>"
					+"<td class='sid' hidden='true'>"+res['tatcabaihat'][i]['SID']+"</td>"
					+"<td class='ten_bai_hat'>"+res['tatcabaihat'][i]['song_name']+"</td>"
					+"<td class='ten_ca_si'>"+res['tatcabaihat'][i]['singer']+"</td>"
					+"<td class='ten_nhac_si' hidden='true'>"+res['tatcabaihat'][i]['artist']+"</td>"
					+"<td class='the_loai' hidden='true'>"+res['tatcabaihat'][i]['type']+"</td>"
					+"<td class='hinh_anh'><img src='http://localhost:81/MusicWeb/vendor/Image/"+res['tatcabaihat'][i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
					+"<td class='audio'>"
					+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+res['tatcabaihat'][i]['URL']+"' loop controls controlslist='nodownload'></audio>"
					+"</td>"
					+"<td class='loi_bai_hat' hidden='true'>"+res['tatcabaihat'][i]['lyric']+"</td>"
					+"<td colspan='3' class='chuc_nang'>"
					+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'><i class='fa fa-pencil' aria-hidden='true'></i></div>"
					+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'><i class='fa fa-info' aria-hidden='true'></i></div>"
					+"<a class='btn btn-outline-danger xoa' href=''><i class='fa fa-times' aria-hidden='true'></i></a>"
					+"</td>"
					+"</tr>";
				}
			}
			else
			{
				$('.th_tl').attr('hidden', 'true');
				$('.th_ha').attr('hidden', 'true');
				for (var i = 0; i < res['tatcabaihat'].length; i++) {
					template    +="<tr>"
					+"<td class='sid' hidden='true'>"+res['tatcabaihat'][i]['SID']+"</td>"
					+"<td class='ten_bai_hat'>"+res['tatcabaihat'][i]['song_name']+"</td>"
					+"<td class='ten_ca_si'>"+res['tatcabaihat'][i]['singer']+"</td>"
					+"<td class='ten_nhac_si' hidden='true'>"+res['tatcabaihat'][i]['artist']+"</td>"
					+"<td class='the_loai' hidden='true'>"+res['tatcabaihat'][i]['type']+"</td>"
					+"<td class='hinh_anh' hidden='true'><img src='http://localhost:81/MusicWeb/vendor/Image/"+res['tatcabaihat'][i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
					+"<td class='audio'>"
					+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+res['tatcabaihat'][i]['URL']+"' loop controls controlslist='nodownload'></audio>"
					+"</td>"
					+"<td class='loi_bai_hat' hidden='true'>"+res['tatcabaihat'][i]['lyric']+"</td>"
					+"<td colspan='3' class='chuc_nang'>"
					+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'><i class='fa fa-pencil' aria-hidden='true'></i></div>"
					+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'><i class='fa fa-info' aria-hidden='true'></i></div>"
					+"<a class='btn btn-outline-danger xoa' href=''><i class='fa fa-times' aria-hidden='true'></i></a>"
					+"</td>"
					+"</tr>";
				}
			}

				// console.log(template);

				$('tbody').html(template);
			}
		})		

});	

	// function showToast() {
	// 	$('.toast').addClass('toast_show');
	// }
	// function closeToast(argument) {
	// 	$('.toast').removeClass('toast_show');
	// }
	// function openToast() {
	// 	setTimeout(showToast(),3000);
	// 	setTimeout(closeToast(),0);
	// }


	$(document).on('click', '.addSong', function(event) {
		var ten_bai_hat = $(this).parent('div').parent('.row').parent('form').find('.add_tbh').val();
		var ten_ca_si = $(this).parent('div').parent('.row').parent('form').find('.add_tcs').val();
		var ten_nhac_si = $(this).parent('div').parent('.row').parent('form').find('.add_tns').val();
		var the_loai = $(this).parent('div').parent('.row').parent('form').find('.add_tl').val();
		var audio = $(this).parent('div').parent('.row').parent('form').find('.add_audio').val();
		var avt = $(this).parent('div').parent('.row').parent('form').find('.add_image').val();
		var loi_bai_hat = $(this).parent('div').parent('.row').parent('form').find('.add_lyric').val();
		$.ajax({
			url: 'http://localhost:81/MusicWeb/Admin_quanlykhonhac/ThemBaiHat',
			type: 'POST',
			data: {
				ten_bai_hat: ten_bai_hat,
				ten_ca_si: ten_ca_si,
				ten_nhac_si: ten_nhac_si,
				the_loai: the_loai,
				audio: audio,
				avt: avt,
				loi_bai_hat: loi_bai_hat
			},
			success : function(res) {
				console.log(res);
				// console.log(res.data);
				if(res== 'thanhcong'){
					dongModal();
					setTimeout(showToast('#28A745',"Thêm thành công !!!"),300);
					$("#formThem").trigger("reset");
					loadAjax();
				}
				else{
					dongModal();
					setTimeout(showToast('gray',"Thất bại !!!"),300);
					$("#formThem").trigger("reset");
					loadAjax();
				}
				
			}
		})
	});

	$(document).on('click', '.editSong', function(event) {
		event.preventDefault();
		var tbh_sua = $(this).parent('div').parent('.row').parent('form').find('.tbh_sua').val();
		var tcs_sua = $(this).parent('div').parent('.row').parent('form').find('.tcs_sua').val();
		var tns_sua = $(this).parent('div').parent('.row').parent('form').find('.tns_sua').val();
		var tl_sua = $(this).parent('div').parent('.row').parent('form').find('.tl_sua').val();
		var audio_sua = $(this).parent('div').parent('.row').parent('form').find('.audio_sua').val();
		audio_sua = audio_sua.split("\\")[2];
		var ha_sua = $(this).parent('div').parent('.row').parent('form').find('.ha_sua').val();
		ha_sua = ha_sua.split("\\")[2];
		var lyric_sua = $(this).parent('div').parent('.row').parent('form').find('.lyric_sua').val();
		var sid = $(this).parent('div').parent('.row').parent('form').find('.SID').val();

		$.ajax({
			url: 'http://localhost:81/MusicWeb/Admin_quanlykhonhac/ChinhSuaBaiHat',
			type: 'POST',
			data: {
				sid:sid,
				tbh_sua: tbh_sua,
				tcs_sua: tcs_sua,
				tns_sua: tns_sua,
				tl_sua: tl_sua,
				audio_sua: audio_sua,
				ha_sua: ha_sua,
				lyric_sua: lyric_sua
			},
			success : function(res) {
				if(res== 'thanhcong'){
					dongModalEdit();
					
					setTimeout(showToast('#007BFF',"Chỉnh sửa thành công !!!"),300);
					$('.chinhsua').find('.ten_bai_hat')[0].innerText = tbh_sua;
					$('.chinhsua').find('.ten_ca_si')[0].innerText = tcs_sua;
					$('.chinhsua').find('.ten_nhac_si')[0].innerText = tns_sua;
					$('.chinhsua').find('.the_loai')[0].innerText = tl_sua;
					if(ha_sua == undefined){
					}
					else{
						$('.chinhsua').find('.hinh_anh').children('img').attr('src', 'http://localhost:81/MusicWeb/vendor/Image/'+ha_sua);
					}
					if(audio_sua == undefined){
					}
					else{
						$('.chinhsua').find('.audio').children('audio').attr('src', 'http://localhost:81/MusicWeb/vendor/Music/'+audio_sua);
					}
					
					$('.chinhsua').find('.loi_bai_hat')[0].innerText = lyric_sua;
					$('tr').removeClass('chinhsua');
				}
				else{
					dongModalEdit();
					
					setTimeout(showToast('gray',"Thất bại !!!"),300);
					$('tr').removeClass('chinhsua');
				}
				
			}
		})
	})

	$(document).on('click', '.xoa', function(event) {
		event.preventDefault();
		var sid = $(this).parent('.chuc_nang').parent('tr').children('.sid')[0].innerText;
		$.ajax({
			url: 'http://localhost:81/MusicWeb/Admin_quanlykhonhac/XoaBaihat',
			type: 'POST',
			data: {
				sid:sid
			},
			success : function(res) {
				if(res== 'thanhcong'){
					setTimeout(showToast('#DC3545',"Xóa thành công !!!"),300);
					loadAjax();
				}
				else{
					setTimeout(showToast('gray',"Thất bại !!!"),300);
				}
				
			}
		})
	});



	var showToast = function(bg,text){
		$('.toast')[0].innerText = text;
		console.log($('.toast')[0]['attributes']['style']['value']);
		$('.toast').attr('style', 'background:'+bg);
		$('.toast').addClass('toast_show');

		setTimeout(function(){
			$('.toast').removeClass('toast_show');
		}, 1500);
	};
});