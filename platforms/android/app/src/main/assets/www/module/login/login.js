app.controller('login', function ($scope, $http, $location, $cookieStore, model, loading, $rootScope) {

    
   // alert();
    if ($cookieStore.get('userinfo')) {

        $location.path('/dashboard/home')
    }

    //create table at local database to store the data of users information at time of login
    db.transaction(function (tx) {
        tx.executeSql('CREATE TABLE IF NOT EXISTS userinfo (id INTEGER PRIMARY KEY AUTOINCREMENT, uid, phone_no, email_address, country_id, date_added)');

    });

   /*  if ($cookieStore.get('userinfo')) {
        $location.path('/dashboard/home');
    } */

   // 
    loading.deactive();


    $scope.SentToforgot = function () {
        $location.path('/forgot');
    }

    $scope.signup = function () {
        $location.path('/register');
    }

    // $scope.mobile_no = '8299334781';
    $scope.phoneVerifiedStatus = false;
    $scope.loginuser = function (form) {
        
        if ($scope[form].$error) {
            //  alert("Error");
            var error_str = '';
            if ($scope[form].mobileno.$error.required !== undefined || $scope[form].mobileno.$error.number) {
                error_str += "Mobile Number, ";
            }
            if ($scope[form].userpassword.$error.required !== undefined) {
                error_str += "Password";
            }

            if (error_str !== '') {
                error_str = "<span style='font-weight:700;'> Following field must have valid information:</span><br/>" + error_str;
               alert(error_str);
                // model.show('Alert', error_str);
            }
        };
        if ($scope[form].$valid) {

            if (jQuery.isEmptyObject($scope.userpassword)) {
                error_str += "Password";
                error_str = "<span style='font-weight:700;'> Following field must have valid information:</span><br/>" + error_str;
                model.show('Alert', error_str);
                // alert(error_str)
                return false;
            }

            loading.active();

            var args = $.param({
                login_mobile_number: $scope.mobileno,
                login_password: $scope.userpassword,
                language_code:country
            });

            $http({
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                method: 'POST',
                url: app_url + '/delivery_boy/login',
                data: args //forms user object

            }).then(function (response) {
               
                console.log(response);
                
                if (response.data.responseStatus == 'success') {
                    db.transaction(function (tx) {
                        tx.executeSql('INSERT INTO userinfo ( uid, phone_no, email_address, country_id, date_added) VALUES ("' + response.data.data.id + '","' + response.data.data.mobile_number + '","' + response.data.data.email + '","' + response.data.data.country_id + '","' + response.data.data.created_date + '")');
                    });
                    var fname = response.data.data.first_name;
                    var lname = response.data.data.last_name;

                    var fullName = fname+" "+lname;
                    console.log("*******************");
                    console.log(response.data.data);
                    var userinfo = {
                        'uid': response.data.data.id,
                        'phone_no': response.data.data.mobile_number,
                        'email_address': response.data.data.email,
                        'country_id': response.data.data.country_id,
                        'fullName' : fullName,
                        'user_type' : response.data.data.user_type,
                        'address' : response.data.data.address,
                        'profile_image' : response.data.data.profile_image,
                        'from'    : 'login',
                        'left_data':response.data.data  
                    }
                    console.log(userinfo)
                    $cookieStore.put('userinfo', userinfo);
                   // alert(userinfo)
                    //$scope.default_hit();
                   $location.path('/dashboard/home');

                } else {

                    if(response.data.responseMessage == 'Your account is not verified please Verify OTP !'){
                        var setOTPCookies = {
                            'mobile_number': $scope.mobileno,
                            'from' : 'login'
                    }
                        $cookieStore.put('otpverification', setOTPCookies);
                        alert('Please Varify OTP');
                        $location.path('/otp');
                        return false;
                    }else if(response.data.responseMessage == 'Invalid login credentials'){
                        
                        alert('Mobile No. is Invalid');
                    
                    }else if(response.data.responseMessage =='Password does not match !'){
                        
                        alert('Password is Invalid');
                    
                    }else{

                        alert('Invalid Login Credentials');
                    }
                    //model.show('Alert', response.data.responseMessage);
                }

            }).finally(function () {
                loading.deactive();
            });

        }
    };

/*     $scope.default_hit = function() {
        var args = $.param({
           
        });
        
        $http({
            headers: {
                //'token': '40d3dfd36e217abcade403b73789d732',
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            method: 'POST',
            url: app_url + '/default_lang_country',
            data: args 

        }).then(function (response) {

            res = response;

           console.log(res.data.data.default_language_country);

           if(res.data.data.status == 'success'){
            sessionStorage.country = res.data.data.default_language_country.default_country_id;
            sessionStorage.country_name = res.data.data.default_language_country.COUNTRY_NAME;
                sessionStorage.lang = res.data.data.default_language_country.default_language;
                sessionStorage.lang_code = res.data.data.default_language_country.language_code;
                sessionStorage.currency = res.data.data.default_language_country.currency;
               console.log("-----aaa-------"); 
               console.log(sessionStorage) 
               $translate.use(sessionStorage.lang_code);
               $location.path('/dashboard/home');
           }else{

           }

        })
    } */

});