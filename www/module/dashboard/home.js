app.controller('home', function ($scope, $http, $location, $cookieStore, $timeout, loading, model, $rootScope, $route) {
    
    //$cookieStore.put('userinfo','userinfo')
    alert('Hiii')
    loading.active();
    if (!$cookieStore.get('userinfo')) {
        $scope.loggedin = false;
       
    }

    if ($cookieStore.get('userinfo')) {
        $scope.loggedin = true;
        
    }
    
    
    
    $scope.login = function(){
        $location.path('/login');
    }

  

    $scope.home = function () {
        //$location.path('dashboard/home')
        $route.reload()
    }
   

   

    $scope.signout = function () {
        $rootScope.DeleteData();
        $cookieStore.remove("userinfo");
        $cookieStore.remove("storeinfo");
        $location.path('/login');
    }
	
	
	

/* Function For Hot Deals */

    


   
    $scope.myorder = function(){
        $location.path('/order/myorder');
    }
   
    $scope.profile = function(){
        $location.path('/myaccount/profile');
    }
   
   
    $scope.change_password = function(){
        $location.path('/changepassword');
    }
   
    $scope.my_address = function(){
        $location.path('/address');
    }
    $scope.logout = function(){
        $cookieStore.remove('userinfo');
        $cookieStore.remove('aid');
        $cookieStore.remove('cart');
        $cookieStore.remove('orderID');
        $cookieStore.remove('orderinfo');
        $cookieStore.remove('productinfo');
        $cookieStore.remove('search');
        $cookieStore.remove('subcategoryInfo');
        $cookieStore.remove('ticketid');
        $cookieStore.remove('FullName');
        $location.path('/login');
    }


    if($cookieStore.get("FullName")){
        $scope.fullName = $cookieStore.get("FullName").fullName;  
        if($cookieStore.get("userinfo").profile_image == ''){
            $scope.profileImage = '';
            console.log($scope.profileImage)
        }else{

            $scope.profileImage = profile_image_path +$cookieStore.get("userinfo").profile_image; 
        }
    }else{  
        if($cookieStore.get("userinfo")){
            $scope.fullName = $cookieStore.get("userinfo").fullName; 
            if($cookieStore.get("userinfo").profile_image == ''){
                $scope.profileImage = '';
                console.log($scope.profileImage)
            }else{

                $scope.profileImage = profile_image_path +$cookieStore.get("userinfo").profile_image; 
            }
        }      
    }
	
	//datepicker
	
		$scope.monthSelectorOptions = {
            start: "year",
            depth: "year"
          };
          $scope.getType = function(x) {
            return typeof x;
          };
          $scope.isDate = function(x) {
            return x instanceof Date;
          };
 	//datepicker
	
	
    $scope.fetcCounts = function(){
       // alert()
       console.log($cookieStore.get('userinfo'))
      // return
        loading.active();
        //store cookie if check box for remember me is checked and codition goes true only otherwise none
        var args = $.param({
            
            'user_id'   :   $cookieStore.get('userinfo').uid,
            'user_type'   :   $cookieStore.get('userinfo').left_data.user_type,
            'language_code'   :   'en',
            'from_date'   :   '2018-11-10',
            'to_date'   :   '2018-12-17',

            
        });
        console.log(args);
        $http({
            headers: {
                //'token': '40d3dfd36e217abcade403b73789d732',
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            method: 'POST',
            url: app_url + '/delivery_boy/home_page',
            data: args //forms user object

        }).then(function (response) {
            loading.deactive();
            res = response;
            console.log(res.data.data);
            if (res.data.responseCode == '200') {
                //put cookie and redirect it    
                $scope.listing = res.data.data;
               // console.log($scope.listing);
                angular.forEach(res.data.data.movie_list, function (value, key) {
                            $scope.movies_list.push(value);
                        });

            } else {

                //Throw error if not logged in
                model.show('Alert', res.data.responseMessage);

            }


        });
    }

});


