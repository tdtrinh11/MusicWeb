var app = angular.module('myApp',['ngMaterial']);
angular.module("myApp").directive("selectNgFiles", function() {
	return {
		require: "ngModel",
		link: function postLink(scope,elem,attrs,ngModel) {
			elem.on("change", function(e) {
				ngModel.$setViewValue(elem[0].files['0']['name']);
			})
		}
	}
});

angular.module('myApp').directive('ngEditor', function() {
	return {
		require: '?ngModel',
		link: function(scope, elm, attr, ngModel) {
			var ck = CKEDITOR.replace(elm[0]);
			CKEDITOR.config.entities_latin = false;
			CKEDITOR.config.entities = false;
			CKEDITOR.config.enterMode = 2;

			CKEDITOR.config.removePlugins = 'htmlwriter';
			CKEDITOR.config.htmlEncodeOutput = true;
			if (!ngModel) return;

			ck.on('pasteState', function() {
				scope.$apply(function() {
					ngModel.$setViewValue(ck.getData());
				});
			});

			ngModel.$render = function(value) {
				ck.setData(ngModel.$viewValue);
			};
		}
	};
});


app.controller('MyController',  function($scope,$http,$mdToast,$log){

	$scope.getSrc = function (audio) {
		return 'http://localhost:81/MusicWeb/vendor/Music/' + audio;
	};
	$scope.getSrcImg = function (img) {
		return 'http://localhost:81/MusicWeb/vendor/Image_News/' + img;
	};

	$http.get("http://localhost:81/MusicWeb/Admin_quanlysukien/laydulieu")
	.then(function(res) {
		$scope.news = res.data;
	});

	$scope.thaydoichedo = function(one_new) {
		one_new.hienthi = !one_new.hienthi;
	}

	$scope.quaytrolaibandau = function() {

		$http.get("http://localhost:81/MusicWeb/Admin_quanlysukien/laydulieu")
		.then(function(res) {
			$scope.news = res.data;
		});
	}

	$scope.laytoanbodulieu = function() {
		$http.get("http://localhost:81/MusicWeb/Admin_quanlysukien/laydulieu")
		.then(function(res) {
			$scope.news = res.data;
		});
	}

	$scope.luudulieu = function(one_new) {
		one_new.hienthi = !one_new.hienthi;

		var data = $.param({
			NID: one_new.NID,
			title : one_new.title,
			audio : one_new.audio,
			image : one_new.image,
			description : one_new.description
		});
		var config = {
			headers : {
				'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
			}
		}
		$http.post('http://localhost:81/MusicWeb/Admin_quanlysukien/CapNhatNews', data, config).then(function(res){
			if(res.data == 'thanhcong'){
				$scope.showSimpleToast('Cập nhật thành công !!!');
			}
			else{
				$scope.showSimpleToast('Thất bại !');
			}

		}, function(res){
		});
	}


	$scope.xoadulieu =function(one_new) {
		$http({

			method: 'DELETE',
			url: 'http://localhost:81/MusicWeb/Admin_quanlysukien/XoaNews/' + one_new.NID

		}).then(function successCallback(response) {

      var index = $scope.news.indexOf(one_new);
      $scope.news.splice(index, 1);
      $scope.showSimpleToast('Xóa thành công !');

  }, function errorCallback(response) {

  	alert("Error. while deleting user Try Again!");

  });
	}
	$scope.openModal = function(){
		var modal_popup = angular.element('#modalThem');
		modal_popup.modal('show');
	};

	$scope.closeModal = function(){
		var modal_popup = angular.element('#modalThem');
		modal_popup.modal('hide');
	};

	

	$scope.addData = function(){
		$scope.openModal();
	};

	$scope.createNews = function() {

    var data = $.param({
    	title : $scope.title,
    	audio : $scope.audio,
    	description : $scope.description,
    	image : $scope.image
    });
    var config = {
    	headers : {
    		'content-type':'application/x-www-form-urlencoded;charset=UTF-8'
    	}
    }
    $http.post('http://localhost:81/MusicWeb/Admin_quanlysukien/ThemSuKien', data, config).then(function(res){
    	if(res.data == 'thanhcong'){
    		$scope.closeModal();
    		$scope.laytoanbodulieu();
    		$scope.showSimpleToast('Thêm thành công !');
    		$scope.title ='';
    		$scope.audio ='';
    		$scope.description ='';
    		$scope.image ='';

    	}
    	else{
    		$scope.showSimpleToast('Thất bại !');
    	}

    }, function(res){
    });
}




var last = {
	bottom: true,
	top: false,
	left: false,
	right: true
};

$scope.toastPosition = angular.extend({}, last);

$scope.getToastPosition = function() {
	sanitizePosition();

	return Object.keys($scope.toastPosition)
	.filter(function(pos) {
		return $scope.toastPosition[pos];
	}).join(' ');
};

function sanitizePosition() {
	var current = $scope.toastPosition;

	if (current.bottom && last.top) {
		current.top = false;
	}
	if (current.top && last.bottom) {
		current.bottom = false;
	}
	if (current.right && last.left) {
		current.left = false;
	}
	if (current.left && last.right) {
		current.right = false;
	}

	last = angular.extend({}, current);
}

$scope.showSimpleToast = function(text) {
	var pinTo = $scope.getToastPosition();

	$mdToast.show(
		$mdToast.simple()
		.textContent(text)
		.position(pinTo)
		.hideDelay(3000))
	.then(function() {
		$log.log('Toast dismissed.');
	}).catch(function() {
		$log.log('Toast failed or was forced to close early by another toast.');
	});
};

})
