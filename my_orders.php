<?php include 'header.php';?>
<style type="text/css">

.products_wrapper.ticket_wrapper
{
	display: block;
	padding: 15px;
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
						<p>My Orders</p>
					</a>
				</li>
			  <li class="cart_icon">
				  <a href="./view_cart.php"><img src="assets/img/icon/cart_icon.png" alt="cart icon"  />
					<!--<span class="badge">14</span>-->
				  </a>
				  <a href="#"><img src="assets/img/icon/search_icon.png" alt="search icon" /></a>
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
				
				
				<!-- ** My Order List  ** -->
				
				<div class="no-padding item_lists_main">
					<a href="./order_summary.php">
						<div class="prodcut_main_container">
							<div class="products_wrapper ticket_wrapper">
								
									<div class="row padding_ticket">
										<div class="col-md-9 col-sm-9 col-xs-9 no-padding">
											<h5 class="ordrlist_head"><img class="myorderlist_img" src="assets/img/my_order_list.png">Order ID 0D8347</h5>
											<div>
											<h5>Total : AED 65</h5>
											<p>27-10-2018, 10:20</p>
											</div>
										</div>
										
										<div class="col-md-3 col-sm-3 col-xs-3 no-padding" style="text-align: center;">
											<input type="button" class="btn btn-default btn_discounts ticket_process_btns inprocess_order" name="" value="In Process">
											<i class="fa fa-angle-right nav_to_orders" aria-hidden="true"></i>
										</div>
									</div>
									
								
								
							</div>
						</div>
					</a>
				</div>
				<!-- ** !. My Order List ** -->
				<!-- ** My Order List 2 [Delivered]  ** -->
				
				<div class="no-padding item_lists_main">
					<a href="./order_summary.php">
						<div class="prodcut_main_container">
							<div class="products_wrapper ticket_wrapper">
								
									<div class="row padding_ticket">
										<div class="col-md-9 col-sm-9 col-xs-9 no-padding">
											<h5 class="ordrlist_head"><img class="myorderlist_img" src="assets/img/my_order_list.png">Order ID 0D7947</h5>
											<div>
											<h5>Total : AED 165</h5>
											<p>25-10-2018, 14:45</p>
											</div>
										</div>
										
										<div class="col-md-3 col-sm-3 col-xs-3 no-padding" style="text-align: center;">
											<input type="button" class="btn btn-default btn_discounts ticket_process_btns delivered_order" name="" value="In Process">
											<i class="fa fa-angle-right nav_to_orders" aria-hidden="true"></i>
										</div>
									</div>
									
								
								
							</div>
						</div>
					</a>
				</div>
				<!-- ** !. My Order List 2 [Delivered] ** -->

			
				
				
			</div>
		</div>
	</div>
<!--  !. [PULSES] Sub categories content -->
	

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
