<?php include 'header.php';?>

<header class="container-fluid nav-down">
	<div class="row">
		<nav class="navbar navbar-inverse">
		  <div class="container no-padding">
			<ul class="nav navbar-nav top_header text-center">
			  <li class="menu_icon "><a href="#"  ><img src="assets/img/icon/back.png" id="asdf" alt="menu icon"style="width: 13px;" /></a></li>
				<li class="page_name left">
					<a href="#" class="text-left ">
						<p>Checkout</p>
					</a>
				</li>
			  
			</ul>
			
		  </div>
		</nav>
	
	</div>
	<!-- MOBILE-MENU-AREA END -->
</header>
<!-- END HEADER -->
	
<!--  START Banner SLIDER -->
	<div class="container-fluid mt-55">
	<div class="row">
		<div class="checkoout_container">
			<div class="dlvry_container">
				<div class="dlvry_heading">
					<p>Delivery Address</p>
				</div>
				<div class="dlvry_address col-xs-12">
					<div class="dlvry_address_heading">
						<h5>YOUR ADDRESS</h4>
						<a href=""><img src="assets/img/icon/edit_fill.png" /></a>
					</div>
					<div class="dlvry_address_content">
						<h5>Home</h5>
						<p>B-88</p>
						<p>Tekshapers</p>
						<p>Sector-65, Noida</p>
					</div>
				</div>
			</div>
			<div class="dlvry_time_container mt-15">
				<div class="dlvry_address col-xs-12">
					<div class="dlvry_address_heading">
						<h5>Preferred Delivery Time</h4>
						<div class="mui-select">
							<select>
							  <optgroup label="Tomorrow">
								<option>7:00 AM-9:30 AM</option>
								<option>9:30 AM-12:00 PM</option>
								<option>5:00 PM-7:30 PM</option>
								<option>7:30 PM-10:00 PM</option>
							  </optgroup>
							  <optgroup label="20 Oct, Sat">
								<option>7:00 AM-9:30 AM</option>
								<option>9:30 AM-12:00 PM</option>
								<option>5:00 PM-7:30 PM</option>
								<option>7:30 PM-10:00 PM</option>
							  </optgroup>
							  <optgroup label="21 Oct, Sun">
								<option>7:00 AM-9:30 AM</option>
								<option>9:30 AM-12:00 PM</option>
								<option>5:00 PM-7:30 PM</option>
								<option>7:30 PM-10:00 PM</option>
							  </optgroup>
							  <optgroup label="22 Oct, Mon">
								<option>7:00 AM-9:30 AM</option>
								<option>9:30 AM-12:00 PM</option>
								<option>5:00 PM-7:30 PM</option>
								<option>7:30 PM-10:00 PM</option>
							  </optgroup>
							</select>
						</div>
						<div class="mui-checkbox">
							<label>
							  <input type="checkbox" value="" checked>
							  Use Loyality Points
							</label>
						</div>
						<table class="mui-table">
						  <tbody>
							<tr>
							  <td>Bag Total</td>
							  <td align="right">AED 70</td>
							</tr>
							<tr>
							  <td>Discount</td>
							  <td align="right">AED 10</td>
							</tr>
							<tr>
							  <td>Loyalty Points Discounts</td>
							  <td align="right">AED 06</td>
							</tr>
							<tr>
							  <td>Total Payments Payable</td>
							  <td align="right">AED 54</td>
							</tr>
						  </tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="view_prod">
				<p class="col-xs-6"><a href="view_cart.php">View Items</a></p>
				<p class="col-xs-6 text-right"><span class="prod_qty">2</span> products in Cart</p>
			</div>
			<div class="submit-btn col-sm-6 col-xs-12 text-center mt-25">
				<a href="payment_option.php">Proceed To Payment</a>
			</div>
		</div>
	</div>
	</div>
<!--  END Banner SLIDER -->

<?php include 'footer.php';?>