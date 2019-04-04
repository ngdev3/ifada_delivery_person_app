app.controller('map', function (NgMap, $scope, $http, $location, $cookieStore, $timeout, loading, model, $rootScope) {


	if (!$cookieStore.get('userinfo')) {
        $location.path('/login');
        return false;
    }
	if (!$cookieStore.get('locationpoints')) {
        $location.path('/login');
        return false;
    }

  //  var GlobalUID = $cookieStore.get('userinfo').uid; //Global Uid for get the response by sending the http request.

    
    //loading.deactive();

    $scope.home = function () {
        //$location.path('/home');
        window.history.back();
	}
	

	$scope.lat = $cookieStore.get('locationpoints').lat;
    $scope.lng = $cookieStore.get('locationpoints').lng;

    //28.627997399999998, 77.435687
    NgMap.getMap().then(function (map) {
        var latlng = new google.maps.LatLng($scope.lat, $scope.lng);
        map.setCenter(latlng);
        map.setZoom(5);
	});
	

		});