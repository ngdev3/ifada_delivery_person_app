<?php include 'header.php';?>


<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header text-center">
			  
				<li class="page_name">
					<a href="#" class="text-left text-center">
						<p>OTP</p>
					</a>
				</li>
			  
			</ul>
			
		  </div>
		</nav>
	
	</div>
	<!-- MOBILE-MENU-AREA END -->
</header>
<!-- END HEADER -->
<div class="">	
	<div class="otp_verify mt-70"> 
	     <div class="otp_send_msg">
		     <p>Please type the verification code sent to +973 32187977</p>
		 </div>
	</div>
    
	<div class="container">
		<div id="otp">
    	<div class="digit">
    	  <div class="digit1">
    	  	<input type="text" name="digit1" placeholder="*" maxlength="1" autocomplete="on">
    	  
    	  
    	  	<input type="text" name="digit1" placeholder="*" maxlength="1" autocomplete="on">
    	  
    	  
    	  	<input type="text" name="digit1" placeholder="*" maxlength="1" autocomplete="on">
    	  
    	  
    	  	<input type="text" name="digit1" placeholder="*" maxlength="1" autocomplete="on">
    	  </div>
    	</div>
    </div>
    </div>
	

    <div class="sign-up-button">
    	<button class="otp-btn">
    		Submit
    	</button>
    </div>
	<div class="resend_otp mt-15">
    	<a href="javascript:void(0)" class="mr-30"> Resend OTP</a>
    </div>
    </div>
<script>

    $('.digit1 input').keyup(function(){
        if($(this).val().length==$(this).attr("maxlength")){
            $(this).next().focus();
        }
    });

</script>	
<?php include 'footer.php';?>