app.controller('update_order', function ($filter, $scope, $http, $location, $cookieStore, model, loading, $rootScope, $cordovaFileTransfer) {



    if (!$cookieStore.get('userinfo')) {
        $location.path('/login');
        return false;
    }
    $scope.home = function () {
        //$location.path('/home');
        $('.modal-backdrop.in').css('opacity','')
        window.history.back();
    }

   /*  if($rootScope.detail_status <= 4){
        console.log('aaaaaaaaaa')
         $("#radio_5").attr("disabled", true); 
         $('#radio_8').attr("disabled", true); 
         $('#radio_9').attr("disabled", true); 
     }else{
        console.log('bbbbbbbb')
        $('#radio_5').attr('disabled', false);
        $('#radio_8').attr('disabled', false);
        $('#radio_9').attr('disabled', false);
     } */

    var date = new Date();
    $scope.dateString = $filter('date')(date, 'yyyy-MM-dd')

    $scope.orderinfo = $cookieStore.get('orderinfo');
    /**
     * Created By Sajal Goyal
     * Dated on 17/10/2018
     * Start of Function
     * function name : orderAgain
     * work on clicking on Order Again and work using reorder API
     */

    $scope.check_conditions = function () {
        //console.log('1')
        if ($("input[name='radio']:checked").val() == '8') {
            $scope.Reschedule = '1';
            $("#myModal").modal("show");

            document.addEventListener("backbutton", function (e) {
                $("#myModal").modal("hide");
                return false;
            }, false );
            
        } else {
            $scope.Reschedule = '';
            $("#myModal").modal("hide");
        }

        if ($("input[name='radio']:checked").val() == '5') {
            $scope.delivered = '1';
        }else{
            $scope.delivered = '';
        }

        if ($("input[name='radio']:checked").val() != '9') {

            $('#hno').removeAttr('required');
        } else if ($("input[name='radio']:checked").val() == '9') {
            $('#hno').attr('required', true);
        }

    }

    
    $scope.schedule = function(myform){
        //console.log(myform)
        console.log($scope.dateString)
        //console.log($scope.scheduletime)

    }

    $scope.getType = function(x) {
        return typeof x;
    };
    $scope.isDate = function(x) {
        return x instanceof Date;
    };

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

    $scope.form = {};
    $scope.update_status = function (form) {
       
        if ($("input[name='radio']:checked").val() == '8') {
        if($scope.dateString == undefined || $scope.dateString == ''){
            alert('Please Provide Date');
            return;
        }
     }else{
        $scope.dateString = ''
     }

     if($rootScope.detail_status < 4 && $scope.form.radio >4){
        alert('Status should Out for delivery first');
        return false;
     }
        var error_str = '';
        console.log($scope.form.radio)
        if ($scope.form.radio == undefined || $scope.form.radio == '')
        {
            error_str = "Order Status";
            console.log(error_str)
        }else{
            error_str = "";
        }
        if ($("input[name='radio']:checked").val() == '9') {
          
            if ($scope.comment == undefined || $scope.comment == '') {
            
                error_str += "Comment";
               
            }
           
        }
        if (error_str !== '')
        {
            
            error_str = " <span style='font-weight:700;'>Following fields must have valid information:</span> <br/> " + error_str;
            // model.show('Alert', error_str);
            alert(error_str);
            return;
        }
     if($rootScope.detail.status == $scope.form.radio){
         alert('Already Updated you can not select this status');
         return;
     }
        console.log(error_str);
        loading.active();

        var args = $.param({
            'user_id': $cookieStore.get('userinfo').uid,
            'order_id': $rootScope.detail.order_id,
            'm_order_id': $rootScope.detail.id,
            'order_status': $scope.form.radio,
            'delivery_date' : $scope.dateString,
            'comments' : $scope.comment,
            'language_code': sessionStorage.lang_code
        });

        $http({
            headers: {
                //'token': '40d3dfd36e217abcade403b73789d732',
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            method: 'POST',
            url: app_url + '/delivery_boy/update_order_status',
            data: args

        }).then(function (response) {
            res = response;

            if (res.data.responseStatus == 'success') {
                console.log(res); 
                //put cookie and redirect it    
                //model.show('Alert', res.data.responseMessage);
                $location.path('/order/myorderdetails');

            } else {
                //Throw error if not logged in
                //model.show('Alert', res.data.responseMessage);
              alert('Error in Status update');
            }

        }).finally(function () {
            loading.deactive();
        });
    }

    //End of Function


});