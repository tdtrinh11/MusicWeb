$(document).ready(function() {

	$(document).on('click','.page-listen', function(e){
		var link = $(this).text();
		console.log(link);

		$.ajax({
			url: "http://localhost:81/MusicWeb/Admin/pageListen/" + link,
			type: 'POST',
			dataType: 'json',
			success: function(result) {
				console.log(result);

				var template = '';
				var pagination = '';

				if(result['sotrang'] > 1) {
					for(var i = 0; i < result['listen'].length; i++){
						template += "<tr>"
							+ "<td>" + ((link - 1)*5 + 1 + i) + "</td>"
							+ "<td>" + result['listen'][i]['song_name'] + "</td>"
							+ "<td>" + result['listen'][i]['singer'] + "</td>" 
							+ "<td>" + result['listen'][i]['type'] + "</td>"
							+ "<td class='hinhanh'><img src='" + result['listen'][i]['URL_IMG'] + "' width='30px' height='30px' alt=''></td>"
							+ "<td>" + result['listen'][i]['URL'] + "</td>" 
							+ "<td>" + result['listen'][i]['hear_number'] + "</td>" 
							+ "</tr>";
					}
					for(var i = 0; i < result['sotrang']; i++) {
						if( i == (link - 1)) {
							pagination += "<li class='page-item active'><a class='page-link page-listen' href='#'>"
							+ (i + 1) + "</a></li>";
						} else {
							pagination += "<li class='page-item'><a class='page-link page-listen' href='#'>"
							+ (i + 1) + "</a></li>"
						}
					}
					$('ul.pagination:first').html(pagination);
					$('tbody:first').html(template);
				}
			}
		})
		
	});

	$(document).on('click','.page-download', function(e){
		var link = $(this).text();
		console.log(link);

		$.ajax({
			url: "http://localhost:81/MusicWeb/Admin/pageDownload/" + link,
			type: 'POST',
			dataType: 'json',
			success: function(result) {
				console.log(result);

				var template = '';
				var pagination = '';

				if(result['sotrang'] > 1) {
					for(var i = 0; i < result['download'].length; i++){
						template += "<tr>"
							+ "<td>" + ((link - 1)*5 + 1 + i) + "</td>"
							+ "<td>" + result['download'][i]['song_name'] + "</td>"
							+ "<td>" + result['download'][i]['singer'] + "</td>" 
							+ "<td>" + result['download'][i]['type'] + "</td>"
							+ "<td class='hinhanh'><img src='" + result['download'][i]['URL_IMG'] + "' width='30px' height='30px' alt=''></td>"
							+ "<td>" + result['download'][i]['URL'] + "</td>" 
							+ "<td>" + result['download'][i]['download_number'] + "</td>" 
							+ "</tr>";
					}
					for(var i = 0; i < result['sotrang']; i++) {
						if( i == (link - 1)) {
							pagination += "<li class='page-item active'><a class='page-link page-download' href='#'>"
							+ (i + 1) + "</a></li>";
						} else {
							pagination += "<li class='page-item'><a class='page-link page-download' href='#'>"
							+ (i + 1) + "</a></li>"
						}
					}
					$('ul.pagination:last').html(pagination);
					$('tbody:last').html(template);
				}
			}
		})
		
	});

	$(document).on('keyup','#search-key', function(e){
		var key = $(this).val();
		console.log(key);

		$.ajax({
			url: 'http://localhost:81/MusicWeb/Admin/timKiem',
			type: 'GET',
			dataType: 'json',
			data: {key: key},
			success: function(result)
			{
				console.log(result);
				var sum = result.length;
				console.log(sum);

				var sotrang = Math.ceil(sum/5);
				var template = '';
				var pagination ='';

				if(key !='') {
					if(sum !=0) {
						for(var i = 0; i < result.length; i++) {
							template += "<tr>"
							+ "<td>" + result[i]['SID'] + "</td>"
							+ "<td>" + result[i]['song_name'] + "</td>"
							+ "<td>" + result[i]['singer'] + "</td>" 
							+ "<td>" + result[i]['type'] + "</td>"
							+ "<td class='hinhanh'><img src='" + result[i]['URL_IMG'] + "' width='30px' height='30px' alt=''></td>"
							+ "<td>" + result[i]['URL'] + "</td>" 
							+ "<td>" + result[i]['hear_number'] + "</td>" 
							+ "</tr>";
						}
						$('ul.pagination:first').html('');
						$('tbody:first').html(template);
					}
				} else {
					window.location = "http://localhost:81/MusicWeb/Admin/thongKe"; 
				}
			}
		})
	});

	$(document).on('keyup','#search-key1', function(e){
		var key = $(this).val();
		console.log(key);

		$.ajax({
			url: 'http://localhost:81/MusicWeb/Admin/timKiemDownload',
			type: 'GET',
			dataType: 'json',
			data: {key: key},
			success: function(result)
			{
				console.log(result);
				var sum = result.length;
				console.log(sum);

				var sotrang = Math.ceil(sum/5);
				var template = '';
				var pagination ='';

				if(key !='') {
					if(sum !=0) {
						for(var i = 0; i < result.length; i++) {
							template += "<tr>"
							+ "<td>" + result[i]['SID'] + "</td>"
							+ "<td>" + result[i]['song_name'] + "</td>"
							+ "<td>" + result[i]['singer'] + "</td>" 
							+ "<td>" + result[i]['type'] + "</td>"
							+ "<td class='hinhanh'><img src='" + result[i]['URL_IMG'] + "' width='30px' height='30px' alt=''></td>"
							+ "<td>" + result[i]['URL'] + "</td>" 
							+ "<td>" + result[i]['download_number'] + "</td>" 
							+ "</tr>";
						}
						$('ul.pagination:last').html('');
						$('tbody:last').html(template);
					}
				} else {
					redirect();
				}
			}
		})
	});

	function redirect(){
		window.location = "http://localhost:81/MusicWeb/Admin/thongKe";
		$('a.nav-link:first').removeClass('active');
		$('a.nav-link:last').addClass('active');
		$('#home').removeClass('active');
		$('#menu1').addClass('active');
		$('#menu1').addClass('show');
	};
	
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