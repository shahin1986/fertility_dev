var baseUrl = 'http://fertilitycounselors.org/dev/';
app.controller('homeSearchBasedZipCode', function($scope, $http){
//	$http.get(baseUrl+'Main/getClinicsInfo').then(function(response){
//		
//	});
//var zipCode = $("#zipCodeSearch").val();
	$scope.search = function(){
		var zipCode = $("#zipCodeSearch").val();
			window.location.href='http://fertilitycounselors.org/dev/Clinics/searchResult?zipCode='+zipCode;		
	};
});

app.controller('searchResultZipCode', function($scope, $http){
	var zipcode = $.urlParam('zipCode');
	$http.get("http://maps.googleapis.com/maps/api/geocode/json?address="+zipcode+"&sensor=true").then(function(result){
		$scope.latZipcode = result.data.results[0].geometry.location.lat;
		$scope.lngZipcode = $scope.result = result.data.results[0].geometry.location.lng;
		
		$http.get("http://fertilitycounselors.org/dev/Clinics/getClinicsCoordinateFromDB").then(function(result){
			console.log(result.data.records);
		});
		
	});
	
	
	function getLatAndLng(zipcode){
		var obj = {};
		$http.get("http://maps.googleapis.com/maps/api/geocode/json?address="+zipcode+"&sensor=true").then(function(result){
			obj.lat = result.data.results[0].geometry.location.lat;
			obj.lng = result.data.results[0].geometry.location.lng;
			return obj;
		});
	};
	
});

$.urlParam = function(name){
	var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
	return results[1] || 0;
}

app.controller('displayDoctors', function($scope,$http){
	$http.get(baseUrl+"Doctors/getDoctorsListFromDB").then(function(result){
		//console.log(result.data);
		$scope.data = result.data;
		
	});
});

//app.controller('displayDoctorProfile', function($scope, $http){
////	var id = $.urlParam('id');
//	var id = 3;
//	$http.get(baseUrl+"Doctors/getDoctorProfileFromDB/id/"+id).then(function(result){
//		console.log(result.data);
//		$scope.data = result.data;
//	});
//});

app.controller('displayClinics', function($scope,$http){
	$http.get(baseUrl+"Clinics/getClinicsListFromDB").then(function(result){
		console.log(result.data);
		$scope.data = result.data;
		
	});
});
