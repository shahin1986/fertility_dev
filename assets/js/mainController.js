var baseUrl = 'http://localhost:8888/dev/';
app.controller('searchBasedZipCode', ['$scope', function($scope, $http){
//	$http.get(baseUrl+'Main/getClinicsInfo').then(function(response){
//		
//	});
	$scope.search = function(){
		console.log("hello");
		window.location.href='http://localhost:8888/dev/Clinics';
		};
}]);