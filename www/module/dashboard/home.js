app.controller('home', function ($scope, $filter, $http, $location, $cookieStore, $timeout, loading, model, $rootScope, $route) {
    
    //$cookieStore.put('userinfo','userinfo')
    
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

    $scope.language = function(){
        $location.path('/language');
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
            console.log($scope.profileImage)
        }
    }else{  
        if($cookieStore.get("userinfo")){
            $scope.fullName = $cookieStore.get("userinfo").fullName; 
            if($cookieStore.get("userinfo").profile_image == ''){
                $scope.profileImage = '';
                console.log($scope.profileImage)
            }else{

                $scope.profileImage = profile_image_path +$cookieStore.get("userinfo").profile_image; 
                console.log($scope.profileImage)
            }
        }      
    }

 
    $scope.fetcCounts = function(){
       // alert()
       console.log($cookieStore.get('userinfo'))
      // return
      //  loading.active();
        //store cookie if check box for remember me is checked and codition goes true only otherwise none
        var args = $.param({
            
            'user_id'   :   $cookieStore.get('userinfo').uid,
            'user_type'   :   $cookieStore.get('userinfo').left_data.user_type,
            'language_code'   :   'en',
            'from_date'   :   $scope.fromDateString,
            'to_date'   :   $scope.toDateString,

            
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
        //    loading.deactive();
            res = response;
            console.log(res.data.data);
            if (res.data.responseCode == '200') {
                //put cookie and redirect it    
                $scope.listing = res.data.data;
              
            } else {

                //Throw error if not logged in
                model.show('Alert', res.data.responseMessage);

            }


        });
    }

    
    var date = new Date();
    $scope.fromDateString = $filter('date')(date, 'yyyy-MM-dd')
    $scope.fromDateObject = null;
    $scope.toDateString = $filter('date')(date, 'yyyy-MM-dd')
    $scope.toDateObject = null;
    $scope.maxDate = new Date();
    $scope.minDate = new Date(2000, 0, 1, 0, 0, 0);
    $scope.fromDateChanged = function(){
      $scope.minDate = new Date($scope.fromDateString);
      console.log("min changed " + $scope.fromDateString);
      $scope.fetcCounts()
    };
    $scope.toDateChanged = function(){
      $scope.maxDate = new Date($scope.toDateString);
      console.log("min changed " + $scope.toDateString);
      $scope.fetcCounts();
    };
    $scope.clear = function(){
      $scope.fromDateString = '';
      $scope.toDateString = '';
      $scope.fromDateObject = null;
      $scope.toDateObject = null;
      $scope.maxDate = new Date();
      $scope.minDate = new Date(2000, 0, 1, 0, 0, 0);
    }


/* Function For Hot Deals */

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


});


