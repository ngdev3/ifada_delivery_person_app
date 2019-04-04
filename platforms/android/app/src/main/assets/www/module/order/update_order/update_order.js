app.controller("update_order", function(
  $filter,
  $scope,
  $http,
  $controller,
  $location,
  $cookieStore,
  model,
  loading,
  $rootScope,
  $cordovaFileTransfer
) {
  $controller("myorders", { $scope: $scope });

  if (!$cookieStore.get("userinfo")) {
    $location.path("/login");
    return false;
  }
  $scope.home = function() {
    //$location.path('/home');
    $(".modal-backdrop.in").css("opacity", "");
    window.history.back();
  };

  $scope.ordersInit();

  $cookieStore.remove("imagename")
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
  $scope.dateString = $filter("date")(date, "yyyy-MM-dd");
  //console.log($scope.dateString);

  $scope.orderinfo = $cookieStore.get("orderinfo");
 
  /**
   * Created By Sajal Goyal
   * Dated on 17/10/2018
   * Start of Function
   * function name : orderAgain
   * work on clicking on Order Again and work using reorder API
   */

  $scope.check_conditions = function() {
    //console.log('1')
    
    $('#hideimage').removeClass('show').addClass('hide');

    if ($("input[name='radio']:checked").val() == "8") {
      $scope.Reschedule = "1";
      $("#myModal").modal("show");

      document.addEventListener(
        "backbutton",
        function(e) {
          $("#myModal").modal("hide");
          return false;
        },
        false
      );
    } else {
      $scope.Reschedule = "";
      $("#myModal").modal("hide");
    }

    if ($("input[name='radio']:checked").val() == "5") {
      $scope.delivered = "1";
    } else {
      $scope.delivered = "";
    }

    if ($("input[name='radio']:checked").val() != "9") {
      $("#hno").removeAttr("required");
    } else if ($("input[name='radio']:checked").val() == "9") {
      $("#hno").attr("required", true);
    }
  };

  $scope.schedule = function(myform) {
    //console.log(myform)
    var reg1 = /[0-9]{2}[-|\/]{1}[0-9]{2}[-|\/]{1}[0-9]{4}/;

    if ($scope.dateString != $filter("date")(date, "yyyy-MM-dd")) {
      if ($scope.dateString == "" || $scope.dateString == undefined) {
        alert("Date field should not blank");
        $scope.dateString = $filter("date")(date, "yyyy-MM-dd");
        return false;
      }
      if (reg1.test($scope.dateString) == false) {
        error_str = "Date Format Is Wrong";
        // model.show('Alert', error_str);
        alert(error_str);
        $scope.dateString = $filter("date")(date, "yyyy-MM-dd");
        return false;
      }
    }
    console.log($scope.dateString);
    //console.log($scope.scheduletime)
  };

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

  $scope.getUrl = function() {
    var args = $.param({
      user_id: $cookieStore.get("userinfo").uid
    });
    $http({
      headers: {
        //'token': '40d3dfd36e217abcade403b73789d732',
        "Content-Type": "application/x-www-form-urlencoded"
      },
      method: "POST",
      url: app_url + "/delivery_boy/get_base_url",
      data: args
    })
      .then(function(response) {
        res = response;
        //  $cookieStore.remove('orderstatus');
        console.log(res.data.data.url);
        if (res.data.responseCode == 200) {
          $scope.url_of_server = res.data.data.url;
        }
      })
      .finally(function() {
        loading.deactive();
      });
  };

  $scope.form = {};
  let globalImageName;
  var imageName;
  $scope.update_status = function(form) {

    if ($scope.form.radio == "5") {
      if($cookieStore.get("imagename") == undefined || $cookieStore.get("imagename") == '' ){
        alert("Upload the Proof Of Delivery First");
        return;
      }
    }

    if ($("input[name='radio']:checked").val() == "8") {
      if ($scope.dateString == undefined || $scope.dateString == "") {
        alert("Please Provide Date");
        return;
      }
    } else {
      $scope.dateString = "";
    }

    if ($rootScope.detail_status < 4 && $scope.form.radio > 4) {
      alert("Status should Out for delivery first");
      return false;
    }
    var error_str = "";
    console.log($scope.form.radio);
    if ($scope.form.radio == undefined || $scope.form.radio == "") {
      error_str = "Order Status";
      console.log(error_str);
    } else {
      error_str = "";
    }
    if ($("input[name='radio']:checked").val() == "9") {
      if ($scope.comment == undefined || $scope.comment == "") {
        error_str += "Comment";
      }
    }
    if (error_str !== "") {
      error_str =
        " <span style='font-weight:700;'>Following fields must have valid information:</span> <br/> " +
        error_str;
      // model.show('Alert', error_str);
      alert(error_str);
      return;
    }
    if ($rootScope.detail.status == $scope.form.radio) {
      alert("Already Updated you can not select this status");
      return;
    }
    console.log(error_str);
    loading.active();

    var args = $.param({
      user_id: $cookieStore.get("userinfo").uid,
      order_id: $rootScope.detail.order_id,
      m_order_id: $rootScope.detail.id,
      order_status: $scope.form.radio,
      delivery_date: $scope.dateString,
      comments: $scope.comment,
      language_code: sessionStorage.lang_code,
      id_proof:$cookieStore.get("imagename")
    });

    $http({
      headers: {
        //'token': '40d3dfd36e217abcade403b73789d732',
        "Content-Type": "application/x-www-form-urlencoded"
      },
      method: "POST",
      url: app_url + "/delivery_boy/update_order_status",
      data: args
    })
      .then(function(response) {
        res = response;

        if (res.data.responseStatus == "success") {
          console.log(res);
          //put cookie and redirect it
          //model.show('Alert', res.data.responseMessage);
          $location.path("/order/myorderdetails");
        } else {
          //Throw error if not logged in
          //model.show('Alert', res.data.responseMessage);
          alert("Error in Status update");
        }
      })
      .finally(function() {
        loading.deactive();
      });
  };

  //End of Function
  var currentstatus;
  var strongval;
  // console.log(encodeURI(app_url + "/delivery_boy/upload_id_proof_image"))
  $scope.file_uploads = function() {
    $scope.getUrl();
    if (navigator.camera) {
      navigator.camera.getPicture(onSuccess, onFail, {
        sourceType: navigator.camera.PictureSourceType.PHOTOLIBRARY,
        mediaType: navigator.camera.MediaType.PICTURE,
        quality: 50,
        EncodingType: 0,
        destinationType: Camera.DestinationType.FILE_URI
      });
    } else {
      alert("There is problem with Gallery");
    }

    function onFail(err) {
      alert(err);
    }

    function onSuccess(imageURI) {
     // alert(imageURI);
      //     var rsses = JSON.parse(imageURI);
       loading.active();
       var options = new FileUploadOptions();
       options.fileKey = "file";
       options.chunkedMode = false;
       options.fileName = "random.jpg"; //imageURI.substr(imageURI.lastIndexOf('/') + 1);
       
       // var params = {};
       // params.user_id = 25;//$cookieStore.get('userinfo').uid;
       //     // params.uuid = sessionStorage.u_ids;
       // options.params = params;
       //     // options.headers =  { 'Content-Type': undefined }
       //     // alert(params);
       var ft = new FileTransfer();
       ft.upload(
         imageURI,
         encodeURI(
           "http://projects.tekshapers.org/ifadabeta/webservices/delivery_boy/upload_id_proof_image"
           ),
           function(result) {
             loading.deactive();
             //  alert(JSON.stringify(result));
          var imagpoint = JSON.stringify(result);
          $scope.lang_code = imagpoint.split("/");
          $scope.lang_codes = $scope.lang_code[6];
          $scope.usercde = $scope.lang_codes.split("jpg");
          $scope.usercde = $scope.usercde[0];
       //   alert($scope.usercde); 
         
          imageName = $scope.usercde + "jpg"
        //  alert(imageName); 
          $cookieStore.put("imagename", imageName);
          imageName = $scope.url_of_server + imageName;
          $('#url_of_server').attr('src',imageName)
          $('#hideimage').removeClass('hide');
          // alert($cookieStore.get("imagename"))
         // alert(imageName); 
        },
        function(error) {
          alert("Error:-  " + JSON.stringify(error));
        },
        options
      );
    }
  };

  $scope.file_upload_via_camera = function() {
    // alert()
    if (navigator.camera) {
      navigator.camera.getPicture(onSuccess, onFail, {
        sourceType: navigator.camera.PictureSourceType.CAMERA,
        mediaType: navigator.camera.MediaType.PICTURE,
        quality: 50,
        EncodingType: 0,
        correctOrientation: true ,
        destinationType: Camera.DestinationType.FILE_URI
      });
    } else {
      alert("There is problem with Camera");
    }

    function onFail(err) {
      alert(err);
    }

    function onSuccess(imageURI) {
    //  alert(imageURI);
      //     var rsses = JSON.parse(imageURI);
       loading.active();
      var options = new FileUploadOptions();
      options.fileKey = "file";
      options.chunkedMode = false;
      options.fileName = "random.jpg";
      var ft = new FileTransfer();
      ft.upload(
        imageURI,
        encodeURI(
          "http://projects.tekshapers.org/ifadabeta/webservices/delivery_boy/upload_id_proof_image"
        ),
        function(result) {
         // alert(result);
         loading.deactive();
        //  alert(JSON.stringify(result));
          var imagpoint = JSON.stringify(result);
          $scope.lang_code = imagpoint.split("/");
          $scope.lang_codes = $scope.lang_code[6];
          $scope.usercde = $scope.lang_codes.split("jpg");
          $scope.usercde = $scope.usercde[0];
          //   alert($scope.usercde); 
         
          imageName = $scope.usercde + "jpg"
          //  alert(imageName); 
          $cookieStore.put("imagename", imageName);
          imageName = $scope.url_of_server + imageName;
          $('#url_of_server').attr('src',imageName)
          $('#hideimage').removeClass('hide');
        //  alert($cookieStore.get("imagename"))

        },
        function(error) {
          alert("Error:-  " + JSON.stringify(error));
        },
        options
      );
    }
  };

  $scope.getUrl();
});
