$(document).ready(function() {
	
	$(document).on('click','.page-link',function(e) {

		e.preventDefault();
		var link = $(this).text();
		console.log(link);

		$.ajax({
			url: 'http://localhost:81/MusicWeb/Admin/page/' + link,
			type:'POST',
			dataType: 'json',
			success: function(result){
				
				var template = '';
				var pagination = '';

				for(var i = 0; i < result['dulieunguoidung'].length; i++) {
					template += "<tr>"
					+ "<td>" + result['dulieunguoidung'][i]['username'] + "</td>"
					+ "<td>" + result['dulieunguoidung'][i]['fullname'] + "</td>"
					+ "<td>" + result['dulieunguoidung'][i]['sex'] + "</td>"
					+ "<td>" + "<div class='nut' style='height: 20px;'>"
					+ "<a href='http://localhost:81/MusicWeb/Admin/xoaUser/" + result['dulieunguoidung'][i]['AID'] 
					+ "' class='btn btn-default delete'>Xóa <i class='fas fa-times'></i></a>"
					+ "</div>" + "</td>" + "</tr>";
				}

				for(var i = 0; i < result['sotrang']; i++) {
					if(i + 1 == link) {
						pagination += "<li class='page-item active page-download'><a class='page-link'>" + (i + 1)
						+ "</a></li>";
					} else {
						pagination += "<li class='page-item page-download'><a class='page-link'>" + (i + 1)
						+ "</a></li>";
					}
				}

				$('tbody').html(template);
				$('ul.pagination').html(pagination);
			}
		})
	});
	
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