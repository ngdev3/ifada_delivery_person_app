app.controller('myorders', function ($scope, $http, $location, $cookieStore, model, loading, $rootScope, $route) {


    if (!$cookieStore.get('userinfo')) {
        $location.path('/login');
        return false;
    }
    

  //  var GlobalUID = $cookieStore.get('userinfo').uid; //Global Uid for get the response by sending the http request.

    
    //loading.deactive();

    $scope.home = function () {
        //$location.path('/home');
        window.history.back();
    }

    $scope.orders = function () {
        $location.path('myaccount/account');
        //window.history.back();
    }


    /**
     * Funtion: ordersInit from my_orders.html on ng-init
     * Name: Sajal Goyal
     * Created-on: 05/10/2018 at 12:45pm
     * Get the order list by sending the http request
     */


    $scope.ordersInit = function (status = null, type = null) {

        loading.active();

       if(status == 'direct'){

        var args = $.param({
            country_id: sessionStorage.country,
             user_id: $cookieStore.get('userinfo').uid,
             user_type: $cookieStore.get('userinfo').left_data.user_type,
             language_code : sessionStorage.lang_code,
             page : 0,             
             status:type
             

        });

       }else{

        var args = $.param({
            country_id: sessionStorage.country,
             user_id: $cookieStore.get('userinfo').uid,
             user_type: $cookieStore.get('userinfo').left_data.user_type,
             language_code : sessionStorage.lang_code,
             page : 0
        });

    }
      
        

        $http({
            headers: {
                //'token': '40d3dfd36e217abcade403b73789d732',
                'Content-Type': 'application/x-www-form-urlencoded'
            },
            method: 'POST',
            url: app_url + '/delivery_boy/order_list',
            data: args 

        }).then(function (response) {

            res = response;
            $cookieStore.remove('orderstatus');
           //console.log(res.data.data.order_list);
           if(res.data.responseCode == 200){
            $scope.order_list = res.data.data.orders;
           

            if(status !== 'direct'){

                $scope.order_status = res.data.data.order_status;
            }
           
        }else{
               $scope.order_list= '';
           // alert("Order Doesn't Exist");
           }

        }).finally(function () {
            loading.deactive();
        });


    }
	
	$scope.init =function(id){
		    var max_heightss = $(".accordion-panel_"+id).css("maxHeight");
		 var iScrollHeight = $(".accordion-panel_"+id).prop("scrollHeight");
		 if(max_heightss!="0px"){
			 $("#accord_"+id).removeClass("selected");
			  $(".accordion-panel_"+id).css('max-height', '0');
		 }else{
			 $("#accord_"+id).addClass("selected");
			   $(".accordion-panel_"+id).css('max-height', iScrollHeight+'px');
		 }
	}

    /**
     * created by Nitin
     * created on 16/10/2018
     * Function Name : deleteOrder
     * this function will delete the order according to the orderno
     */

    $scope.deleteOrder = function (no) {

        $.confirm({
            title: 'Cancel Order!',
            content: '' +
                '<form action="" class="formReason">' +
                '<div class="form-group">' +
                '<label>Reason</label>' +
                '<input type="text" placeholder="Enter Reason Here" class="name form-control" required />' +
                '</div>' +
                '</form>',
            buttons: {

                formSubmit: {
                    text: 'Submit',
                    btnClass: 'btn-blue',
                    action: function () {
                        var name = this.$content.find('.name').val();
                        if (!name) {
                            $.alert('Please Provide the Reason');
                            return false;
                        }
                        loading.active();

                        var name = this.$content.find('.name').val(); //to get the prompt value

                        var args = $.param({
                            'uid': GlobalUID,
                            'order_no': no,
                            'reason': name
                        });

                        //alert(name);return false; 
                        if (name != "") {
                            $http({
                                headers: {
                                    //'token': '40d3dfd36e217abcade403b73789d732',
                                    'Content-Type': 'application/x-www-form-urlencoded'
                                },
                                method: 'POST',
                                url: app_url + '/profileapi/cancelOrder',
                                data: args
                            }).then(function (response) {
                                loading.deactive();
                                // console.log(response);
                                // return false;
                                // $.alert('Confirmed!');
                                if (response.data.status == "success") {
                                    alert("Order Successfully Cancelled");
                                    $scope.ordersInit();
                                } else {
                                    alert("Something went wrong.");
                                }
                            })
                        } else {
                            alert("Please Provide the Reason");
                            $scope.ordersInit();
                        }
                    }
                },
                cancel: function () {

                }
            }
        })
    }
    //End of Function

    $scope.orderDetails = function (mormderID, orderID) {
        var orderData = {
            m_order_id:mormderID,
            order_id:orderID,
        }
        $cookieStore.put('orderID', orderData);
        $location.path('/order/myorderdetails');
    }


    $scope.fetch_order_list = function (status = null, id = null) {
        
        if(status == 'direct'){
            $scope.ordersInit(status,id);
        }

    }

    if ($cookieStore.get('orderstatus')) {
        $scope.ordersInit('direct',$cookieStore.get('orderstatus').status);
        
    }else{
        
        $scope.ordersInit('apply');
    }



    



});