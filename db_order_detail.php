<?php include 'header.php';?>
<style type="text/css">
	
.modal-header{
	padding: 10px;
	border-bottom: 1px solid #e5e5e5;
}
.modal-body {
    position: relative;
    padding: 10px 15px;
}
.modal-footer {
    padding: 10px;
    text-align: center;
    border-top: 1px solid #e5e5e5;
}
.modal-footer button{
    padding: 5px 25px;
    background-color: #006d07;
    color: #fff;
}
.tracking_btn {
    padding: 5px 10px;
}
.modal-title {
    font-size: 17px;
	text-transform: uppercase;
}
</style>
<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header">
			  <li class="menu_icon "><a href="#"  ><img src="assets/img/icon/back.png" id="asdf" alt="menu icon"style="width: 13px;" /></a></li>
				<li class="page_name left">
					<a href="#" class="text-left ">
						<p>Order ID: <span>12345</span></p>
					</a>
				</li>
			  
			</ul>
			<ul class="nav navbar-nav bottom_header">
			  <li class="menu_search_container"><a href="#">
				<!--<img src="assets/img/header/search_icon.png" alt="cart icon" />-->
				<input type="text" class="menu_search" placeholder="Search products brands and more"/>
			  </a></li>
			</ul>
		  </div>
		</nav>
	
	</div>
	<!-- MOBILE-MENU-AREA END -->
</header>
<!-- END HEADER -->

<!--  [PULSES] Sub categories content -->
	<div class="container-fluid mt-55">
		<div class="row">
			<div class="">
				<!-- ** Buttons** -->
				<div class="pulses_buttons  tracking_main_container db_order_div">

					<h5 class="tracking_heading db_track">
						<span>
							<img src="assets/img/db_orderl.png">
						</span>12/03/12
					</h5>
					<h5 class="tracking_heading db_track">
						<span>
							<img src="assets/img/db_clock.png">
						</span>10:00 AM
					</h5>
					
					<input type="button" class="btn btn-default tracking_btn ticket_process_btns ticket_pending" name="" value="Pending">
					
				</div>
				<!-- ** !. Buttons ** -->
				
				<!-- ** Product Lists ** -->
				<!-- About Product Of a Customer -->
				<div class="about_customer">
					<div class="cust_address">
						<h4 class="cust_name">Rajat Jha</h4>
						<p class="cust_residence">4 Clarke Street South, Abu Dubai, United Arab Emirates </p>
					</div>
					<div class="order_type">
						<div class="cod"><a href="#">COD</a></div>
					</div>
					<div class="call_customer">
						<div class="cust_no pl-15 pr-15"><a href="#">Call Customer</a></div>
					</div>
					<div class="view_map">
						<div class="cust_location"><a href="#">View Map</a></div>
					</div>
				</div>
				<!-- About Product Of a Customer Ends -->

				<!-- Item Number-->
				<div class="db_items">
					<h4>Item Details</h4>
					<p>Total No. Of Items - <span>2</span></p>
				</div>
				<div class="main_item_div">
					<div class="db_item_main">
						<div class="item_img_container">
							<div><img src="assets/img/db_item.png"></div>
						</div>
						<div class="about_db_item">
							<h4>Dry Fruits</h4>
							<p>Unit <span class="ml-30">500 gm</span></p>
							<p>Price <span class="ml-25">AED 140</span></p>
						</div>
					</div>
					<div class="db_item_main">
						<div class="item_img_container">
							<div><img src="assets/img/db_item2.png"></div>
						</div>
						<div class="about_db_item">
							<h4>Dry Fruits</h4>
							<p>Unit <span class="ml-30">500 gm</span></p>
							<p>Price <span class="ml-25">AED 140</span></p>
						</div>
					</div>
					<div class="item_total">
						<h4>Total Amount: <span>AED 280</span></h4>
					</div>
				</div>
				<div class="update_status">
					<div><a href="#" data-toggle="modal" data-target="#myModal">Update Status</a></div>
				</div>
				<!-- Item Number Ends-->
				
			</div>
		</div>
	</div>
<!--  !. [PULSES] Sub categories content -->
<!-- modal box -->
<div id="myModal" class="modal fade" role="dialog">
	<div class="modal-vcenter">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Update Status</h4>
      </div>
      <div class="modal-body">
        <!-- Content Of modal-->
				<div class="radio mb-20 mt-10">
					<input id="radio-1" name="radio" type="radio">
					<label for="radio-1" class="radio-label"><span>On the way</span></label>
				</div>
			  <div class="radio mb-20">
				<input id="radio-2" name="radio" type="radio">
				<label for="radio-2" class="radio-label"><span>Delivered</span></label>
			  </div>
			  <div class="radio mb-20">
				<input id="radio-3" name="radio" type="radio">
				<label for="radio-3" class="radio-label"><span>Cancelled</span></label>
			  </div>

        <!-- Content Of modal-->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
      </div>
    </div>

  </div>
  </div>
</div>	

	
<script>

	
$(document).ready(function(){
	$(".cart_icon a:last-child").click(function(){
		//alert();
		$(".bottom_header").slideToggle();
		//$("#banner_slider").toggleClass("search-container")
	});	
});
    </script>	
<?php include 'footer.php';?>