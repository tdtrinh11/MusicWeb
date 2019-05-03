$(document).ready(function() {
	$(document).on('keyup', '.input_tim_bai_hat input', function(event) {
		var song_name = $(this).val();
		console.log(song_name);
		$.ajax({
			url: 'http://localhost:81/MusicWeb/index.php/Admin_quanlykhonhac/TimKiem',
			type: 'POST',
			dataType: 'json',
			data: {song_name : song_name},
			success: function(result){
				var sum = result.length;
				console.log(sum);
				var sotrang = Math.ceil(sum/4);
				var template = '';
				var pagination ='';
				if(sum != 0){
					if (sotrang == 1) { // chỉ có một trang k có phân trang
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
								+"<a class='btn btn-outline-danger xoa' href='http://localhost:81/MusicWeb/index.php/Admin_quanlykhonhac/XoaBaiHat/"+result[i]['SID']+"'>Xóa <i class='fa fa-times' aria-hidden='true'></i></a>"
								+"</td>"
								+"</tr>";

							}
							$('ul.pagination').html('');

						}
						else{
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
								+"<a class='btn btn-outline-danger xoa' href='http://localhost:81/MusicWeb/index.php/Admin_quanlykhonhac/XoaBaiHat/"+result[i]['SID']+"'>Xóa <i class='fa fa-times' aria-hidden='true'></i></a>"
								+"</td>"
								+"</tr>";
							}

							for (var i = 0; i < sotrang; i++) {
								pagination+="<li class='page-item pag-tk' data-input='"+song_name+"' data-page='"+(i+1)+"'><a class='page-link' href=''>"+(i+1)+"</a></li>";
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
				})
	});
	// $(document).on('click', '.tim_bai_hat', function(event) {
	// 	var song_name = $(this).prev('.input_tim_bai_hat').children('input').val();
	// 	$.ajax({
	// 		url: 'http://localhost:81/MusicWeb/index.php/Admin_quanlykhonhac/TimKiem',
	// 		type: 'POST',
	// 		dataType: 'json',
	// 		data: {song_name : song_name},
	// 		success: function(result){
	// 			var sum = result.length;
	// 			console.log(sum);
	// 			var sotrang = Math.ceil(sum/4);
	// 			var template = '';
	// 			var pagination ='';

	// 					if (sotrang == 1) { // chỉ có một trang k có phân trang
	// 						for (var i = 0; i < result.length; i++) {
	// 							template +="<tr>"
	// 							+"<td class='sid' hidden='true'>"+result[i]['SID']+"</td>"
	// 							+"<td class='ten_bai_hat'>"+result[i]['song_name']+"</td>"
	// 							+"<td class='ten_ca_si'>"+result[i]['singer']+"</td>"
	// 							+"<td class='ten_nhac_si' hidden='true'>"+result[i]['artist']+"</td>"
	// 							+"<td class='the_loai'>"+result[i]['type']+"</td>"
	// 							+"<td class='hinh_anh'><img src='http://localhost:81/MusicWeb/vendor/Image/"+result[i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
	// 							+"<td class='audio'>"
	// 							+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+result[i]['URL']+"' loop controls controlslist='nodownload'></audio>"
	// 							+"</td>"
	// 							+"<td class='loi_bai_hat' hidden='true'>"+result[i]['lyric']+"</td>"
	// 							+"<td colspan='3' class='chuc_nang'>"
	// 							+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'>Chỉnh sửa <i class='fa fa-pencil' aria-hidden='true'></i></div>"
	// 							+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'>Chi tiết <i class='fa fa-info' aria-hidden='true'></i></div>"
	// 							+"<a class='btn btn-outline-danger xoa' href='http://localhost:81/MusicWeb/index.php/Admin_quanlykhonhac/XoaBaiHat/"+result[i]['SID']+"'>Xóa <i class='fa fa-times' aria-hidden='true'></i></a>"
	// 							+"</td>"
	// 							+"</tr>";

	// 						}
	// 						$('ul.pagination').html('');

	// 					}
	// 					else{
	// 						for (var i = 0; i < 4; i++) {
	// 							template +="<tr>"
	// 							+"<td class='sid' hidden='true'>"+result[i]['SID']+"</td>"
	// 							+"<td class='ten_bai_hat'>"+result[i]['song_name']+"</td>"
	// 							+"<td class='ten_ca_si'>"+result[i]['singer']+"</td>"
	// 							+"<td class='ten_nhac_si' hidden='true'>"+result[i]['artist']+"</td>"
	// 							+"<td class='the_loai'>"+result[i]['type']+"</td>"
	// 							+"<td class='hinh_anh'><img src='http://localhost:81/MusicWeb/vendor/Image/"+result[i]['URL_IMG']+"' class='hinh_anh_bai_hat'></td>"
	// 							+"<td class='audio'>"
	// 							+"<audio src='http://localhost:81/MusicWeb/vendor/Music/"+result[i]['URL']+"' loop controls controlslist='nodownload'></audio>"
	// 							+"</td>"
	// 							+"<td class='loi_bai_hat' hidden='true'>"+result[i]['lyric']+"</td>"
	// 							+"<td colspan='3' class='chuc_nang'>"
	// 							+"<div class='btn btn-outline-primary chinh_sua' data-toggle='modal' data-target='#modalChinhSua'>Chỉnh sửa <i class='fa fa-pencil' aria-hidden='true'></i></div>"
	// 							+"<div class='btn btn-outline-success chi_tiet' data-toggle='modal' data-target='#modalChiTiet'>Chi tiết <i class='fa fa-info' aria-hidden='true'></i></div>"
	// 							+"<a class='btn btn-outline-danger xoa' href='http://localhost:81/MusicWeb/index.php/Admin_quanlykhonhac/XoaBaiHat/"+result[i]['SID']+"'>Xóa <i class='fa fa-times' aria-hidden='true'></i></a>"
	// 							+"</td>"
	// 							+"</tr>";
	// 						}

	// 						for (var i = 0; i < sotrang; i++) {
	// 							pagination+="<li class='page-item pag-tk' data-input='"+song_name+"' data-page='"+(i+1)+"'><a class='page-link' href=''>"+(i+1)+"</a></li>";
	// 						}
	// 						$('ul.pagination').html(pagination);
	// 						$('.pag-tk:first').addClass('active');
	// 					}

	// 					$('tbody').html(template);

	// 					// console.log(template);

	// 					// for (var i = 0; i < result.length; i++) {
	// 					// 	result[i]
	// 					// }

	// 				}
	// 			})
	// });

	$(document).on('click', '.pag-tk', function(event) {
		event.preventDefault();
		$('.pag-tk').removeClass('active');
		$(this).addClass('active');

		var song_name = $(this)[0]['attributes']['data-input'].value;
		var trangso = $(this)[0]['attributes']['data-page'].value;


		$.ajax({
			url: 'http://localhost:81/MusicWeb/index.php/Admin_quanlykhonhac/TimKiem',
			type: 'POST',
			dataType: 'json',
			data: {song_name : song_name},
			success: function(result){
				var sum = Number(result.length);
				console.log(Number(trangso));
				var batdau = (trangso -1) * 4;
				var ketthuc = batdau + 4;
				console.log("BD:"+batdau);
				console.log("KT:"+ketthuc);
				var template = '';
				if(ketthuc > sum){
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
						+"<a class='btn btn-outline-danger xoa' href='http://localhost:81/MusicWeb/index.php/Admin_quanlykhonhac/XoaBaiHat/"+result[i]['SID']+"'>Xóa <i class='fa fa-times' aria-hidden='true'></i></a>"
						+"</td>"
						+"</tr>";
					}

					$('tbody').html(template);
				}
				else{
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
						+"<a class='btn btn-outline-danger xoa' href='http://localhost:81/MusicWeb/index.php/Admin_quanlykhonhac/XoaBaiHat/"+result[i]['SID']+"'>Xóa <i class='fa fa-times' aria-hidden='true'></i></a>"
						+"</td>"
						+"</tr>";
					}
					$('tbody').html(template);
				}
			}
		})




	});

});