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

  
    // $('#notclick').on('click',function(){
    //     $('#notclick').attr("readonly", true);
    // })   

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
                $rootScope.currency = res.data.data.country_currency.currency;
              
            } else {

                //Throw error if not logged in
                model.show('Alert', res.data.responseMessage);

            }


        });
    }

    
    var date = new Date();
    $scope.fromDateString = $filter('date')(date, 'dd-MM-yyyy')
    $scope.fromDateObject = null;
    $scope.toDateString = $filter('date')(date, 'dd-MM-yyyy')
    $scope.todaydate = $filter('date')(date, 'dd-MM-yyyy')
    $scope.toDateObject = null;
    $scope.maxDate = new Date();
    $scope.minDate = new Date(2000, 0, 1, 0, 0, 0);
    $scope.fromDateChanged = function(){
        if(Date.parse($scope.toDateString) < Date.parse($scope.fromDateString)){
            //$scope.fromDateString = $scope.toDateString;
            alert("Invalid Date Range");
            console.log($scope.fromDateString);
         } 
      $scope.minDate =  $filter('date')(new Date($scope.fromDateString), 'MM-dd-yyyy');
      console.log("min changed " + $scope.minDate);
      $scope.fetcCounts()
    };
    $scope.toDateChanged = function(){
         if(Date.parse($scope.toDateString) < Date.parse($scope.fromDateString)){
            //$scope.toDateString = $scope.fromDateString;
            alert("Invalid Date Range");
            console.log($scope.toDateString);
         } 
      $scope.maxDate =  $filter('date')(new Date($scope.toDateString), 'MM-dd-yyyy');
      console.log("max changed " + $scope.maxDate);
      $scope.fetcCounts();
    };
    /* $scope.clear = function(){
      $scope.fromDateString = '';
      $scope.toDateString = '';
      $scope.fromDateObject = null;
      $scope.toDateObject = null;
      $scope.maxDate = new Date();
      $scope.minDate = new Date(2000, 0, 1, 0, 0, 0);
    } */


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

     $scope.getorders = function(status){

        var orderData = {
            status:status
        }
        $cookieStore.put('orderstatus', orderData);
        $location.path('/order/myorder');

     }

});


