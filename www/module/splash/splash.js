app.controller('splash', function ($translate, $scope, $http, $location, $interval, $cookieStore, loading, $rootScope, $cordovaFile) {


   


    $scope.redirect = function () {
        if (!$cookieStore.get('userinfo')) {
            $location.path('/login');
            
        }else{
            $location.path('/dashboard/home');
            
        }
        
    }

    setTimeout(function () {
        $scope.redirect();
    }, 100)

  

});