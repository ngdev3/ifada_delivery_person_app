<?php include 'header.php';?>


<!--<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header text-center">
			  
				<li class="page_name">
					<a href="#" class="text-left text-center">
						<p></p>
					</a>
				</li>
			  
			</ul>
			
		  </div>
		</nav>
	
	</div>
	<!-- MOBILE-MENU-AREA END -->
<!--</header>-->
<!-- END HEADER -->
<div class="thank_you_main">	
	<div class="tk_text mt-35 mb-35 pt-10 pb-10"> 
		 <div class="tk_icon"><img src="assets/img/thank_you_icon.png"></div>
		 <div class="text_div">
			 <h3>THANK YOU</h3>
			 <P>For Shopping With Us</P>
		 </div>
	</div>
	<div class="tk_bottom">
		<div class="tk_img"><img src="assets/img/thank_you.png"></div>
		<div class="tk_order">
			<h5>Your Order Has Been Confirmed</h5>
			<h5>Your Order No. <span>IF-201</span></h5>
		</div>
	
		<div class="tk_bg">
			<div class="tk_hungry"><h5>Still Hungry For Shopping ?</h5></div>
			<div class="cont_shop"><a href="javascript:void(0)" class="">SHOP NOW</a></div>
		</div>
		<div class="see_order"><a style="font-weight:700" href="javascript:void(0)">VIEW ORDER</a></div>
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