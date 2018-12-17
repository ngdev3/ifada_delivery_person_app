<?php include 'header.php';?>

<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header">
			  <li class="menu_icon "><a href="#"  ><img onclick="openNav_2()" src="assets/img/icon/ham_icon_2.png" id="asdf" alt="menu icon" /></a></li>
				<li class="logo_name"><a class="text-left back">IFADA DELIVERY</a></li>
			  
			</ul>
			
		  </div>
		</nav>
	
	</div>
	<!-- MOBILE-MENU-AREA END -->
</header>
<!-- END HEADER -->
	

	

	
<!--  START landing Section -->
	<div class="db_landing mt-50">
		<div class="pending_main_div">
			<div class="pending_div">
				<div class="notify_img_container"><img src="assets/img/notification_icon.png"></div>
				<div class="notify_text"><p>Pending</p></div>
				<span class="badge">5</span>
			</div>
		</div>
		<div class="pending_main_div">
			<div class="pending_div">
				<div class="notify_img_container"><img src="assets/img/delivery_icon.png"></div>
				<div class="notify_text pt-20"><p>Delivered</p></div>
				<span class="badge">5</span>
			</div>
		</div>
	</div>
	
	
	<div class="landing_bg">
		<div class="landing_img_cont">
			<img src="assets/img/landing-page_bg.png">
		</div>
	</div>
<!--  END landing Section -->

	




<!-- Location Modal -->
  <div class="modal fade" id="myLocation" role="dialog">
	<div class="modal-vcenter">
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
			  <div class="location-search">
				<input type="text" id="location-search" placeholder="Seacrh location..."/>
			  </div>
			  <div class="submit-btn text-center">
				<a href="#">Submit</a>
			  </div>
			</div>
		  </div>
		  
		</div>
    </div>
  </div>
 
	
<script>

	
$(document).ready(function(){
	$(".cart_icon a:last-child").click(function(){
		$(".bottom_header").slideToggle();
		//$("#banner_slider").toggleClass("search-container")
	});	
});
    </script>	
<?php include 'footer.php';?>